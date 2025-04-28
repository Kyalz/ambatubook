
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
        margin: 0;
        padding: 0;
    }

    .footer{
        width: 100%;
        background-color: var(--putih);
        color: var(--birugelap);
        padding-top: 2%;
        padding-bottom: 2%;
       
    }

    .bawah{
        
        display: flex;
        text-align: center;
        align-items: center;
        padding: 30px;
        margin-left: 20%;
        margin-right: 20%;
        gap: 100px;
        justify-content: space-between;
        justify-content: center;
        
    }

    .alamat{
        text-align: justify;
        line-height: 25px;
    }

    .halaman{
        text-align:justify;
        line-height: 25px;
    }

    .halaman li{
        list-style:none;
    }

    .halaman li a {
        text-decoration: none;
        color: var(--birugelap);
    }

    .halaman li a:hover{
        color: rgb(53, 135, 168);

    }

    .head{
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 600;
    }
</style>

    <div class="footer">
        <div class="bawah">

        <div class="logo">
                <img src="{{ asset('images/ambatubook-birutua.png') }}" alt="logo" width="auto" height="50px">
            </div>

            <div class="alamat">
                <p class="head">Where We Are</p>
                <p>Jl. Perjuangan, Kota Cirebon</p>
                <p>SMKN Negeri 1 Cirebon</p>
                <p>0852-1845-0702</p>
            </div>

            <div class="halaman">
                <ul>
                    <p class="head">Explore</p>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Book</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </div>
        </div>
    </div>
