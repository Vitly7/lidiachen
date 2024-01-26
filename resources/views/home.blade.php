@extends('main')
@section('container')
<section class="">
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h4>Best Offer</h4>
          <h2>New Arrivals On Sale</h2>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h4>Flash Deals</h4>
          <h2>Get your best products</h2>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h4>Last Minute</h4>
          <h2>Grab last minute deals</h2>
        </div>
      </div>
    </div>
  </div>
    
</section>
  
  
  
  <div class="container">
  @include('collection')

    <section class="mt-5 pt-5">
      <h3 class="pb-3" style="text-align:center; color: white;">Kolaborasi</h3>
      <div class="image-container">
        <div class="scrollable" data-scroll-amount="1165">
          <div class="col-md-12 me-5" style="position: relative; display: flex; flex-wrap: wrap;">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="team_colab.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8" style="position: relative;">
                  <div class="card-body" >
                    <h5 class="card-title">Pembahasan Ide dengan Inspirasi Baru pada Dunia Fashion</h5>
                    <p class="card-text">Website ini mengandung berita apapun dan dimanapun</p>
                    <a href="/about" type="button" class="btn btn-primary">Next</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-md-12 me-5" style="position: relative;">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="team_colab.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8" style="position: relative; display: flex; flex-wrap: wrap;">
                  <div class="card-body">
                    <h5 class="card-title">Pembahasan Ide dengan Inspirasi Baru pada Dunia Fashion</h5>
                    <p class="card-text">Website ini mengandung berita apapun dan dimanapun</p>
                    <a href="/about" type="button" class="btn btn-primary">Next</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-md-12 me-5" style="position: relative; display: flex; flex-wrap: wrap;">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="team_colab.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Pembahasan Ide dengan Inspirasi Baru pada Dunia Fashion</h5>
                    <p class="card-text">Website ini mengandung berita apapun dan dimanapun</p>
                    <a href="/about" type="button" class="btn btn-primary">Next</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-md-12" style="position: relative; display: flex; flex-wrap: wrap;">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="team_colab.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Pembahasan Ide dengan Inspirasi Baru pada Dunia Fashion</h5>
                    <p class="card-text">Website ini mengandung berita apapun dan dimanapun</p>
                    <a href="/about" type="button" class="btn btn-primary">Next</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="scroll-left"><i class="bi bi-caret-left-fill"></i></i></button>
        <button class="scroll-right"><i class="bi bi-caret-right-fill"></i></button>    
      </div>
    </section>

  </div>
  

  
  

@endsection