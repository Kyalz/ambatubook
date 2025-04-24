
<style>
    *{
        margin: 0;
        padding: 0;
    }

    .footer{
        width: 100%;
        background-color: rgb(137, 204, 231);
       
    }

    .bawah{
        display: flex;
        text-align: center;
        align-items: center;
        padding: 30px;
        margin-left: 40px;
        margin-right: 40px;
        gap: 100px;
        justify-content: space-between;
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
        color: black;
    }

    .head{
        margin-bottom: 20px;
        font-size: 20px;
    }
</style>

    <div class="footer">
        <div class="bawah">

        <div class="logo">
                <img src="{{ asset('images/4.jpg') }}" alt="logo" width="200px" height="200px">
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
