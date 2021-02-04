<section id="little-gallery" class="my-md-5 my-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-header text-center">Услуги цеха металлообработки</h1>
            </div>
        </div>
        <div class="row d-flex flex-wrap">
            @foreach($images[0] as $item)
            <div class="col-lg-4 col-md-6 p-3">
                <div class="little-gallery-card ">
                    <div class="little-gallery-card-img">
                        <img src="{{$item->image}}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="little-gallery-card-description text-center">
                        <span class="px-3">{{$item->title}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
