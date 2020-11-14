@extends('layout.front-end')

@section('title')
    Home
@endsection

@section('content')

@include('front.slider.slider')

<section class="py-5">
    <div class="container">
        <div class="row">
        <!--Grid column-->
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-6 col-md-3 mt-3">
            <!--Card-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <a href="">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg" class="card-img-top" alt="">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->
              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>Sport wear</h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Sweatshirt</a>
                  </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                  <strong>139$</strong>
                </h4>
              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
        @endfor
          <!--Grid column-->
        </div>
    </div>
</section>

@endsection