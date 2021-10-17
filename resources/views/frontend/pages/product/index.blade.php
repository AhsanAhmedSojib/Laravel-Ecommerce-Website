@extends('frontend.layouts.master')
@section('title')
 Products    
@endsection
@section('content')

{{-- Start Sidebar Part + content--}}

<div class="container margin-top-20" >
    <div class="row">
      <div class="col-md-4">

            @include('frontend.partials.product-sidebar')

      </div>

      <div class="col-md-8">
          <div class="widget">
              <h3>Products</h3>
              @if($products->count() > 0)
                <div class="row">
                  @foreach ($products as $product)
                    <div class="col-md-4">
                            <div class="card feature-img" style="width: 10rem;">
                                {{--<img src="{{asset('images/products/'.)}}" class="card-img-top" alt="...">--}}
                                <img src="{{asset('images/products/'.$product->images[0]->image)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{$product->price}}</p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
              @else 
                <div class="row">
                  <h2>No Products Found</h2>
                </div>
              @endif
          </div>
      </div>
    </div>
  </div>
  
  
  
  
{{-- End Sidebar Part + Content--}}

    
@endsection