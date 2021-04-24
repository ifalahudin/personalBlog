@extends('layout.main')

@section('style')
    <style>
    
    .border-left{
        border-left: 2px solid #757575;
    }
    .border-right{
        border-right: 2px solid #757575;
    }
    li{
        cursor: pointer;
    }
    .align-right{
        text-align: right;
    }
    a{
        text-decoration:none;
        padding: 20px;
    }
    .navbar-brand{
        padding: 0px;
    }
    hr{
        width: 40%;
    }
    .border-right{
        border-right: 1px solid whitesmoke;
    }
    /* .btn{
        color: #52616a;
        border: 1px solid #52616b;
        background: linear-gradient(120deg,#52616b,#c9d6df,#c9d6df,#52616b);
        background-size: 200%;
        transition: .5s;
    }
    .btn-outline-secondary:hover{
        background-position: right;
    } */

    .animated-button.victoria {
	    border: 2px solid #D24D57;
    }
    .animated-button.victoria:after {
	    background: #D24D57;
	    -moz-transform: translateX(-50%) translateY(-50%) rotate(25deg);
	    -ms-transform: translateX(-50%) translateY(-50%) rotate(25deg);
	    -webkit-transform: translateX(-50%) translateY(-50%) rotate(25deg);
	    transform: translateX(-50%) translateY(-50%) rotate(25deg);
    }


    #majalah-slide{
        max-width: 60%;
        margin: 0 auto;
    }
    #content-picture:hover{
        background-color: #c9d6df;
        display: fit-content;
        border-radius: .25rem;
        padding: 40px;
        box-shadow: 5px 5px 5px 5px rgba(65, 65, 65, 0.25);
        transform: scale(1.09);
        transition: 0.25s;
    }
    #content-picture > hr:hover{
        border-top: 1px solid #c9d6df;
    }


    /* change color */
    .fa-instagram-square:hover{
        transition: 0.5s ease;
        color: #527fa4;
    }
    .fa-facebook-square:hover{
        transition: 0.5s ease;
        color: #3b5998;
    }
    .fa-twitter-square:hover{
        transition: 0.5s ease;
        color: #00aced;
    }

    /*scrollbar */
    ::-webkit-scrollbar {
        width: 0px;
    }


    /* Card RGB border */
    .card:before,
    .card:after{
        content: '';
        position: absolute;
        top: 0px;
        left: 0px;
        background: linear-gradient(45deg,#fb0094,#0000ff,#00ff00,#ffff00,#ff0000,#fb0094,#0000ff,#00ff00,#ffff00,#ff0000);
        background-size: 700%;
        width: calc(100% + 1px);
        height: calc(100% + 1px);
        z-index: -1 !important;
        animation: animate 30s linear infinite;
    }
    .card:after{
        filter: blur(20px);
    }
    @keyframes animate{
        0%, 100%{
            background-position: 0 0;
        }
        50%{
            background-position: 500% 0;
        }
    }
    </style>
@endsection

@section('container')
    <div class="container-fluid" style="color: #c9d6df; background-color: #709fb0; margin-bottom: 0%;">
        <div class="p-5" id="content" style="margin-bottom: 0px;">
            <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center">
                <h2>About me</h2>
                <p>
                    Hai! My name is Fajrul Falahudin Rasyid, I'm 20, collage students in AMIKOM Yogyakarta University, Bachelor
                    degree in Informatics, I'm interest in Front End Web Development and Design graphics.
                </p>
    
                <hr style="width: 30%; color: #c9d6df;">
    
                more info : <br>
    
                <a href="/about" class="btn btn-outline-secondary animated-button victoria" role="button" aria-pressed="true">Click me!</a>
                </div>
            </div>
    
            <br><br>
    
            <div class="row my-3">
                <div class="col-sm-4 text-center" id="content-picture">
                <img src="https://1.bp.blogspot.com/-QG1x97R8hLY/YH00QEckQ0I/AAAAAAAADTw/hfB4WhDPk2EMSK-9dl6qxG8J4XEdJfOJgCLcBGAsYHQ/s0/3.png" alt="pict-3" width="50%">
                <br><br>
                <h3>College Student</h3>
                <hr>
                AMIKOM Yogyakarta University
                </div>
                <div class="col-sm-4 text-center" id="content-picture">
                <img src=" https://1.bp.blogspot.com/-BZ2gFI23aNc/YH00QZZyykI/AAAAAAAADT0/y6A9JgR_eHQ-kiSEmdGedUJyccUWQ9QcACLcBGAsYHQ/s0/4.png" alt="" width="50%">
                <br><br>
                <h3>Programming</h3>
                <hr>
                HTML5 | CSS3 | PHP | etc.
                </div>
                <div class="col-sm-4 text-center" id="content-picture">
                <img src="https://1.bp.blogspot.com/-BZ2gFI23aNc/YH00QZZyykI/AAAAAAAADT0/y6A9JgR_eHQ-kiSEmdGedUJyccUWQ9QcACLcBGAsYHQ/s0/4.png" alt="" width="50%">
                <br><br>
                <h3>Photography</h3>
                <hr>
                Creating best picture ever
                </div>
            </div>
    
            <br><br>
    
            <div class="row">
                <div class="col-sm-12 p-5 text-center">
                <h1>Creation</h1>
                <p>
                    Here some creation that i ever made when i'm in college as the result of my hobby and assingnment in class
                </p>
    
                <hr style="width: 30%; color: #c9d6df;">
    
                Check my portfolio : <br> <br>
    
                <a href="/portfolio" class="btn btn-outline-secondary" role="button" aria-pressed="true">Click me!</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                <div class="card-group">
                    <div class="card mx-3">
                    <div id="carouselExampleIndicators" class="carousel slide card-img-top mx-auto" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://1.bp.blogspot.com/-RdGP6bXXqRM/YH00op3qQ9I/AAAAAAAADUo/LfSeSpoXmQkh_dkKrLNBxfWC5Rb1-jcIQCLcBGAsYHQ/s16000/1.jpg" class="d-block w-100" alt="pict-1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://1.bp.blogspot.com/-pHCNeQIRkoA/YH00o19_m7I/AAAAAAAADUs/CSGRFCDQ-fIocVjH1oAi1ktAN48kn26kwCLcBGAsYHQ/s16000/2.JPG" class="d-block w-100" alt="pict-2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://1.bp.blogspot.com/-RdGP6bXXqRM/YH00op3qQ9I/AAAAAAAADUo/LfSeSpoXmQkh_dkKrLNBxfWC5Rb1-jcIQCLcBGAsYHQ/s1024/1.jpg" class="d-block w-100" alt="pict-3">
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Photography</h5>
                        <p class="card-text">Some picture above are taken by my self.</p>
                    </div>
                    </div>
                    <div class="card mx-3">
                    <div id="carouselExampleIndicators" class="carousel slide mx-auto card-img-top" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img-majalah/1.jpg" class="d-block w-100" alt="pict-1" id="majalah-slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img-majalah/2.jpg" class="d-block w-100" alt="pict-2" id="majalah-slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img-majalah/4.jpg" class="d-block w-100" alt="pict-3" id="majalah-slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img-majalah/6.jpg" class="d-block w-100" alt="pict-4" id="majalah-slide">
                        </div>
                        <div class="carousel-item">
                            <img src="img-majalah/8.jpg" class="d-block w-100" alt="pict-5" id="majalah-slide">
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Magazines</h5>
                        <p class="card-text">Call it LENS, this is me and my team build this magazine that contain about
                        photography and technique
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <hr>
        </div>
    </div>
@endsection