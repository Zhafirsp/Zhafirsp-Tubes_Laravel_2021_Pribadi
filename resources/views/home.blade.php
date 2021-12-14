@extends('layouts.main')


<div class="text-center text-white" style="background-image: url('/img/brand.jpg'); width:100%; height:100%; margin-top:-50px;">
  <main class="px-3 pt-5 mt-5">
    <h1 class="display-1" style="margin-top: 200px">San Project</h1>
    <p class="fs-3" id="search">Best movie is inside here</p>
  </main>
</div>

@section('container')

<section id="Search" class="search">
    <div class="container"  data-aos="fade-up">
          <div class="row mt-3 justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center">Search Movie</h1>
                   <div class="input-group mb-3">
                        <input type="text" id="search-input" class="form-control" placeholder="Search.." name="search">
                        <button id="search-button" class="btn btn-dark btn-outline-primary text-white" style="margin-left: 10px;" type="button">Search</button>
                    </div>
                  </div>
                </div>
          </div>
          <hr>
          <div class="row" id="movie-list">

          </div>
    </section>


{{-- <div class="row jcc no-gutters pb-5" data-aos="fade-up" style="margin-top: 100px;">
  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-16.jpg 800w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/wooden-bowl/">Wooden Bowl</a>
    </h4>
    <span style="margin-left: 125px;">$</span>350</span>
  </div>

  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-11-620x620.jpg 620w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/porcelain-jar/">Porcelain Jar</a>
    </h4>
    <span style="margin-left: 125px;">$</span>260</span>
  </div>

  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-10-620x620.jpg 620w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/pastel-vase/">Pastel Vase</a>
    </h4>
    <span style="margin-left: 125px;">$</span>250</span>
  </div>

  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-9-620x620.jpg 620w"> 
    <h4 style="margin-left: 100px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/milk-jug/">Milk Jug</a>
    </h4>
    <span style="margin-left: 125px;">$</span>170</span>
  </div>
</div>

<div class="row jcc no-gutters pb-5" data-aos="fade-up">
  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-3-620x620.jpg 620w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/dessert-plate/">Dessert Plate</a>
    </h4>
    <span style="margin-left: 125px;">$</span>331</span>
  </div>

  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-8-620x620.jpg 620w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/cutting-board/">Cutting Board</a>
    </h4>
    <span style="margin-left: 125px;">$</span>270</span>
  </div>

  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-6-620x620.jpg 620w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/club-table/">Club Table</a>
    </h4>
    <span style="margin-left: 125px;">$</span>331</span>
  </div>

  <div class="product col-6 col-sm-3">
    <img width="300" height="300" srcset="https://tonda.qodeinteractive.com/elementor/wp-content/uploads/2018/03/product-5-620x620.jpg 620w"> 
    <h4 style="margin-left: 75px;">
      <a itemprop="url" href="https://tonda.qodeinteractive.com/elementor/product/ceramic-plate/">Ceramic Plate</a>
    </h4>
    <span style="margin-left: 125px;">$</span>170</span>
  </div>
</div> --}}



<div class="display-1 text-center text-black"> Outstanding Movies</div>

<div class="row jcc no-gutters pb-5" data-aos="fade-up">
  <div class="col-sm-6 col-md-4 pt-5 mt-5">
    <div class="card mb-3" data-aos="fade-up">
        <img src="{{ ('/img/IronMan.jpg') }}" class="card-img-top" style="height:500px; width:350px">
        <div class="card-body">
        <h5 class="card-title">Iron Man</h5>
        <h6 class="card-subtitle mb-2 text-muted">2008</h6>
        <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
        </div>
      </div>
    </div>
  
  <div class="col-sm-6 col-md-4 pt-5 mt-5">
    <div class="card mb-3" data-aos="fade-up">
      <img src="{{ ('/img/007.jpg') }}" class="card-img-top" style="height:500px; width:350px">
      <div class="card-body">
      <h5 class="card-title">No Time To Die</h5>
      <h6 class="card-subtitle mb-2 text-muted">2021</h6>
      <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 pt-5 mt-5">
    <div class="card mb-3" data-aos="fade-up">
      <br>
      <img src="{{ ('/img/avenger.jpg') }}" class="card-img-top"  style="height:500px; width:350px; margin-top: -25px">
      <div class="card-body">
      <h5 class="card-title">Avenger: Infinity War</h5>
      <h6 class="card-subtitle mb-2 text-muted">2018</h6>
      <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
      </div>
    </div>
  </div>
</div>

@endsection

