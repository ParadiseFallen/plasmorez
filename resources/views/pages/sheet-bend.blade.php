@extends('layouts/default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components/order-card',['data'=>\App\StaticPageData::GetOrderItems()[2]])

    @include('components/call-me')

    <section id="info-with-card" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
                    <div class="info-card p-4 m-4">
                        <h2>Технические характеристики:</h2>
                        <p>Усилие — 630 КН</p>
                        <p>Длина рабочего стола — 2500мм</p>
                        <p>Расстояние между колоннами — 2000 мм</p>
                        <p>Максимальная высота открытия — 340 мм</p>
                        <p>Глубина зева – 250 мм </p>
                        <p>Ход пуансона — 100 мм</p>
                    </div>
                </div>
                <div class="col-md-4 order-md-last order-first">
                    <div>
                        <img src="/img/2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="possible" class="gray-bg py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Возможности производства. <br>
                        Гибка листового металла.
                    </h1>
                </div>
            </div>
            <div class="brackets d-flex flex-column py-4 my-3">
                <div class="row justify-content-center ">
                    <div class="col-md-8 col-11 text-center py-4">
                        <h3>Станок, который применяется на
 нашем предприятии, позволяет производить
 гибочные работы разного уровня сложности, под любым углом.
</h3>
                    </div>
                </div>
                <div class="row justify-content-center py-4">
                    <div class="col-md-8 col-11 text-center">


Наши специалисты тщательно проверят предоставленные чертежи и оптимально составят план работ, в процессе работы возможны внесения и технологические изменения в эскизы и т. п. Главное, что Вы получите качественную услугу - готовое изделие, максимально точно соответствующее Вашим требованиям. А мы - еще одного довольного заказчика.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="yangli" class="my-3 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Yangli серии WC67K 63/2500
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex flex-column">
                    <div class="yangli-card d-flex align-items-end my-2">
                        <div class="yangli-card-number p-2 text-center">
                            1
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center">
                            Долгосрочность
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2">
                        <div class="yangli-card-number p-2 text-center">
                            2
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center">
                            Высокое качество
гиба
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2">
                        <div class="yangli-card-number p-2 text-center">
                            3
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center">
                            Производительность
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-lg-flex">
                    <div>
                        <img src="/img/yangli.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex flex-column">
                    <div class="yangli-card d-flex align-items-end my-2 right-side">
                        <div class="yangli-card-number p-2 text-center order-last">
                            4
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center">
                            Долгосрочность
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2 right-side">
                        <div class="yangli-card-number p-2 text-center order-last">
                            5
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center">
                            Высокое качество
гиба
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2 right-side">
                        <div class="yangli-card-number p-2 text-center order-last">
                            6
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center">
                            Производительность
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
