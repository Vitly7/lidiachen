
<section class="mt-5 pt-5">
    <div class="section-heading">
      <h3 class="pb-3" style="text-align:center; color: white;">Our Collection</h3>   
    </div>
    <div class="image-container">
      <div class="scrollable" data-scroll-amount="330">
        @foreach($data as $collection)
        <div class="image-wrapper" >
          <a href="ourcollection">
            <img class="img-overlay" src="/imagecollection/{{ $collection->image }}" alt="Gambar 1">
            <div class="overlay">
              <h4 class="overlay-text">{{ $collection->title }}</h4>
            </div>
          </a>
        </div>
        @endforeach
      </div>
      <button class="scroll-left"><i class="bi bi-caret-left-fill"></i></button>
      <button class="scroll-right"><i class="bi bi-caret-right-fill"></i></button>
    </div>
  </section>