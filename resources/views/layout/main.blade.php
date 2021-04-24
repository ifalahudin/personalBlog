<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- CSS Lokal -->
    {{-- <link rel="stylesheet" href="main.css" type="text/css"> --}}

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/9036c6a07c.js" crossorigin="anonymous"></script>

    <!-- Icon title -->
    <link rel="icon" href="https://1.bp.blogspot.com/-wqaa27EB7T4/YH00PtJeS6I/AAAAAAAADTo/nCj2NxGV4tsVa9tBK0ERLZ-iPIlAT6YpACLcBGAsYHQ/s0/1.png" type="image/icon type">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <title>Personal Blog</title>

    @yield('style')
    <style>
        body{
            color: #4a47a3;
            font-family: 'Ubuntu', sans-serif;
            /* background-color:#709fb0; */
            background-image: url(https://1.bp.blogspot.com/-d_zBLs7nSwo/YH00RyMTCsI/AAAAAAAADUE/foYYVTcDWCk2ypwFQiW-wGQvB3dnNBjLACLcBGAsYHQ/s0/bg1.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0;
            margin: 0;
        }
            
        #header{
            min-height: 830px;
        }
        li{
            cursor: pointer;
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
            text-align: center;
        }
        .bg-dark{
            transition: 500ms ease;
            color: #f0f5f9;
            background: transparent !important;
        }
        .bg-dark.scrolled{
            background: #52616b !important;
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
    </style>

</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://1.bp.blogspot.com/-wqaa27EB7T4/YH00PtJeS6I/AAAAAAAADTo/nCj2NxGV4tsVa9tBK0ERLZ-iPIlAT6YpACLcBGAsYHQ/s0/1.png" width="30" height="30" class="d-inline-block align-top rounded " alt="icon">
                Personal Blog
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/" active-color="orange">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about" active-color="green">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio" active-color="blue">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" active-color="red">
                            Articles
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="" onclick="article1()">Web Development</a>
                            <a class="dropdown-item" href="" onclick="article2()">Front-end Development</a>
                        </div>
                    </li>
                    <span class="nav-indicator"></span>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end-of-navbar --}}

    {{-- header --}}
    <div id="header" class="">
        <div class="container">
            @yield('header')
        </div>
    </div>
    {{-- end-of-header --}}


    {{-- Isi --}}
        @yield('container')
    {{-- end-of-isi --}}

    <!-- footer -->
    <div class="footer" style="color: #c9d6df; margin-bottom: 0px; margin-top: 0px; background-color: #413c69;">
        <div class="container">
            <div class="row py-5">
                {{-- kolom-kiri --}}
                <div class="col-sm-4 text-center" style="border-right: 2px solid #757575;">
                    <a class="navbar-brand" href="/" style="color: #c9d6df;">
                    <img src="https://1.bp.blogspot.com/-wqaa27EB7T4/YH00PtJeS6I/AAAAAAAADTo/nCj2NxGV4tsVa9tBK0ERLZ-iPIlAT6YpACLcBGAsYHQ/s0/1.png" width="10%" class="rounded" alt="icon"></a> <br><br>
                    Personal Blog
                </div>
                {{-- kolom-kanan --}}
                <div class="col-sm-4 ">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                        <h5><b>Follow me!</b></h5>
                        <hr style="border: 1px solid #c9d6df;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mx-2">
                            <a href="https://www.instagram.com/ifalahudin" id="footer" target="_blank"><i class="fab fa-instagram-square  fa-3x"></i></a>
                            <a href="https://www.facebook.com/maz.fajrul.ifal.rasyid" target="_blank" id="footer"><i class="fab     fa-facebook-square fa-3x "></i></a>
                            <a href="https://twitter.com/ifalahudin28" target="_blank" id="footer"><i class="fab fa-twitter-square fa-3x"></i></a>
                            <a href="https://github.com/ifalahudin" target="_blank" id="footer"><i class="fab fa-github-square fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <p class="text-center">&copy 2020-{{date("Y")}} Copyright Personal Blog. All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript/JQuery --> 
    
    <script>
        // animateNavbar
        $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 825);
        });
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>