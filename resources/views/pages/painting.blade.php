@extends('layouts.default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components.order-card',['data'=>$order_item])

    <section id="methods" class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Способы покраски металлоконструкций:
                    </h1>
                </div>
            </div>
            <div class="row flex-wrap">
                <div class="col-lg-4 col-md-6 method-card my-2">
                    <div class="row ">
                        <div class="col-4">
                            <h1>1</h1>
                        </div>
                        <div class="col-8 d-flex flex-column">
                            <h3 class="text-uppercase my-3">окраска кистью</h3>
                            <p>Целесообразно при покраске мелких металлических изделий (например, металлические решётки)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 method-card my-2">
                    <div class="row ">
                        <div class="col-4">
                            <h1>2</h1>
                        </div>
                        <div class="col-8 d-flex flex-column">
                            <h3 class="text-uppercase my-3">окраска кистью</h3>
                            <p>Целесообразно при покраске мелких металлических изделий (например, металлические решётки)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 method-card my-2">
                    <div class="row ">
                        <div class="col-4">
                            <h1>3</h1>
                        </div>
                        <div class="col-8 d-flex flex-column">
                            <h3 class="text-uppercase my-3">окраска кистью</h3>
                            <p>Целесообразно при покраске мелких металлических изделий (например, металлические решётки)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 method-card my-2">
                    <div class="row ">
                        <div class="col-4">
                            <h1>4</h1>
                        </div>
                        <div class="col-8 d-flex flex-column">
                            <h3 class="text-uppercase my-3">окраска кистью</h3>
                            <p>Целесообразно при покраске мелких металлических изделий (например, металлические решётки)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 method-card my-2">
                    <div class="row ">
                        <div class="col-4">
                            <h1>5</h1>
                        </div>
                        <div class="col-8 d-flex flex-column">
                            <h3 class="text-uppercase my-3">окраска кистью</h3>
                            <p>Целесообразно при покраске мелких металлических изделий (например, металлические решётки)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 method-card my-2">
                    <div class="row ">
                        <div class="col-4">
                            <h1>6</h1>
                        </div>
                        <div class="col-8 d-flex flex-column">
                            <h3 class="text-uppercase my-3">окраска кистью</h3>
                            <p>Целесообразно при покраске мелких металлических изделий (например, металлические решётки)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="prepare" class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Подготовка и покраска изделий
                    </h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 d-flex flex-column">
                    <div class="fancy-card d-flex my-2 w-100">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">1</span>
                            </div>
                            <div class="text text-small d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Подготовка поверхности металлоконструкций перед нанесением краски ( грунтовка )</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2 w-100">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">2</span>
                            </div>
                            <div class="text text-small d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Выбор краски и способа её нанесения</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2 w-100">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">3</span>
                            </div>
                            <div class="text text-small d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Грунтовка металлоконструкций</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2 w-100">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">4</span>
                            </div>
                            <div class="text text-small d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Покраска металла</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <div>
                        <img src="{{asset('/img/spary.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.call-me')


@endsection
