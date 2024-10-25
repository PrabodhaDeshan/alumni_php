<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Swiper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMzZtHnD4fEopjB9zi0z1f/Z0O2cVR7cU8D+Nl" crossorigin="anonymous">
    <style>
        .swiper {
            height: 300px;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f7f7f7;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            color: #28399b;
        }
        .swiper-pagination {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Upcoming Events</h2>
    <div class="swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div>
                    <h4>Event 1</h4>
                    <p>Date: Jan 15, 2024</p>
                    <p>Location: City Hall</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <h4>Event 2</h4>
                    <p>Date: Feb 20, 2024</p>
                    <p>Location: Convention Center</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <h4>Event 3</h4>
                    <p>Date: Mar 10, 2024</p>
                    <p>Location: Community Park</p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
</script>

</body>
</html>
