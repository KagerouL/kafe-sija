<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sija Toddopuli</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Freehand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <header class="header z-90 sticky lg:relative" id="head">
        <nav class="h-16 lg:h-24">
            <div class="logo">
                <img src="img/logokafe.png" alt="Logo" class="">
            </div>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                <i class="fas fa-bars" style="margin-right: 35px; margin-top:-8px"></i>
            </label>
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about ">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>



    <div class="bagian-1 my-button relative inset-0 left-0 z-40">
        <div class="dark-image relative -mt-22 lg:-mt-14">
            <img src="img/bgkafe.jpeg" class="absolute bgkafe w-full" />
            <img src="img/bgmobile.png" class="absolute bgmobile lg:hidden" />
            <div class="dark-overlay"></div>
            <div class="h-layar justify-center flex-col flex text-center items-center">
                <h2 class="text-3xl font-medium text-white tracking-widest -mt-24 lg:text-6xl">Membuatmu
                    Santai<br><br>&<br><br>Nyaman</h2>
                <a href="https://www.google.com/maps/dir//Jl.+Toddopuli+Raya+No.43,+Borong,+Kec.+Manggala,+Kota+Makassar,+Sulawesi+Selatan+90233/@-5.1644802,119.3686248,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2dbee30c5105e7bd:0x431252cd16993993!2m2!1d119.4510268!2d-5.1644855?entry=ttu" target=”_blank”>
                <button class="wid-button rounded-full mt-12 font-medium border-2 border-amber text-amber hover:border-0 hover:bg-amber hover:text-black">Lokasi</button>
                </a>
            </div>

            <a id="scroll" class="bg-emerald-900 w-swipe h-48 absolute -mt-48 no-underline lg:-mt-32 lg:h-40" style="z-index: 2" href="#menu">
                <div class="flex justify-center mt-2">
                    <span class="material-symbols-outlined md-70">
                        expand_circle_down
                        </span>
                </div>
                <h5 class="text-center text-lg lg:text-xl">Scroll ke bawah untuk lebih Detail</h5>
            </a>
        </div>
    </div>



    <button onclick="topFunction()" id="myBtn" title="Go to top" class="topbtn" style="">
        <span class="material-symbols-outlined topicon">
            arrow_drop_up
            </span>
    </button>



    <div class="bagian-3" id="menu">
        <div class="h-layar bg-emerald-900">
            <div class="flex flex-wrap gap-12 items-center justify-center text-center place-content-around lg:space-x-12 lg:gap-0">
                <h2 class="text-white font-bold text-2xl w-screen mt-12 lg:text-5xl">Menu Favorit</h2>
                <div
                    class="menu rounded-2xl bg-emerald-800 shadow-2xl items-center hover:shadow-amber lg:mt-24 lg:grid lg:justify-center">
                    <div class="foto"><img src="img/kopi1.jpg" class="rounded-lg"></div>
                    <h5 class="text-xl text-white text-center mt-3 lg:text-3xl">Kopi Susu SITO</h5>
                </div>

                <div
                    class="menu rounded-2xl bg-emerald-800 shadow-2xl items-center hover:shadow-amber lg:mt-24 lg:grid lg:justify-center">
                    <div class="foto"><img src="img/kopi2.jpg" class="rounded-lg"></div>
                    <h5 class="text-xl text-white text-center mt-3 lg:text-3xl">Kopi Gula Aren</h5>
                </div>

                <div
                    class="menu mt-12 rounded-2xl bg-emerald-800 shadow-2xl items-center hover:shadow-amber lg:mt-24 lg:grid lg:justify-center">
                    <div class="foto2"><img src="img/kopi3.jpg" class="rounded-lg"></div>
                    <h5 class="text-xl text-white text-center mt-3 lg:text-3xl">Black Coffee</h5>
                </div>

                <div
                    class="menu mt-12 rounded-2xl bg-emerald-800 shadow-2xl items-center hover:shadow-amber lg:mt-24 lg:grid lg:justify-center">
                    <div class="foto2"><img src="img/kopi4.jpg" class="rounded-lg"></div>
                    <h5 class="text-xl text-white text-center mt-3 lg:text-3xl">Kopi Susu/Gula</h5>
                </div>
            </div>

            <div class="text-menu justify-center flex text-center">
                <h2 class="text-white font-bold text-xl mt-48 w-72 lg:text-3xl lg:w-screen lg:mt-10">Temui Kenikmatan Sejati dalam Setiap Tetes Kopi
                    dan Gigitan Makanan Lezat </h2>
            </div>

        </div>
    </div>



    <div class="bagian-2 relative h-screen" id="about">
        <div class="height-2 bg-emerald-800 flex justify-center">
            <h5 class="mt-12 absolute text-white text-2xl font-bold lg:text-5xl">Cara kami membuat</h5>
            <h5 class="mt-20 absolute text-amber text-xl tracking-widest lg:text-4xl lg:mt-28">Kopi Andalan</h5>

            <div class="flex flex-wrap justify-center items-center mt-40 lg:gap-12 lg:mt-8">

                <div class="text-white text-center w-56 lg:mx-10 lg:h-96">
                    <span class="material-symbols-outlined cara">
                        favorite
                        </span>
                    <h5 class="mar2-text mt- text-base lg:text-2xl">Bahan Berkualitas</h5>
                    <p class="mar2-text text-xs lg:text-xl lg:mt-10">Kami menggunakan biji kopi pilihan. Setiap cangkir kopi dibuat dengan penuh cinta dan perhatian untuk menghasilkan rasa yang sempurna.
                    </p>
                </div>

                <div class="text-white text-center w-56 lg:mx-10 lg:h-96">
                    <span class="material-symbols-outlined cara">
                        favorite
                        </span>
                    <h5 class="mar2-text mt- text-base lg:text-2xl">Penyeduhan Terbaik</h5>
                    <p class="mar2-text text-xs lg:text-xl lg:mt-10">Proses penyeduhan kami menggunakan teknik-teknik terbaik untuk memastikan setiap cangkir kopi memiliki aroma dan rasa yang khas.
                    </p>
                </div>

                <div class="text-white text-center w-56 lg:mx-10 lg:h-96">
                    <span class="material-symbols-outlined cara">
                        favorite
                        </span>
                    <h5 class="mar2-text mt- text-base lg:text-2xl">Lingkungan Nyaman</h5>
                    <p class="mar2-text text-xs lg:text-xl lg:mt-10">Kafe kami dirancang untuk memberikan kenyamanan maksimal kepada setiap pengunjung.
                    </p>
                </div>

                <div class="text-white text-center w-56 lg:mx-10 lg:h-96">
                    <span class="material-symbols-outlined cara">
                        favorite
                        </span>
                    <h5 class="mar2-text mt- text-base lg:text-2xl">Pelayanan Ramah</h5>
                    <p class="mar2-text text-xs lg:text-xl lg:mt-10">Kami percaya bahwa pelayanan yang ramah dan penuh senyum adalah kunci untuk membuat pelanggan merasa dihargai.
                    </p>
                </div>
            </div>
        </div>
    </div>

    

    <div class="bg-emerald-900 h-96 relative mt-12 lg:h-screen" id="gallery">
        <div class="flex justify-center">
            <h5 class="mt-12 text-white text-2xl font-bold lg:text-5xl">Gallery</h5>
        </div>

        <div class="swiper mySwiper mt-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/kafe.jpeg"></div>
                <div class="swiper-slide"><img src="img/kasir.jpeg"></div>
            </div>
        </div>
    </div>



    <footer class="text-center text-white relative bg-gradient-to-b from-emerald-800 to-emerald-900" style="background-color: #;" id="contact">
        <div class="container pt-4 flex justify-center items-center flex-wrap">
            <section class="mb-4 h-14">
            <a
                class="btn btn-link btn-floating btn-lg text-light m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-whatsapp fa-xl"></i
            ></a>
    
            <a
                class="btn btn-link btn-floating btn-lg text-light m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-facebook-f fa-xl"></i
            ></a>
    
            <a
                class="btn btn-link btn-floating btn-lg text-light m-1"
                href="https://www.instagram.com/sija.toddopuli?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                role="button"
                target=”_blank”
                data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram fa-xl"></i
            ></a>
    
            </section>
        </div>
        <div class="text-light p-3" style="background-color: rgba(0, 0, 0, 0.2); display: flex; justify-content: space-between;">
            <h6> © 2024 Copyright : SijaToddopuli </h6>
            <h6> Open Everyday At : 08:00am - 23:00pm</h6>
        </div>
        </footer>    


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {});
    </script>

    <script>
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
            document.getElementById("myBtn").style.display = "block";
          } else {
            document.getElementById("myBtn").style.display = "none";
          }
        }
        
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
    

</body>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Kulim Park', sans-serif;
        background-color: #182D22
    }

    .header {
        top: 0;
        z-index: 999
    }

    .bagian-1 {
        position: relative;
    }

    .h-layar {
        position: relative;
        height: 100vh;
        z-index: 1;
    }

    .custom-height {
        height: 100px;
    }

    .wid-button {
        width: 100px;
        height: 50px
    }

    .height-2 {
        height: 850px
    }

    .dark-image {
        background-image: url("img/icons/bgkafe.jpeg");
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .dark-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .bagian-3 {
        height: 100vh
    }

    .menu {
        width: 14vh;
        height: 14vh;
    }

    .bagian-menu {
            
        }

    .bg-logo {
        background-image: url(https://i.imgur.com/qWIqEKY.png);
    }

    .foto {
        width: 100%;
        height: 100%;
    }

    .w-layar {
        width: 100%
    }

    .w-swipe {
        width: 100%
    }

    body::-webkit-scrollbar {
        width: px;
    }

        .text {
            margin-top: 150px;
            margin-left: 25px;
            margin-right: 75px;
            text-align: justify;
        }

        h5 {
            font-family: 'Kulim Park', sans-serif;
            color: #CAB67F;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 35px;
            font-weight: 500;
            letter-spacing: 6px;
            margin-bottom: 50px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: 2px;
        }

        footer {
            width: 100%;
        }

    .material-symbols-outlined {
    font-variation-settings:
        'FILL' 1,
        'wght' 0,
        'GRAD' 0,
        'opsz' 24
    }

    .material-symbols-outlined.md-70 {
        font-size: 40px;
        color: #CAB67F
    }

    .cara {
        font-size: 40px;
        color: #CAB67F
    }

    nav {
            display: flex;
            background: #10261D;
            align-items: center;
            justify-content: space-between;
            padding-top: 13px;
            padding-left: 20px;
            flex-wrap: wrap;
        }

        .logo {
            color: #fff;
            font-size: 35px;
            font-weight: 600;
        }

        .logo img {
            max-width: 50px;
            height: auto;
            display: block;
            margin-top: -14px
        }

        nav ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
        }

        nav ul li {
            margin: px;
        }

        nav ul li a {
            color: #f2f2f2;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 18px;
            border-radius: 20px;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            text-align: center
        }

        nav ul li a.active,
        nav ul li a:hover {
            color: #111;
            background: #CAB67F;
        }

        nav .menu-btn i {
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: none;
        }

        input[type="checkbox"] {
            display: none;
        }

        .swiper {
      width: 40vh;
      height: 20vh;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .topbtn {
        display: none; 
        position: fixed; 
        bottom: 50px; 
        right: 30px; 
        z-index: 99; 
        border: none; 
        outline: none; 
        background-color: #CAB67F; 
        color: white; 
        cursor: pointer; 
        width: 7vh;
        height: 7vh; 
        border-radius: 50px;
    }

    .topicon {
        font-size: 40px;
        margin-top: 4px;
    }

        @media (max-width: 920px) {
            nav .menu-btn i {
                display: block;
            }

            #click:checked ~ .menu-btn i:before {
                content: "\f00d";
            }

            nav ul {
                position: fixed;
                top: 60px;
                left: -100%;
                background: #182D22;
                height: 100vh;
                width: 50%;

                text-align: center;
                display: block;
                transition: all 0.3s ease;
            }

            #click:checked ~ ul {
                left: 0;
            }

            nav ul li {
                width: 30%;
                margin: 40px 0;
            }

            nav ul li a {

                width: 100%;
                margin-left: -100%;
                display: block;
                font-size: 20px;
                transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            #click:checked ~ ul li a {
                margin-left: 0px;
            }

            nav ul li a.active,
            nav ul li a:hover {
                background: none;
                color: #CAB67F;
            }
        }
        
    @media (min-width: 1440px) {
    .bgkafe {
    margin-top: -30vh
    }

    .foto {
        height: 20vh;
        width: 20vh;
        margin-left: 30px
        }

    .foto2 {
        height: 20vh;
        width: 20vh;
        margin-left: 15px
        }

    .menu {
        width: 34vh;
        height: 54vh;
        }
        
    .logo img {
        max-width: 70px;
        height: auto;
        display: block;
        margin-top: -14px
        }

    .cara {
        font-size: 60px;
        color: #CAB67F
    }

    nav ul li a {
        color: #f2f2f2;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        padding: 8px 18px;
        border-radius: 20px;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        margin-right: 100px;
        }

    .material-symbols-outlined.md-70 {
        font-size: 50px;
        color: #CAB67F
    }

    .swiper {
      width: 100vh;
      height: 60vh;
    }

    .topicon {
        font-size: 60px;
        margin-top: 4px;
    }

    .topbtn {
        width: 10vh;
        height: 10vh;
    }

    }
</style>


