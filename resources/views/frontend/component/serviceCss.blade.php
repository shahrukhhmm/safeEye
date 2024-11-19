<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style-type: none;
    /* overflow-x: hidden; */

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
.login a{
    background-color: #0c476c;
    padding: 10px 20px;
    border-radius: 35px;
    margin-top: -10px;
    border: 2px solid #333;
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
.landing{
    justify-content: center;
    margin: auto;
    background: #0c476c;
    border: 2px solid #333;
    height: 500px;
    position: relative;
    width: 90vw;
    border-radius: 20px;
}
.landing img{
    width: 70vw;
    display: flex;
    justify-content: center;
    margin: auto;
    text-align: center;
    height: auto;
    border-radius: 20px;
    position: absolute;
    left: 11%;
    top: 70px;

}
.landing h1{
    color: #fff;
    font-size: 40px;
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
    margin: auto;
    margin-top: 10px;
}
.services{
    width: 90vw;
    margin: auto;
    border: 2px solid #333;
    padding: 30px 60px;
    border-radius: 20px;
    background-color: #0c476c;
    position: relative;
    top: 180px;
}
.services h1{
    color: #fff;
    padding-bottom: 15px;
    display: flex;
    justify-content: center;
    text-align: center;
}
.services p{
    color: #fff;
    text-align: justify;
}
.services a{
    color: #fff;
    background: #0c476c;
    border: 2px solid #333;
    border-radius: 35px;
    padding: 10px 20px;
    font-size: 18px;
    margin-top: 30px;
    transition: .5s all;
    margin-bottom: 50px;
    float: right;
    margin-top: 50px;
    margin-bottom: 100px;

}
.services a:hover{
    color: #0c476c;
    background: #fff;
}
.footer{
    justify-content: center;
    text-align: center;
    padding-top: 50px;
    margin-top: 250px;
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
/* ------------animation section--------------- */

.card1{
    opacity: 0;
    transition: all 1s;
    transform: scale(0.1);
}
.show-class{
    opacity: 1;
    transform: scale(1);
}
.card2{
    opacity: 0;
    transition: all 2s;
    transform: translateX(-50%);
}
.show-class1{
    opacity: 1;
    transform: translateX(0);
}
.landing-anim{
    opacity: 0;
    transition: all 1s;
    transform: scale(0.1);
}
.show-class2{
    opacity: 1;
    transform: scaleX(1);

}


@media screen and (max-width:991px) and (min-width:768px) {
    .navbar{
        padding-right: 10px;
    }
}

@media (max-width:767px) {
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
    .landing{
        height: 200px;
    }
    .services{
        padding: 20px 10px;
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
@media (max-width:320px) {
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
    .landing{

        height: 200px;
    }
    .services{
        padding: 20px 10px;
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
    .landing h1{
        font-size: 30px;
    }
   .services{
    top: 100px;
   }
}
</style>
