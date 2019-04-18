<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //

    function index() {
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
        return view('/contato', ['factories'=>$factories, 'categories'=>$arrayCategories]);
    }

    function sendMail(Request $request, Mailer $mailer){
        $mailer->to($request->input('email'))
        ->send(new sendMail(
            $request->input('name'),
            'Contato do site',
            $request->input('nome'),
            $request->input('sobrenome'),
            $request->input('email'),
            $request->input('empresa'),
            $request->input('telefone'),
            $request->input('estado'),
            $request->input('cidade'),
            $request->input('duvida')));
        return redirect()->back()->with('success', 'Seu e-mail foi enviado com sucesso. Aguarde nosso contato!');;
    }
}
