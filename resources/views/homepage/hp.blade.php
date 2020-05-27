@extends('layouts.base')

@section('content')
  {{-- Jumbotron --}}
  <div class="jumbotron jumbotron-fluid">
    <div class="container d-flex flex-column justify-content-center align-content-center text-white">
      <div class="col-sm-6 offset-sm-3 d-flex flex-column justify-content-center text-center">
        <p class="text-uppercase font-weight-bold season">london collection season</p>
        <h1 class="text-capitalize">new selection of henry london</h1>
        <p>An estimable experience in the modern collection house</p>
        <div class="">
          <a class="btn my-btn" href="#">Discover</a>
        </div>
      </div>
    </div>
  </div>
  {{-- end jumbotron --}}
  <div class="container-fluid container-under">
    <div class="row">
      <div class="col-md-6">
        <h1>History and Patriarcal seasons</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-6">
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  {{-- Chess board --}}
  <div class="container-fluid container-under">
    <div class="row mh-800">
      <div class="col-md-6 d-flex">
        <div class="col-md-10 offset-md-1 d-flex  flex-column justify-content-center text-center">
          <h4 class="text-uppercase">london collection season</h4>
          <h2 class="text-capitalize">temporary store</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <div class="">
            <a class="btn my-btn" href="#">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-no">
        <img class="my-img mh-800" src="/img/londonwatch.jpeg" alt="store">
      </div>
    </div>
    <div class="row mh-800">
      <div class="col-md-6 p-no">
        <img class="my-img mh-800" src="/img/londonwatch.jpeg" alt="london_watch">
      </div>
      <div class="col-md-6 d-flex">
        <div class="col-md-10 offset-md-1 d-flex flex-column justify-content-center text-center">
          <h4 class="text-uppercase">london collection season</h4>
          <h2 class="text-capitalize">new collection henry london</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="">
            <a class="btn my-btn" href="#">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Chess --}}
  {{-- Carousel --}}
  <div class="container-fluid container-under">
    <div class="row mh-800">
      <div class="col-md-6">
        <h1>Press from Watch Lab Studio</h1>
        <div class="col-sm-8 p-no">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="col-md-6 p-no background-gray mh-800 position-relative">
        <img src="/img/gray.png" class="d-block w-100" alt="gray">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="col-sm-8 float-left">
                <img src="/img/car1.jpeg" class="d-block w-100" alt="car2">
              </div>
              <div class="col-sm-4 float-left">
                <h5 class="text-uppercase">press</h5>
                <p class="text-uppercase gold">15 settembre 2015</p>
                <h2 class="text-black">Most Important Days on Watchlab</h2>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-sm-8 float-left">
                <img src="/img/car2.jpeg" class="d-block w-100" alt="car2">
              </div>
              <div class="col-sm-4 float-left">
                <h5 class="text-uppercase">news</h5>
                <p class="text-uppercase gold">11 settembre 2015</p>
                <h2 class="text-black">Lorem Ipsum</h2>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-sm-8 float-left">
                <img src="/img/car3.jpeg" class="d-block w-100" alt="car3">
              </div>
              <div class="col-sm-4 float-left">
                <h5 class="text-uppercase">news</h5>
                <p class="text-uppercase gold">8 settembre 2015</p>
                <h2 class="text-black">Duis aute</h2>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  {{-- End Carousel --}}
  {{-- Instagram --}}
  <div class="container-fluid container-under">
  	<div class="row">
  		<div class="col-12 col-md-6 d-flex p-no insta1">
        <div class="col-sm-8 offset-sm-2 d-flex flex-column justify-content-center text-center">
          <h4 class="text-white text-uppercase position-relative">instagram</h4>
          <h1 class="text-white text-capitalize">discover <br> watch lab</h1>
        </div>
  		</div>
  		<div class="col-12 col-md-6 p-no">
  			<div class="row m-0">
  				<div class="col-md-6 p-no insta2">
  				</div>
  				<div class="col-md-6 p-no insta3">
  				</div>
  			</div>
  			<div class="row m-0">
  				<div class="col-md-6 p-no insta4">
  				</div>
  				<div class="col-md-6 p-no insta5">
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  {{-- En instagram --}}
  {{-- Newsletter --}}
  <div class="container-fluid container-under newsletter text-center p-0">
    <div class="row newsletter d-flex">
      <div class="col-md-6 offset-md-3 text-white d-flex flex-column justify-content-center">
        <h1 class="">Get in Touch</h1>
        <h4 class="text-uppercase">discover more about news, <br> exclusive events and discount</h4>
        <form class="form-group" method="post">
          <input class="email" type="email" name="email" placeholder="enter your email" value="">
          <button class="ok" type="#" class="btn">Ok</button>
        </form>
      </div>
    </div>
  </div>
  {{-- End Newsletter --}}
  {{-- Upload img fixed element --}}
  <div id="upload" class="position-fixed">
    <a href="{{ url('/upload')}}">Upload an image?</a>
  </div>
  {{-- end Upload img fixed element --}}
@endsection
