<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Ambatubook</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    :root {
    --putih: rgb(245, 252, 255);
    --birutua: rgb(103, 212, 255);
    --birumuda: rgb(150, 225, 255);
    --birugelap: rgb(51, 176, 225);
    --kuning: rgb(236, 255, 92);
    --hijau: rgb(92, 255, 133);
    --font-family: montserrat;
}
    *{
        padding: 0;
        margin: 0;
    }

    body{
        background-color: var(--birutua);
        font-family: var(--font-family);
        width: 100%;
    }

    .top {
        padding-top: 5%;
        display: flex;
        text-align: center;
        justify-content: center;
        width: 90%;
        margin: auto;
        align-items: center;
        justify-content: space-between;
        gap: 5%;
        height: 220px;
        font-weight: 500;
        padding-bottom: 7%;
    }

    .top p {
        
        font-size: 30px;
        text-align: left;
        color: var(--putih);
    }

    .mid{
        padding-top: 9%;
        background-color: var(--putih);
        padding-bottom: 4%;
    }

    .mid p{
        
        font-size: 40px;
        color: var(--birugelap);
        text-align: center;
        font-weight: 700;
    }

    .list{
        display: flex;
        text-align: center;
        justify-content: center;
        padding: 30px;
    }

    .nama {
        margin: 20px;
        font-size: 30px;
        font-weight: 500;
        list-style: none;
    }

    .link {
        text-decoration: none;
        color: black;
    }

    .last{
        background-color: var(--putih);
        padding-bottom: 3%;
    }

    .last p {
        text-align: center;
        color: var(--birugelap);
        font-size: 40px;
        font-weight: 700;
        padding: 50px;
    }

    .last img{
        border-radius: 20px;
        border: 2px solid var(--birutua);
    }

    .himpit-satu{
        align-items: center;
        border: 5px solid var(--birutua);
        border-radius: 22px;
        background-color: var(--putih);
        display: flex;
        gap: 50px;
        margin-left: 5%;
        width: 89%;
    }

    .himpit-satu p {
        font-size: 30px;
        color: black;
        font-weight: 600;
        text-align: left;
    }

    .footer{
        bottom: 0;
    }
</style>
<body>
    <div class="navbar">
        @include('body.navbar');
    </div>

    <div class="mid">
            <p>Didirikan Oleh Sekawan Yang Memiliki Satu Tujuan</p>

            <ul class="list">
                <li class="nama"><a href="" class="link">Aji Pangestu</a></li>
                <li class="nama"><a href="" class="link">Fadhil Jibransyah</a></li>
                <li class="nama"><a href="" class="link">Khalila Puspita</a></li>
                <li class="nama"><a href="" class="link">Melindah Permatasari</a></li>
                <li class="nama"><a href="" class="link">Bintang Fairuz</a></li>
            </ul>
        </div>

        <div class="top">
            <div class="logo">
                <img src="./images/ambatubook.png" alt="logo" width="600px"/>
            </div>

            <div class="desc">
                <p>Ambatubook terlahir guna menegakan literasi masyarakat. Membantu meningkatkan minat baca Indonesia, menjadi tempat yang menyenangkan untuk berdiskusi, berbagi ilmu, dan menemukan pengetahuan-pengetahuan baru.</p>
            </div>
        </div>

        <div class="last">
            <p>AmbatuBook Hadir Disini</p>

            <div class="himpit-satu">
                <img src="./images/download (6).jpeg" alt="perpus" width="400">
                <p>Jl. Perjuangan <br><br> SMK Negeri 1 Kota Cirebon <br><br> ambatubook@gmail.com <br><br> 0852-1845-0702</p>
            </div>
        </div>

       
        <div class="footer">
              @include('body.footer');
        </div>
      

</body>
</html>