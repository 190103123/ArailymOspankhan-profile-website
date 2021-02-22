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
                <li><a href="{{ route('main') }}">MAIN</a></li>
                <li><a href="{{ route('about') }}">ABOUT</a></li>
                <li><a href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </div>

    <section id="contact">
        <div class="contact c">
            <div><h1 class="section-title">Contact <span>info</span></h1></div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="/img/phone.png" height="40px" alt=""></div>
                    <div class="contact-info"></div>
                    <h1>Phone</h1>
                    <h2>+7 707 568 22 58</h2>
                    <h2>+7 707 568 22 85</h2>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="/img/mail.png" height="40px" alt=""></div>
                    <div class="contact-info"></div>
                    <h1>E-mail</h1>
                    <h2>smbdy@gmail.com</h2>
                    <h2>info@gmail.com</h2>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="/img/address.png" height="40px" alt=""></div>
                    <div class="contact-info"></div>
                    <h1>Address</h1>
                    <h2>Almaty</h2>
                    <h2>Kazakhstan</h2>
                </div>
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
        span{
            color: white;
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
        .section-title{
            font-size: 3.8rem;
            letter-spacing: 5px;
            margin-top: 100px;
        }
        #contact .contact{
            display: table;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        #contact .contact-items{
            width: 1000px;
            display: flex;
            margin-top: 100px;
        }
        #contact .contact-item{
            width: 80%;
            padding: 20px;
            text-align:  center;
            border-radius: 10px;
            margin:30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0px 0px 18px 0 black;
        }
        #contact .icon{
            width: 70px;
            margin: 0 auto;
            margin-bottom: 10px;
        }
        #contact .contact-info h1{
            font-size: 2.5rem;
            font-weight: 500;
            margin-bottom: 5px;
        }
        #contact .contact-info h2{
            font-size: 1.3rem;
            font-height:

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
