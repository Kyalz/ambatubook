
    <style>
        .carousel {
            position: relative;
            width: 90%;
            margin: auto;
            overflow: hidden;
            border-radius: 20px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        .slide img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            
        }

        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            background: rgba(0,0,0,0.5);
            color: white;
            border: none;
            padding: 0 15px;
            cursor: pointer;
        }

        .prev { left: 0; }
        .next { right: 0; }
    </style>

    <div class="carousel">
        <div class="slides" id="slideContainer">
            <div class="slide"><img src="/images/laut-banner-.jpg" alt="Buku 1"></div>
            <div class="slide"><img src="/images/download (7).jpeg" alt="Buku 2" height="300" width="auto"></div>
            <div class="slide"><img src="/images/bluelock-banner.jpg" alt="Buku 3"></div>
        </div>

        <button class="nav-button prev" onclick="prevSlide()">&#10094;</button>
        <button class="nav-button next" onclick="nextSlide()">&#10095;</button>
    </div>

    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const slides = document.getElementById('slideContainer');
            const totalSlides = slides.children.length;

            if (index < 0) {
                currentIndex = totalSlides + 1;
            } else if (index >= totalSlides) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        // Auto-slide every 5 seconds
        setInterval(() => {
            nextSlide();
        }, 3000);
    </script>