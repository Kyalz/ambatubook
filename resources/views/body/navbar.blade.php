
<style>

:root {
    --putih: rgb(245, 252, 255);
    --birutua: rgb(103, 212, 255);
    --birumuda: rgb(150, 225, 255);
    --kuning: rgb(236, 255, 92);
    --hijau: rgb(92, 255, 133);
    --font:monsterrat
}

    * {
        /* padding-top: 5em; */
        margin: 0px;
        
    }

    .nav {
        background-color: var(--putih);
        position: fixed;
        padding: 20px;
        border: 1px solid var(--putih);
        align-items: center;
        z-index: 100;
        width: 100%;
        top: 0;
        transition: background-color 0.5s ease-in-out;
    } 

    nav.scrolled{
        background-color: var(--birutua);
    }

    .container {
        display: flex;
        justify-content: space-between;
        margin-left: 30px;
        margin-right: 40px;
    }

    .container img {
        height: auto;
        width: 150px;
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
        color: var(--birutua);
        font-family: montserrat;
        font-weight:500;
        border: 2px solid var(--putih);
        border-radius: 8px;
        padding: 7px;
        transition: color 0.4s ease-in-out;
    }

    nav.scrolled .collapse > .navbar .nav-item .nav-link {
        color: var(--putih);
    }

    nav.scrolled .collapse > .navbar .nav-item .nav-link:hover {
        background-color: var(--putih);
        color: var(--birutua);
    }

    .collapse > .navbar .nav-item .nav-link:hover {
        transition: 0.4s ease-in-out;
        background-color: var(--birutua);
        color: var(--putih);
    }
</style>

<nav class="nav">
        <div class="container">
            <img src="/images/ambatubook.png" alt="logo" />
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

<script>
    document.addEventListener('scroll', () => {
        const header = document.querySelector('nav');

        if(window.scrollY > 0) {
            header.classList.add('scrolled');
        } else{
            header.classList.remove('scrolled');
        }
    });
</script>
