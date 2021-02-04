@extends('layouts/default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components/order-card',['data'=>\App\StaticPageData::GetOrderItems()[0]])

    @include('components/little-gallery',['images'=> \App\StaticPageData::GetIndexGallery()])


    <section id="fancy-info" class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Плазменная резка металла - преимущества
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
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Лучшее качество резки</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">2</span>
                            </div>
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Больше деталей за единицу времени</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">3</span>
                            </div>
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Снижение затрат на производство</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 d-lg-flex d-none">
                    <div>
                        <img src="/img/cutting.png" alt="" class="img-fluid mx-auto">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">4</span>
                            </div>
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4 d-flex">Лучшее качество резки</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">5</span>
                            </div>
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4 d-flex">Больше деталей за единицу времени</span>
                            </div>
                        </div>
                    </div>
                    <div class="fancy-card d-flex my-2">
                        <div class="row w-100">
                            <div class="order-last number col-lg-2 col-4 d-flex justify-content-center align-items-center">
                                <span class="px-2 d-block">6</span>
                            </div>
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 px-4  d-flex">Снижение затрат на производство</span>
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
                                <span class="px-2 d-block">7</span>
                            </div>
                            <div class="text d-flex flex-column col-lg-10 col-8 justify-content-center align-content-center">
                                <span class="my-4 d-flex">Улучшенная безопасность</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-me')


    @include('components/features')

@endsection
