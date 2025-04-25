<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Slider</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #efefef;
    }

    .container{
        max-width: 1220px;
        width: 100%;
        background-color: grey;
    }

    .card{
        width: 312px;
        background: #fff;
        border-radius: 8px;
    }

    .card .image-box{
        height: 200px;
    }

    .card .image-box img{
        height: 100%;
        border-radius: 8px 8px 0 0;
    }

    .card .profile-details{
        display: flex;
        align-items: center;
        column-gap: 12px;
        padding: 15px;
    }

    .card .profile-details img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }

    .profile-details .name{
        font-size: 15px;
        font-weight: 500;
        
    }
    .profile-details .job{
        font-size: 15px;
        font-weight: 500;
        color: #000;

    }
</style>

<body>
    <div class="container">
        <div class="slider-container">
            <div class="card-wrapper">
                <div class="card">
                    <div class="image-box">
                        <img src="../images/6.jpg">
                    </div>
                    <div class="profile-details">
                        <img src="../images/4.jpg">
                        <div class="name-job">
                            <h3 class="name">Maya card</h3>
                            <h4 class="job">full stack developer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>