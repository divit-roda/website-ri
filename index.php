<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLiz7-LsU_Ghc-w2PlUJduIUR5P9tBI2c&callback=initMap&libraries=&v=weekly" defer></script> -->
<?php

// Author : Roda Indonesia

// call header
include 'page/header.php';

$page = @$_GET['page'];
$sub_page = @$_GET['sub_page'];
switch ($page) {
    case 'about_us':
        include "page/about/about_us.php";
        break;

    case 'info_user':
        include "page/info_user/info_user.php";
        break;

    case 'info_driver':
        include "page/info_driver/info_driver.php";
        break;
    
    case 'koperasi':
        include "page/koperasi/koperasi.php";
         break;

    case 'mitra_driver':
        include "page/gabung_mitra/mitra_driver.php";
         break;

    case 'mitra_usaha':
        include "page/gabung_mitra/mitra_usaha.php";
         break; 

    case 'gabung_korwil':
        include "page/gabung_mitra/gabung_korwil.php";
        break;        

    case 'ribike':
        include "page/projek/ribike.php";
        break;

    case 'ricar':
        include "page/projek/ricar.php";
        break;

    case 'ripublic':
        include "page/projek/ripublic.php";
        break;

    case 'rimart':
        include "page/projek/rimart.php";
        break;

    case 'rifood':
        include "page/projek/rifood.php";
        break;

    case 'risend':
        include "page/projek/risend.php";
        break;

    case 'ritrip':
        include "page/projek/ritrip.php";
        break;

    case 'ridu':
        include "page/projek/ridu.php";
        break;

    case 'richat':
        include "page/projek/richat.php";
        break;

    case 'kontak':
        include "page/kontak/kontak_us.php";
        break;

 case 'snkrisend':
        include "page/projek/syarat_dan_ketentuan_RISEND.php";
        break;

    case 'kebijakan':
        if ($sub_page == "kebijakan_privasi") {
            include "page/kebijakan/kebijakan_privasi.php";
        }
        else if ($sub_page == "persyaratan_layanan_user"){
            include "page/kebijakan/persyaratan_layanan_user.php";
        }
        else if ($sub_page == "persyaratan_layanan_driver"){
            include "page/kebijakan/persyaratan_layanan_driver.php";
        } else {
            include "page/kebijakan/persyaratan_layanan.php";
        }
        break;

    default:
        include 'page/content.php';
        break;
}

// call footer
include 'page/footer.php';

?>
