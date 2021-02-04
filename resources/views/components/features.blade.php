<section id="features" class="my-lg-5 my-1 py-lg-4 py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-header text-center">
                    Преимущества работы с нами
                </h1>
            </div>
        </div>
        <div class="row flex-wrap my-lg-5 my-2">
            @foreach (\App\StaticPageData::GetFeaturesList() as $feature)
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img src="{{$feature->icon}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>{{$feature->title}}</h4>
                            <p>
                                {!! $feature->text !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
