<?php
session_start();

// jika sudah login
if (isset($_SESSION['email']) == 1) {
    # code...
    // jika sudah login sebagai pengajar
    if ($_SESSION['level'] == "pengajar") {
        # code...
        header("location:home.php");
    }
    // jika sudah login sebagai siswa
    elseif ($_SESSION['level'] == "siswa") {
        # code...
        header("location:course.php");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- styling css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/icon.png">

    <title>SkillHub Apps</title>
</head>

<body>

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">SkillHub</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">SignUp</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">SignUp</a></li>
    </ul>

    <!-- Slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="image/slider/slider1.jpg">
                <div class="caption left-align">
                    <h3>Pemrograman</h3>
                    <h5 class="light grey-text text-lighten-3">Free Course</h5>
                </div>
            </li>
            <li>
                <img src="image/slider/slider2.jpg">
                <div class="caption right-align">
                    <h3>Jaringan Komputer</h3>
                    <h5 class="light grey-text text-lighten-3">Free Course</h5>
                </div>
            </li>
            <li>
                <img src="image/slider/slider3.jpg">
                <div class="caption center-align">
                    <h3>Pelajaran Umum</h3>
                    <h5 class="light grey-text text-lighten-3">Free Course</h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- About us -->
    <section id="about" class="about grey lighten-3">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">Tentang Kami</h3>
                <div class="col m6 light">
                    <h5>Kami Menyediakan</h5>
                    <p>Layanan course online dengan fasilitas akses materi gratis. Disediakan oleh pengajar profesional
                        kami memberikan layanan yang terpercaya dan dapat membuat anda sekalian menjadi jago dalam
                        segala hal sekaligus bisa membuat anda sekalian menjadi jago dalam dunia IT. Terdapat 3 course
                        umum yang bisa diakses oleh User.
                    </p>
                </div>
                <div class="col m6 light">
                    <p>Pemrograman</p>
                    <div class="progress">
                        <div class="determinate" style="width: 100%"></div>
                    </div>
                    <p>Jaringan Komputer</p>
                    <div class="progress">
                        <div class="determinate" style="width: 100%"></div>
                    </div>
                    <p>Pelajaran Umum</p>
                    <div class="progress">
                        <div class="determinate" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- client -->
    <div class="parallax-container">
        <div class="parallax"><img src="image/slider/slider4.jpg"></div>

        <div class="container partner">
            <h3 class="center light white-text">Media Partner</h3>
            <div class="row">
                <div class="col m12 s12 center">
                    <img src="image/partner/uin.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- course kami -->
    <section id="course" class="course grey lighten-3">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Course Kami</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">desktop_windows</i>
                        <h5>Pemrograman</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae voluptate velit unde
                            blanditiis molestiae.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">network_wifi</i>
                        <h5>Jaringan Komputer</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae voluptate velit unde
                            blanditiis molestiae.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">reorder</i>
                        <h5>Pelajaran Umum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae voluptate velit unde
                            blanditiis molestiae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="blue darken-3 white-text center" style="padding: 20px;">
        <p>SkillHub east. 2023</p>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    // sidenav
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
    // slider
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        indicators: false,
        transition: 600,
        interval: 3000
    });
    // parallax
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);
    </script>
</body>

</html>