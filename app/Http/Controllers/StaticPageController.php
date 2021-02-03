<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use \Illuminate\Database\Eloquent\Collection;

class StaticPageController extends Controller
{
    public function index()
    {
        $collection=new Collection();
        $collection->add(
        [
                (object)[
                'image'=>'/img/mock-1.jpg',
                'title'=>'Lorem ipsum dolor sit amet.'
            ],
                (object)[
                'image'=>'/img/mock-1.jpg',
                'title'=>'Lorem ipsum dolor sit amet.'
            ],
                (object)[
                'image'=>'/img/mock-1.jpg',
                'title'=>'Lorem ipsum dolor sit amet.'
            ],
                (object) [
                'image'=>'/img/mock-1.jpg',
                'title'=>'Lorem ipsum dolor sit amet.'
            ],
                (object)[
                'image'=>'/img/mock-1.jpg',
                'title'=>'Lorem ipsum dolor sit amet.'
            ],
                (object)[
                'image'=>'/img/mock-1.jpg',
                'title'=>'Lorem ipsum dolor sit amet.'
            ]
        ]);
        $context = [
            'images'=>$collection
        ];

        return view('pages/index',[
            'gallery'=>$collection
        ]);
    }
    public function plasm_cutting()
    {
        $context = [];

        return view('pages/plasm-cutting',$context);
    }
}
