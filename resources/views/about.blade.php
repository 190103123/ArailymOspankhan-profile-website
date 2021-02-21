<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY WEBSITE</title>
</head>
<body>

<div class="container">
    <div class="navbar">
        <img src="/img/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="main.html">MAIN</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
    </div>

<section id="about">
    <div class="about c">
        <div class="col-left">
            <div class="about-img">
                <img src="/img/photo.jpg" height="300px" alt="">
            </div>
        </div>
        <div class="col-rigth">
            <h1 class="section-title">ABOUT<span> ME</span></h1>
            <h2>Front End Developer</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn">Download Resume</a>
        </div>
    </div>
</section>
</div>

<section id="footer">
    <div class="footer c">
        <div class="brand"><h1><span>A</span>railym<span>O</span>spankhan</span></h1></div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
            <div class="social-item"><a href="#"><img src="/img/instt.png" height="33px" alt=""></a></div>
            <div class="social-item"><a href="#"><img src="/img/vkk.webp" height="36px" alt=""></a></div>
            <div class="social-item"><a href="#"><img src="/img/twit.png"" height="35px" alt=""></a></div>
        </div>
        <p>© Copyright 2021 | Powered by ArailymO</p>
    </div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap');* {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    html{
        font-size: 10px;
        font-family: 'Montserrat', sans-serif;
    }
    a{
        text-decoration: none;
    }
    .navbar{
        height: 12%;
        display: flex;
        align-items: center;
    }
    .logo{
        width: 70px;
        cursor: pointer;
    }
    nav{
        flex: 1;
        text-align: right;
        font-size:30px;
    }
    nav ul li{
        list-style: none;
        display: inline-block;
        margin-left: 60px;
    }
    nav ul li a{
        text-decoration: none;
        color: #fff;
        font-size: 16px;
    }
    span{
        color: white;
    }
    .container{
        background-size: cover;
        background-position: center;
        position: relative;
        z-index: 2;
        padding-left:8%;
        padding-right: 8%;
        box-sizing: border-box;
        height: 800px;
        background-image: url("/img/bckgr.jpg");
    }

    #about .about{
        display: flex;
        flex-direction: column-reverse;
        text-align: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px 20px;
    }
    #about .col-left{
        height: 360px;

    }
    #about .col-rigth{
        width: 100%;
    }
    #about .col-rigth h1{
       font-size: 2.5rem;
        font-weight: 500;
        letter-spacing: .2rem;
        margin-bottom: 10px;
        color: #1a202c;

    }
    #about .col-rigth h2{
        font-size: 1.8rem;
        color: #1a202c;
    }
    #about .col-rigth p{
        margin-bottom: 10px;
        margin-top: 10px;
        font-size: 14px;
        color: #1a202c;
    }

    .btn{
        display: inline-block;
        padding: 10px 30px;
        color: azure;
        background-color: transparent;
        border: 2px solid darkslateblue;
        font-size: 1.3rem;
        text-transform: uppercase;
        letter-spacing: .1rem;
        margin-top: 20px;
        margin-bottom: 40px;
    }
    #about .col-left .about-img{
        position: relative;

    }
    #about .col-left .about-img::after{
        content: '';
        position: absolute;
        left: 400px;
        top: 19px;
        height: 98%;
        width: 34%;
        border: 7px solid darkslateblue;
        z-index: -2;
    }

    #footer{
        background-image:linear-gradient(60deg, #29323c 0%, #485563 100%) ;
    }
    #footer .footer{
        min-height: 200px;
        flex-direction: column;
        padding-bottom: 10px;
        padding-top: 30px;
        text-align: center;
        justify-content: center;
    }
    .brand h1{
        font-size: 2rem;
        text-transform: uppercase;
        color: white;
    }
    .brand h1 span{
        color: darkslateblue;
    }
    #footer h2{
        color: white;
        font-weight: 500;
        font-size: 1.5rem;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    #footer .social-icon{
        display: flex;
        margin-bottom: 30px;
        justify-content: center;
    }
    #footer .social-item{
        margin: 0 7px;
    }
    #footer p{
        color: white;
        font-size: 1rem;
    }
    </style>
</body>
</html>
