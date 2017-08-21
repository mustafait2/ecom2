@extends('layout.main')


@section('title', 'Products')
@section('content')

    <div class="row">
        @forelse($products as $product)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="{{url('images',$product->image)}}"/>
                    </a>
                </div>
                <a href="shirt.html">
                    <h3>
                        {{$product->name}}
                    </h3>
                </a>
                <h5>
                    IQD{{$product->price}}
                </h5>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
@empty
        <h2>there is no products </h2>

            @endforelse
    </div>


    @endsection

