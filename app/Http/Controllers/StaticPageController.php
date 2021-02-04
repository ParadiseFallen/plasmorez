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
    public function plasmCutting()
    {
        $context = [];

        return view('pages/plasm-cutting',$context);
    }

    public function sheetBend()
    {
        $context = [];
        return view('pages/sheet-bend',$context);
    }
    public function pipeBend()
    {
        $context = [];
        return view('pages/pipe-bend',$context);
    }
    public function cutting()
    {
        $context = [];
        return view('pages/cutting',$context);
    }
    public function forge()
    {
        $context = [];
        return view('pages/forge',$context);
    }
    public function painting()
    {
        return view('pages/painting')
            ->with('order_item',(object)[
            'image' => '/img/mask.jpg',
            'header' => 'Подготовка и покраска',
            'description' =>
                '<p>Подготовка поверхности металлоконструкций перед нанесением краски</p>
                <p>Выбор краски и способа её нанесения</p>
                <p>Способы покраски металлоконструкций</p>
                <p>Грунтовка металлоконструкций</p>
                <p>Способы покраски металлоконструкций</p>
                <p>Покраска металла</p>'
        ]);
    }
    public function docs()
    {
        return view('pages/docs')
            ->with('order_items',[(object)[
                'image' => '/img/docs1.jpg',
                'header' => 'Проектирование и разработка конструкторской документации в ',
                'description' =>
                    '<p>Производство сложных технических изделий подразумевает под собой инженерно-конструкторскую деятельность. Любое изделие, выпускаемое в промышленных масштабах, требует разработки конструкторской документации.
Здесь речь идет не только о технических данных, заданных по техническим условиям разработки, но еще и о промышленных операциях, выполняемых на различном оборудовании, различными специалистами или в автоматическом режиме.
Процесс разработки технической документации достаточно длителен и требует работы квалифицированных и опытных специалистов инженеров-проектировщиков, которые разбираются в работе производственной линии и понимают поставленную задачу.</p>'
            ],(object)[
                'image' => '/img/docs2.jpg',
                'header' => 'Разработка конструкторской документации на заказ',
                'description' =>
                    '<p>Наши инженеры-конструкторы на стадии проектирования зададут параметры и значения, которые в конечном итоге реализуются в готовую деталь или изделие, а правильность расчетов и оформления документации во многом определяет качество конечного продукта.
Проектирование и разработка конструкторской документации начинается с получения технических условий на проектирование.</p>'
            ]]);
    }

}
