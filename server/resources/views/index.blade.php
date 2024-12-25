<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Djalie-Djalie</title>
    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/js/app.js'])
</head>

<body>
    <header class="header" id="header">
        <a href="#"><img src="./storage/logo.png" class="logo" id="navbar-logo" alt="Djalie Djalie"></a>
        <nav class="navbar">
            <ul>
                <li><a class="nav-link" href="#home">home</a></li>
                <li><a class="nav-link" href="#about">about</a></li>
                <li><a class="nav-link" href="#services">services</a></li>
                <li><a class="nav-link" href="#plans">pricing</a></li>
                <li><a class="nav-link" href="#gallery">gallery</a></li>
                <li><a class="nav-link" href="#contact">contact</a></li>
            </ul>
        </nav>

        <div class="icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <i class="fas fa-bars" id="menu"></i>
        </div>
    </header>
    <!-- header end -->

    <!-- home section -->
    <section class="home" id="home">
        <div class="content">
            <img src="./storage/logo-white.png" class="logo" alt="Djalie Djalie">
            <h1>Where your forever begins</h1>
            <a href="#" class="btn">Consult with us</a>
        </div>
    </section>
    <!-- home end -->

    <!-- about section -->
    <section class="about" id="about">
        <h2 class="heading">about us</h2>
        <div class="row">
            <div class="content">
                <h3>DJALIE - DJALIE</h3>
                <p>
                    Based in Jakarta, we are a wedding organizer dedicated to crafting celebrations that
                    reflect the unique love stories of our clients. With a passion for creating unforgettable moments,
                    we specialize in turning your wedding dreams into reality. Whether you envision an intimate
                    gathering or a grand celebration, our team is committed to ensuring every detail is flawless,
                    allowing you to focus on cherishing every moment of your special day.
                </p>
            </div>

            <div class="image">
                <img src="./storage/about.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- services section -->
    <section class="services" id="services">
        <h2 class="heading">our services</h2>
        <div class="box-container">
            <div class="box">
                <img src="./storage/services1.jpg" alt="">
                <h4>Makeup</h4>
                <p>Our professional makeup artists specialize in creating timeless, elegant looks for your big day.
                    Whether you prefer a natural glow or a glamorous finish, we ensure you’ll look and feel stunning
                    throughout your celebration.</p>
            </div>
            <div class="box">
                <img src="./storage/services2.jpg" alt="">
                <h4>Decorations</h4>
                <p>Transform your wedding venue into a breathtaking setting with our decoration services. From floral
                    arrangements to custom themes, we bring your vision to life, creating unforgettable moments for you
                    and your guests.</p>
            </div>
            <div class="box">
                <img src="./storage/services3.jpg" alt="">
                <h4>Photography</h4>
                <p>Capture the magic of your special day with our expert photography team. From candid moments to
                    artistic portraits, we ensure every precious memory is beautifully preserved for a lifetime.</p>
            </div>
        </div>
        <a href="#" class="btn">Consult Now</a>
    </section>
    <!-- services end -->

    <!-- plans -->
    <section class="plans" id="plans">
        <h2 class="heading">plans</h2>

        <div class="box-container">

            <div class="box">
                <h4 class="title">Home Package 1</h4>
                <h5 class="description">Perfect for small areas</h5>
                <h4 class="price"><span>IDR</span><b class="currency">16500000</b></h4>
                <ul>
                    <li>3-5 meters altar + a set of chairs for the bridal couple</li>
                    <li>Fresh flowers</li>
                    <li>Bridal couple Makeup for reception and ceremony</li>
                    <li>2 sets of wedding outfits</li>
                    <li>Makeup + clothes for the mother (2 pcs)</li>
                    <li>Full outfit for the father (2 pcs)</li>
                    <li>Draped canopy tent (75 meters)</li>
                    <li>Plates, spoons, forks (150 sets)</li>
                </ul>
                <a href="#"><button class="btn">Consult</button></a>
            </div>
            <div class="box">
                <h4 class="title">Home Package 2</h4>
                <h5 class="description">Perfect for medium sized areas</h5>
                <h4 class="price"><span>IDR</span><b class="currency">18900000</b></h4>
                <ul>
                    <li>4-6 meters altar + a set of chairs for the bridal couple</li>
                    <li>Fresh flowers</li>
                    <li>Bridal couple Makeup for reception and ceremony</li>
                    <li>2 sets of wedding outfits</li>
                    <li>Makeup + clothes for the mother (2 pcs)</li>
                    <li>Full outfit for the father (2 pcs)</li>
                    <li>Wedding tent (100 meters)</li>
                    <li>Plates, spoons, forks (200 sets)</li>
                </ul>
                <a href="#"><button class="btn">Consult</button></a>
            </div>
            <div class="box">
                <h4 class="title">Venue Package</h4>
                <h5 class="description">Perfect for ballrooms and big open areas</h5>
                <h4 class="price"><span>IDR</span><b class="currency">30000000</b></h4>
                <ul>
                    <li>6-8 meters Modern altar</li>
                    <li>Fresh flowers</li>
                    <li>Bridal couple Makeup for reception and ceremony</li>
                    <li>2 sets of wedding outfits + accessories</li>
                    <li>Makeup + clothes for the mother (2 pcs)</li>
                    <li>Full outfit for the father (2 pcs)</li>
                    <li>Stage + Aisle carpet</li>
                    <li>Guest table flowers + gazebo</li>
                </ul>
                <a href="#"><button class="btn">Consult</button></a>
            </div>
        </div>
    </section>
    <!-- plans end -->

    <!-- gallery -->
    <section class="gallery" id="gallery">
        <h2 class="heading">gallery</h2>
        <div class="swiper swiper1">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 7; $i++)
                    <div class="swiper-slide">
                        <img src="./storage/makeup{{$i}}.jpg" />
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- team -->
    <section class="team" id="team">
        <h2 class="heading">our team</h2>
        <div class="box-container">
            @for ($i = 1; $i <= 3; $i++)
                <div class="box">
                    <img src="./storage/team{{$i}}.jpg" alt="">
                    <h3>john doe</h3>
                    <p>wedding planner</p>
                </div>
            @endfor
        </div>
    </section>
    <!-- team end -->

    <!-- contact -->
    <section class="contact" id="contact">
        <h2 class="heading">contact us</h2>
        <form action="">
            <div class="inputBox">
                <input type="text" name="name" placeholder="Full Name">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="inputBox">
                <input type="number" name="phone" placeholder="Phone Number">
                <select name="service">
                    <option value="" disabled selected>Select service</option>
                    <option value="makeup">makeup</option>
                    <option value="decoration">decoration</option>
                    <option value="photography">photography</option>
                </select>
            </div>

            <div class="inputBox">
                <textarea name="message" cols="30" rows="10" placeholder="Your message..."></textarea>
            </div>

            <a href="#" class="btn">send message</a>
        </form>
    </section>
    <!-- contact end -->

    <!-- footer -->
    <footer class="footer">
        <div class="box-container">
            <!-- <div class="box">
                <img src="storage/logo.png" class="logo" id="footer-logo" alt="Djalie Djalie">
            </div> -->
            <div class="box">
                <h3>contact us</h3>
                <a href="#"><i class="fas fa-phone"></i>+62-1234-5678-900</a>
                <a href="#"><i class="fab fa-whatsapp"></i>+62-1234-5678-900</a>
                <a href="#"><i class="fas fa-envelope"></i>info@djaliedjalie.com</a>
                <a href="#"><i class="fas fa-map"></i>Jl. H. Nurisan, <br />Jakarta Selatan, DKI Jakarta, Indonesia</a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"><i class="fas fa-chevron-right"></i>makeup</a>
                <a href="#"><i class="fas fa-chevron-right"></i>decoration</a>
                <a href="#"><i class="fas fa-chevron-right"></i>photography</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-instagram"></i>@djaliedjalie</a>
            </div>
        </div>
        <div class="credits">&copy;
            <script>document.write(/\d{4}/.exec(Date())[0])</script>
            <span>Djalie Djalie.</span> All Rights Reserved
        </div>
    </footer>
    <!-- footer end -->


    <!-- scripts -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var opt = {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            }
        }
        var swiper = new Swiper(".swiper1", opt);
        var swiper = new Swiper(".swiper2", opt);
    </script>

    @vite(['resources/js/index.js'])
</body>

</html>