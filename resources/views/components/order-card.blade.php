
<section id="plasm-info" class="my-md-4 my-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex flex-column align-items-center">
                <div class="data-card d-flex flex-column">
                    <h2>{{$data->header}}</h2>
                    {!!$data->description!!}
                </div>
                <a href="#" class="dark-btn my-md-4 my-1">Заказать</a>
            </div>
            <div class="col-lg-6 order-lg-last order-first">
                <div class="brackets m-3">
                    <img src="{{$data->image}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
