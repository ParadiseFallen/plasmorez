<?php
namespace App;
use \Illuminate\Database\Eloquent\Collection;

class StaticPageData
{
    public static function GetIndexGallery()
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
        return $collection;
    }
    public static function GetPlasmCuttingGallery()
    {
        $collection = new Collection();
        $collection->add(
            [
                (object)[
                    'image' => '/img/mock-1.jpg',
                    'title' => 'Lorem ipsum dolor sit amet.'
                ],
                (object)[
                    'image' => '/img/mock-1.jpg',
                    'title' => 'Lorem ipsum dolor sit amet.'
                ],
                (object)[
                    'image' => '/img/mock-1.jpg',
                    'title' => 'Lorem ipsum dolor sit amet.'
                ],
                (object) [
                    'image' => '/img/mock-1.jpg',
                    'title' => 'Lorem ipsum dolor sit amet.'
                ],
                (object)[
                    'image' => '/img/mock-1.jpg',
                    'title' => 'Lorem ipsum dolor sit amet.'
                ],
                (object)[
                    'image' => '/img/mock-1.jpg',
                    'title' => 'Lorem ipsum dolor sit amet.'
                ]
            ]
        );
        return $collection;
    }

    public static function GetOrderItems()
    {
        $items = new Collection();

        $items->add(
        [
            (object)[
                'image'=> '/img/cutter.png',
                'header'=> 'Металлообработка под
заказ в Днепре',
                'description'=> '<p>Повышенная скорость операции.</p>
<p>Работа с любыми сплавами и металлами.</p>
<p>Предельная чистота и правильная геометрия кромок.</p>
<p>Вероятность температурной деформации деталей полностью исключается, даже если рез ведется человеком без практического опыта в данной сфере.</p>
<p>Выполнение фигурной раскройки образцов.</p>'
            ],
            (object)[
                'image' => '/img/mask.png',
                'header' => 'Металлообработка под заказ',
                'description' => '<p>
Современные способы обработки металла открывают для дизайна среды невиданные доселе возможности. Так на место традиционных ковки и литья приходит плазменная резка, позволяющая получать самые разнообразные формы и узоры. Данному методу обработки металла по силам сложнейшая геометрия изделий.
</p>'
            ],
                (object)[
                    'image' => '/img/xz.png',
                    'header' => 'Гибка листового
металла ',
                    'description' => '<p>Повышенная скорость операции.</p>
            <p>Сталь конструкционная, сталь нержавеющая, оцинкованный лист, алюминий и его сплавы.</p>
            <p>Предельная чистота и правильная геометрия кромок.</p>
            <p>Гибка металлического листа позволяет выполнять изделия и детали различной степени сложности и конфигурации, а также нестандартные конструкции.</p>'
                ]
        ]);
        return $items[0];
    }


}

?>
