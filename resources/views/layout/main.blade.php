<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?= $Page; ?> | Rafael Dato</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f4f490fd37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/viewer.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=<?= time(); ?>">
</head>

<body>
    <div class="respond">
        <p>
            Your screen is too small to view this website
        </p>
    </div>
    <div class="bg"></div>
    <section class="showcase" style="background-image: url('assets/img/<?= $banner[$Page]; ?>');">
        <div class="topbar">
            <div class="wrapper">
                <div class="content">
                    <div class="logo">
                        <a href="/<?= (isset($_GET['lng'])) ? '?lng=' . $_GET['lng'] : '/'; ?>">
                            <img src="assets/img/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="mobile-logo">
                        <a href="/<?= (isset($_GET['lng'])) ? '?lng=' . $_GET['lng'] : '/'; ?>">

                            <img src="assets/img/mobile.svg" alt="">
                        </a>
                        <button type="button" id="menu-btn">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <!-- <div class="mobile-logo">
                        <a href="/<?= (isset($_GET['lng'])) ? '?lng=' . $_GET['lng'] : '/'; ?>">
                            <img src="assets/img/mobile.svg" alt="Logo">
                        </a>
                        <div class="menu-btn-cont nav-home">
            <button type="button" id="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
                </div> -->




                    <nav class="topnav">
                        <div class="navbar" id="menu">

                            <nav class="nav nav-home">
                                <!-- <div id="marker"></div> -->
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_HOME_']; ?>"><?= $Data['_HOME_']; ?></a>
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_BIO_']; ?>"><?= $Data['_BIO_']; ?></a>
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_PRES_']; ?>"><?= $Data['_PRES_']; ?></a>
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_MUSIC_']; ?>"><?= $Data['_MUSIC_']; ?></a>
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_TOUR_']; ?>"><?= $Data['_TOUR_']; ?></a>
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_BLOG_']; ?>"><?= $Data['_BLOG_']; ?></a>
                                <a href="?lng=<?= $Lang; ?>&p=<?= $Data['_CONTACT_']; ?>"><?= $Data['_CONTACT_']; ?></a>

                            </nav>


                    </nav>
                </div>

            </div>
        </div>
        </div>

        <div class="row head-row">
            <div class="wrapper header-title-wrapper">

                <div class="hero-title">

                    <p class="artist-name"><?= $Data['_NAME_']; ?></p>
                    <h2 class="artist-instru"><?= $Data['_INSTRU_']; ?></h2>
                    <h2 class="artist-comp"><?= $Data['_COMP_']; ?></h2>
                    <a class="cta-header" href="#album"><?= $Data['_ALBUM_']; ?></a>
                </div>
                <div class="social-header">

                    <a href=" https://open.spotify.com/artist/6trash5iM63TKWj9TEo0Go " target="_blank"> <i class="fa-brands fa-spotify"></i> </a>
                    <a href=" https://music.apple.com/us/artist/rafa%C3%ABl-dato/1589922420 " target="_blank"> <i class="fa-brands fa-apple"></i> </a>
                    <a href=" https://www.deezer.com/fr/artist/148176002 " target="_blank"> <i class="fa-brands fa-deezer"></i> </a>
                    <a href=" https://www.amazon.com/music/player/artists/B09J8PVLDZ/rafa%C3%ABl-dato" target="_blank"> <i class="fa-brands fa-amazon"></i> </a>
                    <a href=" https://www.youtube.com/channel/UCnFpQRhaeI8DuDMYvYAWKNg" target="_blank"> <i class="fa-brands fa-youtube"></i> </a>
                </div>
            </div>
        </div>
    </section>