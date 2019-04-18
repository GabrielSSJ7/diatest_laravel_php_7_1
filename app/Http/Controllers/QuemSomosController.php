<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    //

    function index(){
        $factories = \DB::select('select * from factories', [1]);

        $categories = \DB::select(
            'SELECT categories.id, categories.name, categories.slug, categories.category_id FROM categories
            WHERE categories.category_id is null
            order by categories.order ASC;',
        [1]);

        $i = 0;
        $arrayCategories = array();
        foreach($categories as $k => $v){

            $arrayCategories[$i] = [$v->name];

            $categoryId = (int)$v->id;

            $subcategories = \DB::select("SELECT * FROM categories WHERE categories.category_id = $categoryId;", [1]);

            if (count($subcategories) > 0) {
                $in = 0;
                //$arrayCategories[$i][] = array();
                foreach($subcategories as $subs => $sub) {
                    $arrayCategories[$i][1][] = [ 'subName'=> $sub->name, 'subSlug'=>$sub->slug ];
                    $in++;
                }
                //$finalCategories[$i][] = ['sub'=> $arraySubCategories];
            }

            $i++;
        }
        return view('quem-somos', ['factories'=>$factories, 'categories'=>$arrayCategories]);
    }
}
