@extends('frontend.layouts.master')
@section('title')
 Home    
@endsection
@section('content')

{{-- Start Sidebar Part + content--}}

<div class="container margin-top-20" >
    <div class="row">
      <div class="col-md-4">
          <div class="list-group">
              <a href="#" class="list-group-item disabled">First item</a>
              <a href="#" class="list-group-item">Second item</a>
              <a href="#" class="list-group-item">Third item</a>
          </div>
      </div>

      <div class="col-md-8">
          <div class="widget">
              <h3>Featured products</h3>
              <div class="row">

                  <div class="col-md-3">
                          <div class="card feature-img" style="width: 10rem;">
                              <img src="{{asset('images/products/htc.png')}}" class="card-img-top" alt="...">
                              <div class="card-body">
                              <h5 class="card-title">HTC</h5>
                              <p class="card-text">TK - 5000</p>
                              <a href="#" class="btn btn-primary">Add to cart</a>
                          </div>
                        </div>
                  </div>

                  <div class="col-md-3">
                      <div class="card feature-img" style="width: 10rem;">
                          <img src="{{asset('images/products/htc.png')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                          <h5 class="card-title">HTC</h5>
                          <p class="card-text">TK - 5000</p>
                          <a href="#" class="btn btn-primary">Add to cart</a>
                      </div>
                    </div>
              </div>

                <div class="col-md-3">
                    <div class="card feature-img" style="width: 10rem;">
                        <img src="{{asset('images/products/htc.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">HTC</h5>
                        <p class="card-text">TK - 5000</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card feature-img" style="width: 10rem;">
                        <img src="{{asset('images/products/htc.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">HTC</h5>
                        <p class="card-text">TK - 5000</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card feature-img" style="width: 10rem;">
                        <img src="{{asset('images/products/htc.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">HTC</h5>
                        <p class="card-text">TK - 5000</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                    </div>
                </div>
 

              </div>
          </div>
      </div>
    </div>
  </div>
  
  
  
  
{{-- End Sidebar Part + Content--}}

    
@endsection