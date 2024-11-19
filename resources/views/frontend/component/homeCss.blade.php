<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style-type: none;
    /* overflow-x: hidden; */
    scroll-behavior: smooth;

}
.navbar{
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 25px 70px;
    position: relative;
    box-shadow: 1px 1px 20px solid #333;
    background: white;
}
.navbar ul li a{
    color:black;
}
.nav ul li:last-child a{
    border:2px solid #0c476c;
    padding: 8px 16px;
    border-radius: 35px;
    margin-top: -10px;
    transition: .5s all;
}
.nav ul li:last-child a:hover{
    background: #0c476c;
    color: #fff;
}
.nav ul{
    display: flex;
    gap: 30px;
    justify-content: center;
    place-content: center;
}
.sign-login ul{
    display: flex;
    gap: 30px;
    width: 200px;
}
.sign-login ul li a{
    color: black;
}
.login{
    background-color: #0c476c;
    padding: 10px 20px;
    border-radius: 35px;
    margin-top: -10px;
}
.hamburger{
    display: none;
}
.hamburg{
    color: black;
    font-size: 21px;
    display: none;
}
.cross{
    color: black;
    font-size: 25px;
    display: none;
}
.landing_page{
    width: 90vw;
    padding: 20px 30px;
    border: 2px solid #0c476c;
    margin: auto;
    border-radius: 20px;
    position: relative;
    height: 500px;
     margin-bottom: 30px;
}
span{
    color: #0c476c;
}
.paragraph h1{
    font-size: 40px;
}
.paragraph{
    border: 2px solid #0c476c;
    width: 500px;
    padding: 50px 50px;
    border-radius: 15px 0px 35px 15px;
    background: white;
}
.paragraph p{
    text-align: justify;
}
.landing_page img{
    position: absolute;
    right: 10px;
    top: 20px;
    width: 700px;
    height: 400px;
    z-index: -1;
    bottom: 10px;
    border-radius: 20px;
}

.protect{
    padding-top: 50px;
    width: 90vw;
    margin: auto;
    margin-bottom: 50px;
    overflow-x: hidden;
}
.protect h1{
    font-size: 35px;
}
.protect p{
    text-align: justify;
    width: 75vw;
}
.card-sections{
    width: 90vw;
    height: auto;
    border: 2px solid #0c476c;
    margin-top: 50px;
    border-radius: 20px;
    padding: 50px 30px;
}
.card-sections .card-child{
    width: 450px;
    border: 2px solid black;
    height: 170px;
    border-radius: 20px;
    padding: 10px 20px;
    background: #0c476c;
    box-shadow: 1px 1px 10px #333;
}
.card-sec1{
    display: flex;
    justify-content: space-between;
}.card-sec2{
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
}
.card-child p{
    width: 400px;
    padding-top: 10px;
    color: white;
}
.font-heading{
    display: flex;

}
.card-sections .card-child2{
    width: 450px;
    border: 2px solid black;
    height: 170px;
    border-radius: 20px;
    padding: 10px 20px;
    background: #0c476c;
    box-shadow: 1px 1px 10px #333;
}
.card-child2 p{
    width: 400px;
    padding-top: 10px;
    color: white;
}
.font-heading h2{
    font-size: 22px;
    color: #fff;
    padding-left: 25px;
}
.font-heading .font{
    box-shadow: 1px 1px 10px #ffff;
    border-radius: 50%;
}
.font-heading .font img{
    padding: 5px 5px;
    border-radius: 50%;
    background: #ffff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
.question-sec{
    padding-top: 50px;
    width: 90vw;
    margin: auto;
    margin-bottom: 50px;
    overflow-x: hidden;
}
.question-sec h1{
    font-size: 35px;
}
.footer{
    justify-content: center;
    text-align: center;
    padding-top: 50px;
}
footer .nav-footer ul{
    display: flex;
    gap: 30px;
    text-align: center;
    justify-content: center;
    padding-top: 30px;
}
footer .nav-footer ul li a{
    color: black;
}
.contact{
    border-top: 2px solid #0c476c;
    border-bottom: 2px solid #0c476c;
    padding: 20px;
    width: 90vw;
    margin: auto;
}
.contact a{
    padding-left: 10px;
    color: black;
}
.copyright{
    width: 90vw;
    border-radius: 35px;
    border: 2px solid #0c476c;
    margin: auto;
    margin-top: 30px;
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
    margin-bottom: 30px;
}
.copyright .social a{
    background: #0c476c;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 8px 10px;
    border-radius: 50%;

    font-size: 20px;

}


/* ------------Animation-sec--------------- */

.landing-anim{
    opacity: 0;
    transition: all 1s;
    transform: scale(0.1);
}
.show-class2{
    opacity: 1;
    transform: scaleX(1);

}

.card1{
    opacity: 0;
    transition: all 1s;
    transform: translateX(-50%);
}
.show-class{
    opacity: 1;
    transform: translateX(0);
}
.card2{
    opacity: 0;
    transition: all 1s;
    transform: translateX(50%);
}
.show-class1{
    opacity: 1;
    transform: translateX(0);
}

@media screen and (max-width:991px) and (min-width:768px) {
    .navbar{
        padding-right: 10px;
    }
    .landing_page img{
        width: 600px;
    }
    .card-sec1{
        flex-direction: column;
        margin: auto;
    }.card-sec2{
        flex-direction: column;
        margin-top: 0;
        margin: auto;
    }
    .card-sections{
        height: auto;
        padding: 50px 10px;
    }
    .card-sections .card-child{
        margin: auto;
        margin-top: 30px;
    }
    .card-sections .card-child2{
        margin: auto;
        margin-top: 30px;
    }
}

@media (max-width:767px){
    .navbar{
        padding-left: 15px;
        padding-right: 15px;
    }
    .nav .mble{
        display: none;
    position: absolute;
    left: 0;
    right: 0;
    top: 80px;
    flex-direction: column;
    text-align: center;
    gap: 0;
    z-index: 9999999;
    background: white;
    }
    .nav ul li{
        padding: 20px;
        transition: .5s ease;
    }
    .hamburger{
        display: flex;
    }
    .hamburg{
        display: flex;
    }
    .nav ul li:last-child{
        padding-top: 20px;
        border: none;
    }
    .landing_page .paragraph{
        width: 70vw;
        padding: 20px 20px;
        margin: auto;
        background: transparent;
        color: white;

    }
    .landing_page{
        height: 350px;
    }
    .landing_page img{
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;

    }
    .paragraph h1{
        font-size: 32px;
    }
    .protect p{
        width: 90vw;
    }
    .card-sec1{
        flex-direction: column;
    }.card-sec2{
        flex-direction: column;
        margin-top: 0;
    }
    .card-sections{
        height: auto;
        padding: 50px 10px;
    }
    .card-sections .card-child{
        width: 300px;
        margin: auto;
        height: auto;
        margin-top: 20px;
    }
    .card-sections .card-child2{
        width: 300px;
        margin: auto;
        height: auto;
        margin-top: 20px;
    }
    .card-child p{
        width: 250px;
    }
    .card-child2 p{
        width: 250px;
    }
    .contact a{
        display: block;
        padding-top: 10px;
        text-align: justify;
    }
    .copyright{
        flex-direction: column;
        justify-content: center;
        text-align: justify;
        padding-top: 20px;
        border-radius: 20px;
    }
    .copy{
        margin-top: 20px;
    }
    .privacy{
        margin-top: 20px;
    }

}
@media (max-width:320px){
    .navbar{
        padding-left: 15px;
        padding-right: 15px;
    }
    .nav .mble{
        display: none;
    position: absolute;
    left: 0;
    right: 0;
    top: 80px;
    flex-direction: column;
    text-align: center;
    gap: 0;
    z-index: 9999999;
    background: white;
    }
    .nav ul li{
        padding: 20px;
        transition: .5s ease;
    }
    .hamburger{
        display: flex;
    }
    .hamburg{
        display: flex;
    }
    .nav ul li:last-child{
        padding-top: 20px;
        border: none;
    }
    .landing_page .paragraph{
        width: 70vw;
        padding: 20px 10px;
        margin: auto;
        background: transparent;
        color: white;

    }
    .landing_page{
        height: 350px;
    }
    .landing_page img{
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        top: 0;

    }
    .paragraph h1{
        font-size: 32px;
    }
    .protect p{
        width: 90vw;
    }

    .card-sections{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        width: 100%;

    }
    .card-sections .card-child{
        width: 95%;

        height: auto;
        margin-top: 15px;
    }
    .card-sections .card-child2{
        width: 95%;

        height: auto;
        margin-top: 15px;
    }
    .card-child p{
        width: 100%;
    }
    .card-child2 p{
        width: 100%;
    }
    .contact a{
        display: block;
        padding-top: 10px;
        text-align: justify;
    }
    .copyright{
        flex-direction: column;
        justify-content: center;
        text-align: justify;
        padding-top: 20px;
        border-radius: 20px;
    }
    .copy{
        margin-top: 20px;
    }
    .privacy{
        margin-top: 20px;
    }

}
</style>
