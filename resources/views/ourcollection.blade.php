@extends('main')
@section('container')

<section class="pt-5">
  <div class="page-heading products-heading header-text" style="padding:100px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="text-content">
                      <h4>new arrivals</h4>
                      <h2>sixteen products</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div id="collection"></div>
  <div class="products" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <p class="fs-3">All Products for {{ auth()->user()->name }}</p>
          </div>
          <div class="d-flex justify-content-end" style="margin-bottom: 10px; margin-top:-40px;">
            <form action="{{ url('search') }}" method="get" class="d-flex"  style="width: 400px;">
              @csrf
              <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
              <input type="submit" value="Search" class="btn btn-success">
            </form>
          </div>
        </div>
        <div class="col-md-12">
          <div class="filters-content">
            <div class="row grid">
              @foreach($data as $collection)
              <div class="col-lg-4 col-md-4 all des">
                <div class="product-item open-overlay" id="customOverlay" data-bs-target="#customOverlay{{ $collection->id }}">
                  <a ><img src="/imagecollection/{{ $collection->image }}" alt=""></a>
                  <div class="down-content">
                    <h4>{{ $collection->title }}</h4>
                    <h6>Rp {{ $collection->price }}</h6>
                    <p class="description" style="white-space: pre-line;">{{ $collection->description }}</p>
                    <p class="fw-4">Discount: {{ $collection->discount }}%</p>
                    <span>Reviews (12)</span>
                  </div>
                </div>
              </div>
              {{-- Overlay  --}}
              <section class="overlaycl" id="customOverlay{{ $collection->id }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="card mb-3" >
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="/imagecollection/{{ $collection->image }}" id="overlayimage" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 px-4 py-2" >
                                        <div class="card-body">
                                            <div class="section-heading" style="margin-bottom: 10px;">
                                              <div class="row">
                                                <div class="col"></div> <!-- Empty column to push the button to the right -->
                                                <div class="col-auto">
                                                    <div class="" >
                                                        <button type="button"  class="btn-close close-overlay" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            </div>
                                              <h1 class="pb-3 fw-bolder">{{ $collection->title }}</h1>
                                              <div class="row">
                                                <div class="col">
                                                  <h2 class="fw-semibold">Rp {{ $collection->price }}</h2>
                                                </div>
                                                <div class="col">
                                                  <h4 style="color:red" class="fw-bold">Discount {{ $collection->discount }}%</h4>
                                                </div>
                                              </div>
                                            </div>
                                            <h5 class="mb-3">Description</h5>
                                            <p class="fw-semibold fs-6" style="white-space: pre-line;">{{ $collection->description }}</p>
              
                                            <a href="/contact" type="button" class="btn btn-primary" style="margin: 100px 0px -10px 0px;">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




@endsection