@extends('body.main')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Dashboard')
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>

:root {
    --putih: rgb(245, 252, 255);
    --birutua: rgb(103, 212, 255);
    --birumuda: rgb(150, 225, 255);
    --birugelap: rgb(51, 176, 225);
    --kuning: rgb(236, 255, 92);
    --hijau: rgb(92, 255, 133);
    --font: montserrat;
}

   

        *{
            padding: 0;
            margin: 0;
            margin: auto;
            font-family: montserrat;
            
        }

        /* judul text */

        .slider > .text{
            margin-top: 10em;
            padding: 8px;
            margin-bottom: 11px;
            justify-content: center;
            align-items: center;
        }

        .text{
            text-align: center;
            line-height: 50px;
        }

        .first{
            letter-spacing: 3px;
            font-size: 40px;
            color: var(--birugelap);
            font-weight: 700;
        }

        .second{
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* About */
        .about{
            text-align: center;
            max-width:90%;
            margin: auto;
            margin-top: 5%;
            border-radius: 40px;
            color: var(--putih);
            font-weight:600;
        }

        .about > h2{
            font-size: 40px;
            padding: 25px 0 0 0;
        }

        .about-text{
            width: 60%;
            padding: 20px;
            justify-content: center;
            align-items: center;
            margin: auto;
            font-size: 25px;
            padding: 25px;
        }

        /* kategori */
        .kategori{
            width: 90%;
            margin: auto;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .category{
            margin: 10px;
            list-style: none;
            border: 1px solid var(--birutua);
            background-color: var(--birumuda);
            padding: 6px;
            border-radius: 50px;
            width: 150px;
            text-align: center;
            
        }

        .kategori-list ul{
            display: flex;
            justify-content: center; /* secara horizontal */
            align-items: center;     /* secara vertikal (kalau perlu tinggi) */
            gap: 20px;               /* jarak antar item */
            list-style: none;
            height: 80px;           /* kasih tinggi kalau mau vertical center */
            border: 2px solid var(--birutua);
            background-color: var(--putih);
            border-radius: 37px;
        }

        .best{
            width: 80%;
            margin: auto; 
            height: fit-content;
            justify-content: center;
        }

        .best-txt{
            margin-bottom: 3%;
        }
       

        /* Service */
        .service{
           width: 100%;
           display: flex;
           margin: auto;
           justify-content: center;
           margin-top: 2%;
        }

        .servetext{
            margin-top: 5%;
        }

        .serve-text{
            padding-top: 30px;
            color: var(--birugelap);
            font-weight: 600;
        }

        .servetext .text .first{
            color: var(--putih);
        }

        .illust{
          text-align: center;
          padding: 25px;
          background-color: var(--putih);
          margin: 10px;
          height: auto;
          border-radius: 20px;
          border: 2px solid var(--birutua);
        }

        .footer{
            margin-top: 50px;
        }

        

    </style>
</head>

@section('content')
    
    <div class="content">
        
    <!-- Slider -->
        <div class="slider">
        <div class="text">
            <p class="first">Buku Menarik Tiap Pekan</p>
            <p class="second">Rekomendasi Ambatubook</p>
        </div>
        
        @include('body.carousel')
        </div>

      

        <!-- Kategori -->
         <div class="kategori">
            <div class="kategori-list">
                <ul>
                    <li class="category">Novel</li>
                    <li class="category">Komik</li>
                    <li class="category">Ensiklopedi</li>
                    <li class="category">Kamus</li>
                    <li class="category">Pelajaran</li>
                </ul>
            </div>
         </div>

        <!-- Best of Category -->
         <div class="best-cat">  <!-- all -->
            <div class="best-txt">
                <div class="text">
                    <p class="first">Kategori Buku</p>
                </div>
            </div>

            <div class="best">
              @include('body.card-slider');  
            </div>

             <!-- <div class="best">
            <div class="kolom">
                <div class="gambar">
                <img src="{{ asset('images/4.jpg') }}" class="img-fluid" alt="Buku" width="200"; height="200">
                </div>
                <div class="detail">
                    <h2>Judul Buku</h2>
                    <p>Kategori</p>
                </div>
            </div>

            <div class="kolom">
                <div class="gambar">
                <img src="{{ asset('images/5.jpg') }}" class="img-fluid" alt="Buku" width="200"; height="200">
                </div>
                <div class="detail">
                    <h2>Judul Buku</h2>
                    <p>Kategori</p>
                </div>
            </div>

            <div class="kolom">
                <div class="gambar">
                <img src="{{ asset('images/6.jpg') }}" class="img-fluid" alt="Buku" width="200"; height="200">
                </div>
                <div class="detail">
                    <h2>Judul Buku</h2>
                    <p>Kategori</p>
                </div>
            </div> 
            </div>  -->
         </div>

         <div class="about">
            <h2>Ambatubook</h2>
            <p class="about-text">
                Hadir untuk mendorong minat baca dan literasi di masyarakat. Dengan koleksi buku yang beragam dan suasana yang nyaman, Ambatubook menjadi tempat santai, belajar, dan berbagi pengetahuan. Ambatubook menjadi pusat literasi yang terbuka untuk umum.
            </p>
        </div>

        <div class="servetext">
        <div class="text">
            <p class="first">What Can We Do?</p>
        </div>
        </div>
        

         <div class="service">
            <div class="sumbang">
                <div class="illust">
                    <img src="{{ asset('images/book.png') }}" alt="" width="175"; height="175">
                    <p class="serve-text">
                        Sumbang
                    </p>
                </div>
            </div>

            <div class="guna">
                <div class="illust">
                    <img src="{{ asset('images/open-book.png') }}" alt="" width="175"; height="175">
                    <p class="serve-text">Guna</p>
                </div>
            </div>

            <div class="pinjam">
                <div class="illust">
                    <img src="{{ asset('images/stopwatch.png') }}" alt="" width="175"; height="175">
                    <p class="serve-text">
                        Pinjam
                    </p>
                </div>
            </div>
         </div>


    <!-- Footer -->
        <div class="footer">
            @include('body.footer')
        </div>
   
@endsection
