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
            @for ($i = 0; $i < 6; $i++)
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img src="/img/support.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>Универсальность</h4>
                            <p>
                                Возможность одинаково хорошо обрабатывать все виды металлов.
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
