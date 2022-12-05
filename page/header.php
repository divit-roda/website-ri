<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo_tab.png" type="image/x-icon">
    <title>Roda Indonesia</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/themify-icons/themify-icons.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/fontawesome/all.css"> -->
    <link rel="stylesheet" type="text/css" href="plugins/remixicon/remixicon.css">
    <link rel="stylesheet" type="text/css" href="plugins/sweetalert/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="plugins/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="plugins/owlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/mycss.css">
    

    <?php
    $page = @$_GET['page'];
    $sub_page = @$_GET['sub_page'];
    switch ($page) {

        case 'kontak':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/kontak_us.css">';
            echo '<link rel="stylesheet" type="text/css" href="plugins/leaflet/leaflet.css" />';
            break;

        case 'info_user':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/info_user.css">';
            break;

        case 'info_driver':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/info_driver.css">';
            break;

        case 'mitra_driver':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/mitra_driver.css">';
            break;

        case 'gabung_korwil':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/gabung_korwil.css">';
            break;
            
        case 'mitra_usaha':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/mitra_usaha.css">';
            break;

        case 'koperasi':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/koperasi.css">';
            break;

        case 'ribike':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/ribike.css">';
            break;

        case 'ricar':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/ricar.css">';
            break;

        case 'ripublic':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/ripublic.css">';
            break;

        case 'rimart':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/rimart.css">';
            break;

        case 'rifood':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/rifood.css">';
            break;

        case 'risend':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/risend.css">';
            break;

        case 'ritrip':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/ritrip.css">';
            break;

        case 'ridu':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/ridu.css">';
            break;

        case 'richat':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/projek/richat.css">';
            break;

        case 'about_us':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/about_us.css">';
            echo '<link rel="stylesheet" type="text/css" href="plugins/dhtmlx_diagram/diagram.css">';
            break;

        case 'kebijakan':
            if ($sub_page == "kebijakan_privasi") {
                echo '<link rel="stylesheet" type="text/css" href="css/page_css/kebijakan/kebijakan_privasi.css">';
            } else {
                echo '<link rel="stylesheet" type="text/css" href="css/page_css/kebijakan/persyaratan_layanan.css">';
            }
            break;

        default:
            echo '';
            break;
    }
    ?>
    

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <span></span>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top py-3" id="header_nav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo/logo.png" width="80px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <i class="ri-bar-chart-horizontal-fill"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link color-white home" id="home_page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-white" href="?page=about_us">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link color-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk &nbsp;<i class="ri-arrow-down-s-line" style="font-size: 13px;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?page=ribike">RIBIKE</a></li>
                            <li><a class="dropdown-item" href="?page=ricar">RICAR</a></li>
                            <li><a class="dropdown-item" href="?page=risend">RISEND</a></li>
                            <li>
                                <hr class="dropdown-divider bg-white">
                            </li>
                            <li><a class="dropdown-item" href="?page=rimart">RIMART</a></li>
                            <li><a class="dropdown-item" href="?page=rifood">RIFOOD</a></li>
                            <li><a class="dropdown-item" href="?page=ritrip">RITRIP</a></li>
                            <li>
                                <hr class="dropdown-divider bg-white">
                            </li>
                            <li><a class="dropdown-item" href="?page=ripublic">RIPUBLIC</a></li>
                            <li><a class="dropdown-item" href="?page=ridu">RIEDU</a></li>
                            <li><a class="dropdown-item" href="?page=richat">RICHAT</a></li>
                        </ul>
                    </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link color-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info &nbsp;<i class="ri-arrow-down-s-line" style="font-size: 13px;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?page=info_driver">Info Driver</a></li>
                            <li><a class="dropdown-item" href="?page=mitra_usaha">Info Mitra Usaha</a></li>
                            <li><a class="dropdown-item" href="?page=koperasi">Info Mitra Koperasi</a></li>
                        </ul>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link color-white" href="?page=koperasi">Koperasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-white" href="?page=info_user">Info User</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link color-white" href="?page=kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->