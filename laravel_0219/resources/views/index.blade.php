<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINOTAENG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/imgs/index/01-logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: antiquewhite;
        }

        .navbar {
            background-color: rgb(130, 76, 23);
            height: 40px;
            opacity: 0.8;
            z-index: 1050;
            /* 設置更高的層級，保證它在其他元素之上 */
        }

        .nav-link {
            color: antiquewhite;
        }

        /* 設定carousel高度 */
        .carousel-item img {
            width: 100%;
            /* 圖片寬度填滿容器 */
            height: 100%;
            /* 圖片高度填滿容器 */
            object-fit: cover;
            /* 保持圖片比例並裁切 */
        }

        #demo {
            width: 500px;
            /* 設定寬度為500px */
            height: 500px;
            /* 設定高度為500px */
            margin: 0;
            /* 使carousel居中 */
        }

        .knit {
            width: 500px;
            /* 設定寬度為500px */
            height: 500px;
            /* 設定高度為500px */
        }

        span,
        h5,
        hr {
            color: rgb(130, 76, 23);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>



<body>
    <!-- navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- navbar bobo的logo 咖啡色 -->
            <nav class="navbar navbar-expand-sm fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/imgs/index/logo.jpg') }}" class="rounded-circle" width="30px"
                            height="30px" alt="bobo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="./about.html">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./shop.html">SHOP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./stories.html">STORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./characters.html">CHARACTERS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">MY
                                    ACCOUNT</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">LOGIN</a></li>
                                    <li><a class="dropdown-item" href="#">ORDER</a></li>
                                    <li><a class="dropdown-item" href="#">CART</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="row justify-content-center fixed-top">
            <div class="col-5 mt-5">
            </div>
            <div class="col-6 mt-5">
                <a href="./index.html" class="fixed-icon ">
                    <img src="{{ asset('assets/imgs/index/marshmallow.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- 固定棉花糖圖標 -->
    <!-- <div class="container-fluid">
    </div> -->



    <!--第一行 =>跳繩gif圖 -->
    <div class="container-fluid" style="height: 100vh;">
        <div class="row justify-content-center" style=" height: 100%; width: 100%;">
            <div class="col-8 mx-auto mt-5">
                <img src="{{ asset('assets/imgs/index/jump.gif') }}" class="img-fluid" alt="GIF Example">
            </div>
        </div>
    </div>


    <!-- 第二行=>villagers的字-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 d-flex justify-content-center">
                <img src="{{ asset('assets/imgs/index/villagers.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>


    <!-- 第三行 => carousel + gif圖 -->
    <div class=" container mb-5">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/imgs/index/Carousel-1.jpg') }}" class="d-block img-fluid"
                                style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/imgs/index/Carousel-2.jpg') }}" class="d-block img-fluid"
                                style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/imgs/index/Carousel-3.jpg') }}" class="d-block img-fluid"
                                style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/imgs/index/Carousel-4.jpg') }}" class="d-block img-fluid"
                                style="object-fit: cover;">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col d-flex justify-content-end mb-5">
                <div class="knit">
                    <img src="{{ asset('assets/imgs/index/knit cap.gif') }}" class="img-fluid" alt="GIF Example">
                </div>
            </div>
            <!-- 右測空白欄 -->
            <div class="col">
            </div>
        </div>
    </div>

    <!-- video字 -->
    <div class="container-fluid">
        <div class="row mt-5 ">
            <div class="col mb-5 d-flex justify-content-center">
                <img src="{{ asset('assets/imgs/index/video.png') }}" alt="map"
                    style="width: 160px; height: auto;">
            </div>
        </div>
    </div>

    <!-- 第四 =>youtube影片 -->

    <div class="container-fluid">
        <div class="row">
            <!-- 左測空白欄 -->
            <div class="col">
            </div>
            <div class=" col mb-5 d-flex justify-content-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/q8Vx5fEaV0I?si=TlgDZjDyPP-t1gnP" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class=" col mb-5 d-flex justify-content-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/W_rozfl2BX0?si=5kMA_UqZxP1Zozx4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <!-- 右測空白欄 -->
            <div class="col">
            </div>

        </div>
    </div>

    <!-- 地圖字 -->
    <div class="container-fluid">
        <div class="row mt-5 ">
            <div class="col mb-5 d-flex justify-content-center">
                <img src="{{ asset('assets/imgs/index/map.png') }}" alt="map"
                    style="width: 150px; height: auto;">
            </div>
        </div>
    </div>

    <!-- 第五行 => 地圖 -->

    <div class="container-fluid">
        <div class="row">
            <!-- 左側空白欄-->
            <div class="col">
            </div>
            <!-- 地圖左 -->
            <div class=" col mb-5  d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.705262330878!2d121.52448738598461!3d25.04407458068511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a96523e0246d%3A0xf1c9276707165c71!2z6I-v5bGxMTkxNOaWh-WMluWJteaEj-eUoualreWckuWNgA!5e0!3m2!1szh-TW!2stw!4v1734674131049!5m2!1szh-TW!2stw"
                    width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- 地圖右 -->
            <div class=" col mb-5 d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3695652010406!2d127.02480547632166!3d37.52278472663485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca392f0c0c599%3A0x719519913179712d!2s4f%2C%2043%20Dosan-daero%2027-gil%2C%20Gangnam%20District%2C%20Seoul%2C%20%E5%8D%97%E9%9F%93!5e0!3m2!1szh-TW!2stw!4v1735093664973!5m2!1szh-TW!2stw"
                    width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- 右測空白欄 -->
            <div class="col">
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <hr>
    <footer>
        <div class="container-fluid bd-footer py-4 mt-3">
            <div class="row justify-content-center">
                <div class="col-3 mb-3 text-center">
                    <a href="https://www.dinotaeng.com/"
                        class="d-inline-flex align-items-center mb-2  text-decoration-none">
                        <img src="{{ asset('assets/imgs/index/logo2.jpg') }}" width="40px" height="40px"
                            alt="bobo">
                        <span class="fs-5 ms-3 ">DINOTAENG</span>
                    </a>
                    <!-- <ul class="list-unstyled small text-muted mt-0 ms-5">
                        <li>Designed by olivia.</li>
                    </ul> -->
                </div>
                <div class="col-3 mb-3 text-center">
                    <h5>Reference</h5>
                    <ul class="list-unstyled small ">
                        <li><a href="https://dinotaeng.com/">Official Website</a></li>
                    </ul>
                </div>

                <div class="col-3 mb-3 text-center">
                    <h5>Follow Us</h5>
                    <a href="https://www.instagram.com/dinotaeng/" target="_blank">
                        <img src="{{ asset('assets/imgs/index/Instagram.png') }}" width="30px" height="30px"
                            alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/dinotaeng.official/?locale=zh_TW" target="_blank"
                        class="ms-3">
                        <img src="{{ asset('assets/imgs/index/facebook.png') }}" width="30px" height="30px"
                            alt="Facebook">
                    </a>
                </div>

                <!-- <div class="col-3"></div> -->

            </div>
        </div>
    </footer>

    <!-- 彈出視窗 -->
    <!-- Modal HTML -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">Welcome to DINOTAENG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    We're glad to have you here! Enjoy browsing our website.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">
                        <a href="./shop.html" style="color: white; text-decoration: none;">Go to Shop</a>
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to show the modal when the page loads

        window.addEventListener('load', function() {
            var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>



</body>

</html>
