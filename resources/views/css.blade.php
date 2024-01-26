<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="icon" type="image/x-icon" style="border-radius: 50%; overflow:hidden;" href="/logo LC.jpg" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDknVTyTibzRHKYE8sLLes7AAlcgEUbqz4&libraries=places"></script>

<style>
:root {
        --gradient: linear-gradient(to bottom right, rgb(255, 255, 255)15%, rgb(209, 186, 216), rgb(196, 226, 175)50%, rgb(205, 190, 210), rgb(33, 219, 212));
    }
body {
    min-height: 100vh;
    background-color: #eaeaea;
    background-size: 200%;
    background-image: var(--gradient);
    animation: gradient-animation 7s infinite alternate;
}

@keyframes gradient-animation {
    0% {
        background-position: bottom right;
    }
    100% {
        background-position: top left;
    }
}


@media screen and(min-width:760px) {
    .dropend:hover > .dropdown-menu {
        position: absolute;
        top: 0;
        left: 0;
        margin-left: .125em;
    }
}

.image-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}




.scrollable {
    display: flex;
    overflow-x: scroll;
    scroll-behavior: smooth;
}

.scrollable::-webkit-scrollbar {
    width: 0; /* Menghilangkan lebar scrollbar horizontal */
}

.scrollable::-webkit-scrollbar-thumb {
    background-color: transparent; /* Menghilangkan warna thumb scrollbar */
}



.image-wrapper {
    position: relative;
    margin-left: 20px;
    margin-right: 20px;
    border-radius: 15px;
}

.img-overlay {
    width: 350px;
    height: 525px;
    border-radius: 15px;
}

.overlays {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 30%;
    font-size: 80px;
    color: rgb(74, 36, 36); /* Warna teks */
    display: flex;
    justify-content: center;
    align-items: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s;
    border-radius: 15px;
}

.overlay-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 15px;
}


.overlay-text {
    color: #fff;
    margin-top: 10px;
}

.image-wrapper:hover .overlay {
    opacity: 1;
}

.scroll-left {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 14px 20px;
    background-color: #d0d2d5;
    color: #fff;
    border: none;
    cursor: pointer;
    left: 10px;
    border-radius: 100%;

}

.scroll-right {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 14px 20px;
    background-color: #d0d2d5;
    color: #fff;
    border: none;
    cursor: pointer;
    right: 10px;
    border-radius: 100%;
    
}

#card-contact {
    width: 65rem; 
    position:absolute; 
    top: 50%; 
    left:50%; 
    transform: translate(-50%, -40%); 
    margin-top:40px;
    

}

.product-item .description {
    max-height: 3.2em; /* Set the maximum height for 2 lines of text (adjust as needed) */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Number of lines to show */
    -webkit-box-orient: vertical;
}

/* Overlay detail  */
.overlaycl {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    padding-top:100px;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Add an overlay background color */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

#overlayimage {
   
    width: 450px; /* Set maximum width for the image */
    height: 480px;; /* Maintain aspect ratio */
    z-index: 1;

}

</style>