@extends('site.app')
@section('title', 'Главная')

@section('content')

    <section id="products"  class="flex flex-column items-center pt2 ph2 ph0-l">
        <div class="w-100 mw7 ">
            @include('site.partials.sortForm')
            <div class="flex flex-wrap">
                @forelse($products as $product)
                    @include('site.product.thumb')
                @empty
                    <div class="ph2 ph3-l f3 mv3">
                    @isset($_GET['word'])
                        <p>По запросу "{{ $_GET['word'] }}" ничего не найдено</p><br>
                    @else
                            Товары не найдены
                    @endisset
                    </div>
                @endforelse
            </div>





        </div>
    </section>


@stop
