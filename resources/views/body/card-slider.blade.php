<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Arrow -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward_ios" />
    <!-- Link Swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Document</title>
</head>

<style>

:root {
    --putih: rgb(245, 252, 255);
    --birutua: rgb(103, 212, 255);
    --birumuda: rgb(150, 225, 255);
    --biruterang: rgb(214, 243, 255);
    --kuning: rgb(236, 255, 92);
    --hijau: rgb(92, 255, 133);
    --font:monsterrat;
}

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: montserrat;
    }

    body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background:linear-gradient(var(--putih), var(--birutua));
    }

    .card-wrapper {
        max-width: 1100px;
        margin: 0 60px 35px;
        padding: 20px 10px; 
        
        overflow: hidden;
    }

    .card-list .card-item{
        list-style: none;
    }

    .card-list .card-item .card-link{
        user-select: none;
        display: block;
        background: #fff;
        padding: 18px;
        border-radius: 12px;
        text-decoration: none;
        border: 2px solid transparent;
        box-shadow: 0 10px 10px rgb(0, 0, 0, 0.05);
        transition: 0.2s ease;
    }

    .card-list .card-item .card-link:active{
        cursor: grabbing;
    }

    .card-list .card-item .card-link:hover{
        border-color: var(--birutua);
    }

    .card-list .card-link .card-image {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        border-radius: 10px;
    }

    .card-list .card-link .badge{
        color: var(--birugelap);
        padding: 8px;
        margin: 16px 0 18px;
        font-size: 0.95rem;
        font-weight: 500;
        background: var(--biruterang);
        width:fit-content;
        border-radius: 50px;
    }

    .card-list .card-link .card-title{
        font-size: 1.19rem;
        color: black;
        font-weight: 600;
    }

    .card-list .card-link .card-button{
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin: 30px 0 50px;
        color: var(--birutua);
        background: none;
        cursor: pointer;
        border: 2px solid var(--birutua);
        transform: rotate(-45deg);
        transition: 0.4s ease;
        }

        .card-wrapper .swiper-slide-button {
            color:var(--birutua);
            margin-top: -35px;
        } 

        @media screen and (max-width: 768px) {
            .card-wrapper{
                margin: 0 10px 25px;
            }

            .card-wrapper .swiper-slide-button{
                display: none;
            }

        }
</style>

<body>
    <div class="container swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="./images/Luka Cita.jpeg" alt="Card-Image" class="card-image">
                
                        <p class="badge">Novel</p>
                        <h2 class="card-title">Mengisahkan tentang dua pemimpi yang dikhianati oleh cita-cita mereka sendiri. <br><br> Valerie Patkar
                        </h2>
                        <button class="card-button material-symbols-outlined">arrow_forward_ios</button>
                    </a>
                </li>

                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="./images/ensiklopedia kiamat.jpg" alt="Card-Image" class="card-image">
                
                        <p class="badge">Ensiklopedia</p>
                        <h2 class="card-title">Sebuah buku yang mengupas tentang tanda-tanda kiamat menurut perspektif islam. <br><br> Tim Gema Insani
                        </h2>
                        <button class="card-button material-symbols-outlined">arrow_forward_ios</button>
                    </a>
                </li>

                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="./images/kkpk2.jpg" alt="Card-Image" class="card-image" width="400px" height="auto">
                
                        <p class="badge">Komik</p>
                        <h2 class="card-title">Proses Mika belajar bersabar, menghadapi tantangan, dan memahami sifat kesabaran. <br><br> Helmy Aulia
                        </h2>
                        <button class="card-button material-symbols-outlined">arrow_forward_ios</button>
                    </a>

                </li>

                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="./images/kamus indo.jpg" alt="Card-Image" class="card-image" width="400px" height="auto">
                
                        <p class="badge">Kamus</p>
                        <h2 class="card-title">Paduan lengkap kumpulan kosakata bahasa Indonesia sesuai dengan KBBI terbaru. <br><br><br>
                        </h2>
                        <button class="card-button material-symbols-outlined">arrow_forward_ios</button>
                    </a>

                </li>

                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="./images/phyton.jpg" alt="Card-Image" class="card-image" width="400px" height="auto">
                
                        <p class="badge">Pelajaran</p>
                        <h2 class="card-title">Panduan lengkap mengolah data menggunakan bahasa pemrograman Phyton dan Pandas. <br><br>
                        </h2>
                        <button class="card-button material-symbols-outlined">arrow_forward_ios</button>
                    </a>
                </li>
            </ul>

            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
        </div>
    </div>

    <!-- link swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- script -->
    <script>
         new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,
  
    // pagination bullets
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicbullets: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // responsive breakpints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
  });
    </script>
</body>
</html>