<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Angel Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* Your additional styles here */
        .swiper-container {
            width: 100%;
            height: 70vh;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/1.jpg" alt="Slide 1 d-block h-100">
            </div>
            <div class="swiper-slide">
                <img src="images/2.jpg" alt="Slide 2 d-blocl h-100">
            </div>
            <div class="swiper-slide">
                <img src="images/3.jpg" alt="Slide 3 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/4.jpg" alt="Slide 4 d-block">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper with zoom effect -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "fade",
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
