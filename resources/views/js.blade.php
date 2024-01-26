

<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- Scroll ke tengah collection  --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Scroll to the element with ID 'collection'
        var collectionElement = document.getElementById('collection');
        if (collectionElement) {
            setTimeout(function () {

                collectionElement.scrollIntoView({ behavior: 'smooth' });
            }, 300);
        }
    });
</script>

{{-- Klik kiri dan kanan yang ada di home --}}
<script>
    const scrollLeftButtons = document.querySelectorAll('.scroll-left');
    const scrollRightButtons = document.querySelectorAll('.scroll-right');

    scrollLeftButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const scrollable = button.parentElement.querySelector('.scrollable');
            const scrollAmount = parseInt(scrollable.getAttribute('data-scroll-amount'));
            scrollable.scrollBy(-scrollAmount, 0);
        });
    });

    scrollRightButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const scrollable = button.parentElement.querySelector('.scrollable');
            const scrollAmount = parseInt(scrollable.getAttribute('data-scroll-amount'));
            scrollable.scrollBy(scrollAmount, 0);
        });
    });
</script>

{{-- Overlay Detail  --}}
<script>
    $(document).ready(function() {
        // Open overlay when the corresponding button is clicked
        $(".open-overlay").click(function() {
            var targetOverlayId = $(this).data("bs-target");
            $(targetOverlayId).show();
        });

        // Close overlay when any close button is clicked
        $(".close-overlay").click(function() {
            var targetOverlayId = $(this).closest(".overlaycl").attr("id");
            $("#" + targetOverlayId).hide();
        });
    });
</script>




{{-- Google Maps --}}
<script>
    function initMap() {
    var mapOptions = {
        center: { lat: -7.265757, lng: 112.734146 }, // Koordinat pusat peta
        zoom: 15, // Tingkat zoom
    };
    var map = new google.maps.Map(document.getElementById("google-map"), mapOptions);
}

google.maps.event.addDomListener(window, "load", initMap);

</script>