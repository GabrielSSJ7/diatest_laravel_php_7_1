<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //.
    function getFactoriesForMenu()
    {
        $factories = \DB::select('select * from factories', [1]);

        return $factories;
    }

    function getCateogoriesWithoutFab()
    {
        $categories = \DB::select(
            'SELECT categories.id, categories.name, categories.slug, categories.category_id FROM categories 
            WHERE categories.category_id is null
            order by categories.order ASC;',
            [1]
        );

        $i = 0;
        $arrayCategories = array();
        foreach ($categories as $k => $v) {

            $arrayCategories[$i] = [$v->name];

            $categoryId = (int)$v->id;

            $subcategories = \DB::select("SELECT * FROM categories WHERE categories.category_id = $categoryId;", [1]);

            if (count($subcategories) > 0) {
                $in = 0;
                //$arrayCategories[$i][] = array();
                foreach ($subcategories as $subs => $sub) {
                    $arrayCategories[$i][1][] = ['subName' => $sub->name, 'subSlug' => $sub->slug];
                    $in++;
                }
                //$finalCategories[$i][] = ['sub'=> $arraySubCategories];
            }

            $i++;
        }
        return $arrayCategories;
    }

    function index($slug)
    {
        $produto = \DB::select("SELECT products.id as id, products.name as pname, products.reference as reference, 
        categories.name as cname, products.description, products.character,
        factories.name as fname, products.slug as pslug, categories.slug as cslug
        FROM products 
        INNER JOIN categories ON products.category_id = categories.id 
        JOIN factories ON products.factory_id = factories.id
        where products.slug = '$slug'; ", [1]);
        $pid = $produto[0]->id;
        $images = \DB::select("SELECT * FROM images where product_id = $pid;", [1]);

        $arrayCategories = $this->getCateogoriesWithoutFab();
        $factories = $this->getFactoriesForMenu();
        

        return view('produto', ['produto'=>$produto[0], 'images'=>$images,'categories'=>$arrayCategories, 'factories'=>$factories]);
    }
}
