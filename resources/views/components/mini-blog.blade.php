<section id="mini-blog">
    <div class="container">
        @foreach($records as $record)
        <div class="row data-row align-items-center my-2">
            <div class="col-lg-8 my-2 order-1">
                <div class="data-card d-flex flex-column px-3">
                    <h2>{{$record->header}}</h2>
                    {{htmlspecialchars_decode($record->text)}}
                </div>
            </div>
            <div class="col-lg-4 my-2 img-col">
                <div class="brackets p-3">
                    <img src="/img/wire.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
