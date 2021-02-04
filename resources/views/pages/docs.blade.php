@extends('layouts.default-layout')
@section('body')
    <section id="first-screen">
        <iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/JCnpxtKkVjQ?controls=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    @include('components.order-card',['data'=>$order_items[0]])

    @include('components.order-card',['data'=>$order_items[1],'reverse'=>''])

    @include('components.call-me')

@endsection
