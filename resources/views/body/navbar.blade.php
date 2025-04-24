<nav class="nav">
        <div class="container">
            <img src="/images/carr.jpg" alt="logo" />
            <div class="collapse">
                <ul class="navbar">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Account</a></li>
                    <form action="{{ route('logout') }}" method="post">
                         @csrf
                     <button type="submit" class="btn">Log out</button>
                    </form>
                </ul>
            </div>
        </div>
</nav>


<style>
    * {
        padding: 0;
        margin: 0px;
        
    }

    .nav {
        position: fixed;
        background-color: rgb(137, 204, 231);
        padding: 20px;
        border: 1px solid white;
        align-items: center;
        width: 100%;
        z-index: 100;
    } 

    .container {
        display: flex;
        justify-content: space-between;
        margin-left: 30px;
        margin-right: 30px;
    }

    .container img {
        height: auto;
        width: 75px;
    }

    .collapse > .navbar {
        display: flex;
    }

    .collapse > .navbar .nav-item {
        list-style: none;
        margin: 7px;   
    }

    .collapse > .navbar .nav-item .nav-link {
        text-decoration: none;
        color: white;
        font-family: arial;
        border: 2px solid white;
        border-radius: 5px;
        padding: 7px;

    }

    .collapse > .navbar .nav-item .nav-link:hover {
        color: rgb(53, 135, 168);
        border: 2px solid rgb(53, 135, 168);
    }
</style>

