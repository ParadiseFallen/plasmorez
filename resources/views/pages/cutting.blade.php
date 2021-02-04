@extends('layouts/default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        {{-- <iframe class="ratio ratio-16x9" src="https://www.youtube-nocookie.com/embed/JCnpxtKkVjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> --}}
    </section>

    @include('components/order-card',['data'=>\App\StaticPageData::GetOrderItems()[4]])



    {{--    Add blog here ! --}}
    {{--    @include('components/mini-blog',['records' => []])--}}


    @include('components/call-me')


@endsection
