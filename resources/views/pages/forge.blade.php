@extends('layouts.default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components.order-card',['data'=>\App\StaticPageData::GetOrderItems()[5]])


    {{--    Add blog here ! --}}
    {{--    @include('components/mini-blog',['records' => []])--}}

    <section id="call-2" class="my-4 py-4">
        <div class="container">
            <div class="col-md-6 d-flex flex-column">
                <h1 class="my-3">С чем сочетается художественная ковка</h1>
                <p>
                    Для того, чтобы помещение было уютным, а само кованое изделие не выглядело чуждым по отношению к остальным деталям интерьера, стоит учитывать сочетаемость материалов.
                </p>
                <p>
                    Изделия из ковки отлично выглядит в сочетании стеклом, натуральным или искусственным камнем, деревом всевозможных пород и тканями.
Перечисленные выше материалы сочетаются с металлом как внутри помещений, так и на открытом воздухе.
                </p>
                <p>
Естественно, что ткани лучше использовать в помещениях, но та же открытая летняя беседка с занавесками только выиграет от появления в ней кованых элементов. Достаточно оригинальным способом совмещения металла и ткани также являются кованые абажуры.
                </p>
                <p>
Если с камнем и деревом все более-менее понятно, то в случае со стеклом возможны варианты сочетания при оформлении фонарей и светильников. Также стеклянные вставки вполне уместны в перилах или художественной кованой вязи, облегчая их визуальное восприятие.
                </p>
            </div>
        </div>
    </section>

    @include('components.call-me')


@endsection
