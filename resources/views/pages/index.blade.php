@extends('layouts/default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components/order-card',['data'=>\App\StaticPageData::GetOrderItems()[0]])

    @include('components/call-me')

    @include('components/little-gallery',['images'=> \App\StaticPageData::GetIndexGallery()])

    @include('components/mini-blog',['records' => []])

    <section id="works" class="my-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Фото нашего оборудования <br> и выполненных работ.
                    </h1>
                </div>
            </div>
            <div class="row">
                @for($i = 0; $i<3; $i++)
                    <div class="col-md-4 justify-content-center align-items-center d-flex my-2">
                        <a href="" class="project-card-wrap">
                            <div class="project-card">
                                <div class="project-card-inner d-flex flex-column">
                                    <div class="project-card-inner-img">
                                        <div>
                                            <img src="/img/work-1.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="project-card-inner-text text-center p-2 d-flex justify-content-center align-items-center">
                                        <p>Оборудование</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    @include('components/features')

    @include('components/order-card',['data'=>\App\StaticPageData::GetOrderItems()[1]])


@endsection
