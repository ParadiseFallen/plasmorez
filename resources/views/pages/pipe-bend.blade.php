@extends('layouts/default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components/order-card',['data'=>\App\StaticPageData::GetOrderItems()[3]])

    <section id="video">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brackets p-5">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube-nocookie.com/embed/iovtBwVHWKg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                        set there fucking iframe for fucking video--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fancy-info" class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
Наш цех металлообработки окажет услуги по
гибке металлопроката по радиусу
                    </h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 d-flex flex-column">
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">1</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Гибка профильных труб</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">2</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Гибка труб</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">3</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Гибка трубы из нержавеющей стали </span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2 w-100">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">4</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex w-100">Гибка полосы</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 d-lg-flex d-none">
                    <div>
                        <img src="/img/big-pipe.png" alt="" class="img-fluid mx-auto">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div
                                class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">5</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4 d-flex">Гибка швеллера</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div
                                class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">6</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4 d-flex">Гибка уголка </span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div
                                class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">7</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4  d-flex">Гибка квадрата</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2 me-md-auto w-100">
                        <div class="row w-100">
                            <div
                                class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">8</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4  d-flex">Гибка круга</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center d-flex justify-content-center">
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">9</span>
                            </div>
                            <div
                                class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Сферы применения гнутых труб</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pipe-tables" class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Гибка труб, уголка, швеллера
                    </h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2>Лучшее качество гибки.</h2>
                    <p>
Осуществляем гибку труб по требуемым радиусам в кратчайшие сроки. Большой опыт работы и качественное оборудование.
                    </p>
                    <p>
Трехвалковый турецкий трубогиб. Один из первых трубогибов с ЧПУ, который позволяют изготавливать детали с переменными радиусами и изготавливать большие партии повторяющихся деталей в сжатые сроки.
                    </p>
                   <div class="row">
                       <div class="col-md-6 d-flex flex-column">
                            <h3>Мы осуществляем:</h3>
                           <ul>
                               <li>гибку стальных труб, уголка;</li>
                               <li>гибку швеллера;</li>
                               <li>гибку профильных труб;</li>
                               <li>гибку труб с дорном.</li>
                           </ul>
                       </div>
                       <div class="col-md-6">
                            <div>
                                <img src="{{asset('/img/log-pipes.jpg')}}" alt="" class="img-fluid">
                            </div>
                       </div>
                   </div>

                    <p>
При производстве всегда возникает много нюансов. Трубы могут гофрить, радиусы получаемого изделия могут плавать. Для каждой формы трубы, для каждой толщины стенки, для каждого размера существуют свои нюансы. За сколько проходов можно погнуть, требуется набивка или нет. Лучше доверить данную работу профессионалам, мы выполним ее качественно и в срок. Мы гарантируем качество получаемых изделий, высокую повторяемость при больших заказах.

                    </p>
                    <p>
В некоторых случаях гибка может быть хорошей альтернативой сварке. Процесс гибки трубы может исключить ряд таких процессов, как резка, обработка, сварка, шлифовка сварочных швов. Таким образом, радиусная гибка труб может быть на порядок экономней. Кроме того, загнутая труба будет смотреться более эстетичней, не имея сварочных швов.

                    </p>
                </div>
                <div class="col-lg-4 offset-lg-1 d-flex justify-content-end">
                    <div><img src="{{asset('/img/pipes-table.jpg')}}" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-me')

@endsection
