<html>

<head>
    <title>Internet banking</title>
    <style>
        h1 {
            font-size: 70px;
            text-align: center;
            margin-bottom: 10px;
            color: rgb(156, 66, 2);
            font-family: 'Times New Roman', Times, serif;
        }

        h1,
        p.ba {
            padding: 0px;
            margin: -10px;
        }
        
        #element1 {
            float:center;
        }

        #element2 {
            float: left;
        }
        .center{
            display:block;
            margin-left: auto;
            margin-right: auto;
            width:40%;
        }

        .container {
    position: relative;
    padding-top: 30px;
    ;
}

.container .wrapper {
    width: 100vw;
    height: 70vh;
    border: 0px solid black;
    margin: 5rem auto;
    overflow: hidden;
    box-shadow: 1px 2px 30px rgba(0, 0, 0, 0.4);
}

.container .slider-holder {
    display: grid;
    grid-template-columns: repeat(5, 100%);
    height: 100%;
    animation: slide 25s ease infinite;
}

.container #img1 {
    background-color: antiquewhite;
    background: url(ba1.jpg);
    background-size: contain;

}

.container #img2 {
    background-color: cadetblue;
    background: url(ba2.jpg);
    background-size: contain;
}

.container #img3 {
    background-color: darkslategray;
    background: url(ba4.jpeg);
    background-size: contain;
}

.container #img4 {
    background-color: chocolate;
    background: url(p1.jpeg);
    background-size: contain;
}

.container #img5 {
    background-color: aliceblue;
    background: url(p2.jpeg);
    background-size: contain;
}

.container .button-holder {
    position: absolute;
    bottom: 0%;
    left: 45%;
}

.container .button-holder .dots {
    display: inline-block;
    height: 15px;
    width: 15px;
    border-radius: 3rem;
    background-color: rgba(136, 130, 130, 0.737);
    margin: .4rem .3rem;
}
.aa{
             padding-left: 1200px;
             
        }

@keyframes slide {
    0% {
        transform: translateX(0%);
    }

    10% {
        transform: translateX(-100%);
    }

    20% {
        transform: translateX(-100%);
    }

    30% {
        transform: translateX(-200%);
    }

    40% {
        transform: translateX(-200%);
    }

    50% {
        transform: translateX(-300%);
    }

    60% {
        transform: translateX(-300%);
    }

    70% {
        transform: translateX(-400%);
    }

    80% {
        transform: translateX(-400%);
    }

    90% {
        transform: translateX(0%);
    }

    100% {
        transform: translateX(0%);
    }
}
    </style>
</head>

<body style="background-image:url('bg.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div id="element2">
        <img src="symbol.jpg" style="width:90px;">
    </div>
    <div id="element1">
    <h1>BOS</h1>
    <p class="ba" style="text-align:center; font-size:25px;"> Bank of Swiss</p>
    </div>
    <hr>


    <form style="text-align:center;">
        <p style="font-size:30px;"><u>Send money</u>
            <a href="thirdpage.php">
                <input type="button" value="click here" style="width:130px; height:38px; font-size:25px;" />
            </a>
            <br><br>
            <u>Transaction history</u> <a href="transaction.php"> <input type="button" value="click here"
                    style=" width:130px; height:38px; font-size:25px;" />
            </a>
        </p>

        <br><br>
    </form>
    <a href="loginsanni.php">

        <input type="submit" value="Go back" />
    </a>
    <div class="container">
        <div class="wrapper">
            <div class="slider-holder">
                <div id="img1"></div>
                <div id="img2"></div>
                <div id="img3"></div>
                <div id="img4"></div>
                <div id="img5"></div>
            </div>
        </div>
        <div class="button-holder">
            <a href="#img1" class="dots"></a>
            <a href="#img2" class="dots"></a>
            <a href="#img3" class="dots"></a>
            <a href="#img4" class="dots"></a>
            <a href="#img5" class="dots"></a>
        </div>
    </div>
    <hr>
    <div class="aa">
        <ul>
            <b>
        <li> email_id : sankethoppo@gmail.com </li>
        <li> contact us: 8904949728 </li>
            </b>
        </ul>
    </div>




</body>
    

</html>