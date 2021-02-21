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
<!-- 21.02.2021  "main section" -->
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

    <section id = "name">
        <div class ="name c">
            <div >
                <h1>Hello, </h1>
                <h1> My name is </h1>
                <h1 >Arailym</h1>
            </div>
        </div>
        <div class="name c" id="photo">
            <img src="/img/prof.png" alt ="profil img" height="400px">
        </div>
    </section>
</div>
<!-- 21.02.2021 "end main section" -->
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
    .name{
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
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
    /*hero section*/
    .container{
        background-size: cover;
        background-position:  center;
        position: relative;
        z-index: 2;
        padding-left:8%;
        padding-right: 8%;
        box-sizing: border-box;
        height: 800px;
    }

    .container{
        background-image: url("/img/bckgr.jpg");
    }

    #name h1:nth-child(3){
        color: darkslateblue;
    }
    #name h1{
        display: block;
        width: fit-content;
        font-size: 5rem;
        position: relative;
        color: white;
        z-index: 1;
    }
    /*#name .name{
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 70px;
        justify-content: flex-start;
    }*/
    #name{
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        justify-content: start;
    }
    #photo{
        width: 15%;
        margin-left: 400px;
    }
    .name{
        float: top; /*Задаем обтекание*/
        width: 320px; /*Фиксируем ширину блока*/
        margin-right: 10px;
        text-align: left;
        margin-left: 50px;
    }
</style>
</body>
</html>
