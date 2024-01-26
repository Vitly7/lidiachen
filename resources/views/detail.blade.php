@extends('main')
@section('container')

<section style="margin-top:200px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="koleksi1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 px-4 py-2" >
                            <div class="card-body">
                                <div class="section-heading" style="margin-bottom: 10px;">
                                    <h1 class="pb-3 fw-bolder">Savage Dress</h1>
                                    <h2 class="fw-semibold">Rp 9.000.000 - Rp 10.000.000</h2>
                                </div>
                                <h5 class="mb-3">Description</h5>
                                <p class="fw-semibold fs-6">Isi Description</p>

                                <a href="/about" type="button" class="btn btn-primary" style="margin: 100px 0px -10px 0px;">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection