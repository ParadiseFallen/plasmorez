@extends('layouts/default-layout')
@section('body')

    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
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
                        <div class="yangli-card-number p-2 text-center h-lg-auto h-100">
                            1
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center h-lg-auto h-100">
                            Долгосрочность
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2">
                        <div class="yangli-card-number p-2 text-center h-lg-auto h-100">
                            2
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center h-lg-auto h-100">
                            Высокое качество
гиба
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2">
                        <div class="yangli-card-number p-2 text-center h-lg-auto h-100">
                            3
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center h-lg-auto h-100">
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
                        <div class="yangli-card-number p-2 text-center order-md-last order-first h-lg-auto h-100">
                            4
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center  h-lg-auto h-100">
                            Долгосрочность
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2 right-side ">
                        <div class="yangli-card-number p-2 text-center order-md-last order-first h-lg-auto h-100">
                            5
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center  h-lg-auto h-100">
                            Высокое качество гиба
                        </div>
                    </div>
                    <div class="yangli-card d-flex align-items-end my-2 right-side">
                        <div class="yangli-card-number p-2 text-center order-md-last order-first h-lg-auto h-100">
                                6
                        </div>
                        <div class="yangli-card-text px-2 py-4 w-100 text-center h-lg-auto h-100">
                            Широкий диапазон
 получаемых изделий
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="calculation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Формула расчета усилия:
                    </h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 d-flex jus">
                    <div>
                        <img src="{{asset('/img/calculation.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="brackets d-flex flex-column align-items-start p-4">
                        <p><img src="{{asset('/img/calc.jpg')}}" alt="" class="img-fluid"> P - усилие на пуансоне (кН/м)</p>
                        <p class="d-flex flex-column">
                            <span>S - толщина материала (мм)</span>
                            <span>B - минимальная кромка (мм)</span>
                            <span>V - раскрытие матрицы (мм)</span>
                            <span>R - внутренний радиус (мм)</span>
                        </p>
                        <p>
                            Рекомендуемое значение раскрытия матрицы
(V)=8-10 значений толщины материала (S).
                        </p>
                        <p>
Расчет приводится для стали с прочностью 450 Н/мм2;
для других материалов вводятся коэффициенты:
мягкая медь — 0,5;
мягкий алюминий — 0,5;
нержавеющая сталь — 1,5;
твердый алюминий — 2,0.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="table-data" class="gray-bg my-3 py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="brackets p-4 d-flex flex-column">
                        <h2 class="my-2"><b>В таблице указываются удельное
усилие </b></h2>
                        <p>(P, kH/m), которое необходимо приложить к листовому материалу определенной толщины (S, mm), чтобы получить изгиб необходимого радиуса (R, mm).
Данные приводятся для материала длиной 1 м. Таблица расчитана для листового материала с прочностью О = 450 Н/mm2 (углеродистая конструкционная сталь).
Результат расчета усилий необходимо пропорционально изменить в случае, когда показатели прочности имеют другие значения.
</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-last order-first my-2">
                    <div>
                        <img src="{{asset('/img/table.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bend-blog" class="my-4 py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bend-blog-card p-4 data-card">
                        <h1>Гибка металла</h1>
 <p>нужна для того, что бы придать всей заготовке, или какой-то ее части, изогнутую форму. Осуществляется данная операция с помощью гибочных машин. </p>
<p>Наше оборудование оснащено контролем и быстросъемным инструментом, что позволяет ускорять технологичность гибки деталей, уменьшить себестоимость производства, а также, выполнять несколько разных сгибов последовательно.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img src="{{asset('/img/sheet.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img src="{{asset('/img/sheet2.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bend-blog-card p-4">
                       <div class="bend-blog-card p-4 data-card">
                            <p>Благодаря листогибу делается сложная пространственная гибка листового металла. Очень важна точность гибки, особенно при дальнейших операциях с деталями (сборка, сварка, покраска).</p>
                            <p>Для того чтобы получить деталь, наиболее точную, мы совместно с заказчиком прорабатываем конструкторскую документацию, оптимизируем и контролируем технологический процесс производства на всех этапах, чтобы максимально уменьшить сроки подготовки оборудования к запуску изготовления нового изделия из листового металла. При этом сокращаются расходы, а значит и для заказчика цены на данную услугу будут ниже.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="call" class="my-4 py-4">
        <div class="container">
            <div class="col-6 d-flex flex-column">
                <h1 class="my-3">Нужны услуги по гибке листового металла</h1>
                <h1 class="my-3">Получите бесплатную консультацию </h1>
                <button type="submit" class="white-btn m-3">Мы перезвоним</button>
            </div>
        </div>
    </section>

@endsection
