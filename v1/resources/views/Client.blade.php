<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Djalie Djalie</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">Djalie Djalie</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vendor">vendor</a>
        <a href="#clients">clients</a>
        <a href="#team">team</a>
        <a href="#blog">blog</a>
        <a href="#contact">contact</a>
        
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span>wedding planner Djalie Djalie</span>
        <h3>we make every moment special!</h3>
        <a href="#" class="btn">learn more</a>
    </div>

</section>

<!-- home section ends -->

<!-- client section starts  -->

<section class="clients" id="clients">

    <div class="heading">
        <h1>our previous clients</h1>
        <img src="images/header-img.png" alt="">
    </div>

    <div class="row">

        <div class="box-container">
            <div class="box">
                <img src="images/latarbelakang.jpg" alt="">
                <div class="info">
                    <h3>01. Hafiz & Rima </h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>
                </div>
            </div>
            <div class="box">
                <img src="images/client-2.jpg" alt="">
                <div class="info">
                    <h3>02. nasir & tamima</h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>
                </div>
            </div>
        </div>

        <img src="images/divider.png" class="divider" alt="">

        <div class="box-container">
            <div class="box">
                <div class="info">
                    <h3>03. tamim & ayesha</h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>
                </div>
                <img src="images/client3.jpg" alt="">
            </div>
            <div class="box">
                <div class="info">
                    <h3>04. mushfiqur & Jannatul Mondi</h3>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo aut repudiandae nihil quidem perspiciatis natus placeat, inventore, vitae, quia totam ad dolores velit. Cumque, alias ullam. Nihil, aperiam hic! <i class="fas fa-quote-right"></i> </p>
                </div>
                <img src="images/client-4.jpg" alt="">
            </div>
        </div>

    </div>

</section>

<!-- client section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="heading">
        <h1>contact us</h1>
        <img src="images/header-img.png" alt="">
    </div>

    <form action="{{ route('message.store') }}" method="post" class="contact-form">
        @csrf
        <a href="https://www.instagram.com/sanggarrias_djaliedjalie" target="" style="margin-bottom: 20px; margin-right: 10px; display: inline-block;">
            <img src="images/ig.png" alt="Instagram Logo" style="width: 50px; height: 50px;">
        </a>
        <a href="https://wa.me/0818198264" target="_blank" style="margin-bottom: 10px; display: inline-block;">
            <img src="images/whatsapp.png" alt="WhatsApp Logo" style="width: 50px; height: 50px;">
        </a>

        <div class="inputBox">
            <input type="text" placeholder="your name" name="name">
            <input type="email" placeholder="your email" name="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number" name="phone">
            <input type="text" placeholder="your address" name="address">
        </div>
        <textarea placeholder="say something" name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn" name="send">
    </form>
    
</section>

<!-- contact section ends -->



<!-- footer section  -->

<div class="footer"> created by <span>Djalie Djalie</span> | all rights reserved! </div>



<script> 

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}

</script>


</body>
</html>