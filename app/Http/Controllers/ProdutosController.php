<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //
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

    //

    function index($slug)
    {
        $produtos = \DB::select(
            "SELECT 
            products.id as id,
            products.name as pname,
            products.reference as reference,
            products.slug as slug,
            images.name as iname,
            categories.slug as slugc,
            categories.name as cname
        FROM
            products
        INNER JOIN
            categories ON products.category_id = categories.id
        INNER JOIN
            images on products.id = images.product_id
        WHERE
            categories.slug = '$slug';",
            [1]
        );

        $arrayCategories = $this->getCateogoriesWithoutFab();
        $factories = $this->getFactoriesForMenu();

        $empty = 'Nenhum produto encontrado';

        return view('produtos', ['categories' => $arrayCategories, 'products' => $produtos, 'factories' => $factories, 'empty'=> $empty]);
    }

    function fabIndex($slug)
    {
        $produtos = \DB::select(
            "SELECT 
            products.id as id,
            products.name as pname,
            products.reference as reference,
            products.slug as slug,
            images.name as iname,
            factories.name as cname
        FROM
            products
        JOIN
            images ON products.id = images.product_id
        JOIN
            factories ON products.factory_id = factories.id
        WHERE
            factories.slug = '$slug';",
            [1]
        );

        $categories = \DB::select(
            "SELECT DISTINCT categories.order, categories.id, categories.name, categories.slug, categories.category_id FROM categories 
            INNER JOIN products on categories.id = products.category_id
            INNER JOIN factories on products.factory_id = factories.id
            WHERE factories.slug = '$slug'
            order by categories.order ASC;",
            [1]
        );

        $i = 0;
        $arrayCategories = array();
        foreach ($categories as $k => $v) {

            $arrayCategories[$i] = [$v->name];

            $categoryId = (int)$v->category_id;

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

        $empty = 'Nenhum produto encontrado';

        $factories = $this->getFactoriesForMenu();

        return view('produtos', ['products' => $produtos, 'categories' => $arrayCategories, 'slug' => $slug, 'factories' => $factories, $empty]);
    }


    function fabProIndex($slug, $pslug)
    {
        $produtos = \DB::select(
            "SELECT 
            products.id as id,
            products.name as pname,
            products.reference as reference,
            products.slug as slug,
            images.name as iname,
            categories.slug as slugc,
            categories.name as cname
        FROM
            products
        INNER JOIN
            categories ON products.category_id = categories.id
        INNER JOIN
            images on products.id = images.product_id
        WHERE
            categories.slug = '$pslug';",
            [1]
        );
        $categories = \DB::select(
            "SELECT DISTINCT categories.order, categories.id, categories.name, categories.slug, categories.category_id FROM categories 
            INNER JOIN products on categories.id = products.category_id
            INNER JOIN factories on products.factory_id = factories.id
            WHERE factories.slug = '$slug'
            order by categories.order ASC;",
            [1]
        );

        $i = 0;
        $arrayCategories = array();
        foreach ($categories as $k => $v) {

            $arrayCategories[$i] = [$v->name];

            $categoryId = (int)$v->category_id;

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

        $empty = 'Nenhum produto encontrado';

        $factories = $this->getFactoriesForMenu();

        return view('produtos', ['products' => $produtos, 'categories' => $arrayCategories, 'slug' => $slug, 'pslug' => $pslug, 'factories' => $factories, 'empty'=>$empty]);
    }

    function search(Request $request)
    {
        $key = $request->input('key');
        $produtos = \DB::select("SELECT products.id as id,products.name AS pname,products.reference, images.name as iname, products.slug as slug 
        FROM products 
        JOIN images ON products.id = images.product_id 
        WHERE products.name LIKE '$key%';", [1]);

        $arrayCategories = $this->getCateogoriesWithoutFab();
        $factories = $this->getFactoriesForMenu();

        $empty = 'Resultados da sua busca';

        return view('produtos', ['products'=> $produtos, 'categories'=> $arrayCategories, 'factories'=> $factories, 'empty'=>$empty]);
    }
}
