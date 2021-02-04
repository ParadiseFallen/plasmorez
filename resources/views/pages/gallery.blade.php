@extends('layouts.default-layout')
@section('body')

    <section id="gallery" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-header text-center">
                        Наша продукция
                    </h1>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-2 d-md-flex d-none">
                    <div>
                        <img src="{{asset('/img/lamp.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 d-flex flex-column">
                    <div class="brackets p-5">
                        <h3>sss</h3>
                        <p>sss</p>
                    </div>
                </div>
                <div class="col-2 d-md-flex d-none">
                    <div>
                        <img src="{{asset('/img/lamp.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                @for($i =0; $i < 50; $i++)
                    <div class="col-lg-3 col-md-6 ">
                        <div class="little-gallery-card my-3">
                            <div class="little-gallery-card-img">
                                <img src="/img/mock-1.jpg" alt="" class="img-fluid w-100">
                            </div>
                            <div class="little-gallery-card-description text-center">
                                <span class="px-3">Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection
