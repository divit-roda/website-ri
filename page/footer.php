<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white">

    <!--Footer Links-->
    <div class="container motto px-3">
        <div class="page-footer-img">
            <img src="assets/logo/logo.png" width="100px" alt="">
        </div>
        <div class="page-footer-text">
            100% Karya Anak Nusantara
            <div class="my-3">Menjadi satu-satunya Aplikasi Karya Anak Nusantara yang Bergerak Mandiri Untuk Indonesia.</div>
            <div class="social-icon my-3">
                <ul class="list-inline py-3">
                    <li class="list-inline-item">
                        <a href="https://web.facebook.com/rodaindonesiaa" target="_blank" class="s-icon fb-ic"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/channel/UC3sCgTIeNRN8mHVMeTes86g" target="_blank" class="s-icon yt-ic">
                            <i class="ri-youtube-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/rodaindonesiaofficial/" target="_blank" class="s-icon ins-ic"><i class="ri-instagram-line"></i></a>
                    </li>
                </ul>
                <div class="btn-group">
                    <div class="list-inline-item">
                    <a href="">
                    <input type="image" src="assets/logo/playstore_logo.png" style="border: double;" height="50" width="130"/>
                    </a>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="list-inline-item">
                    <a href="">
                    <input type="image" src="assets/logo/appstore_logo.png" style="border: double;" height="50" width="130"/>
                    </a>
                    </div>
                </div>
            </div>
            
            
            #satusentuhanuntuksemua
            <br>#hematcermatbersahabat
	        <br>#IndonesiaBanget
	        <br>#IndonesiaOptimis
            <br>#JalanMenujuSejahtera
            <br>#JalanMenujuPerubahan
            <br>#PintuPerubahanKeluarga
            <br>#BergerakMandiriUntukIndonesia
            <br>#rodaindonesia    
         </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-start pb-4 pb-md-0">
                    <span>Copyright &copy; 2021 by <a href="index.php"> Roda Indonesia</a></span>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-end">
                    <span><a href="?page=kebijakan&sub_page=persyaratan_layanan">Persyaratan Layanan</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?page=kebijakan&sub_page=kebijakan_privasi">Kebijakan Privasi</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- To Top -->
<div class="scroll-top-to box-shadow">
    <i class="ri-arrow-up-s-line"></i>
</div>

<script src="plugins/jquery_3.5.1.min.js"></script>
<script src="plugins/jquery_migrate_3.3.2.min.js"></script>
<script src="plugins/popper.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="plugins/fontawesome/all.js"></script> -->
<script type="text/javascript" src="plugins/sweetalert/sweetalert2.js"></script>
<script type="text/javascript" src="plugins/aos/aos.js"></script>
<script type="text/javascript" src="plugins/owlCarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/home_script.js"></script>

<?php
$page = @$_GET['page'];
$sub_page = @$_GET['sub_page'];
switch ($page) {

    case 'kontak':
        echo '<script src="plugins/leaflet/leaflet.js"></script>';
        echo '<script src="js/page_js/kontak_us.js"></script>';
        break;

    case 'info_user':
        echo '<script src="js/page_js/info_user.js"></script>';
        break;

    case 'ribike':
        echo '<script src="js/page_js/projek/ribike.js"></script>';
        break;

    case 'ricar':
        echo '<script src="js/page_js/projek/ricar.js"></script>';
        break;

    case 'ripublic':
        echo '<script src="js/page_js/projek/ripublic.js"></script>';
        break;

    case 'rimart':
        echo '<script src="js/page_js/projek/rimart.js"></script>';
        break;

    case 'rifood':
        echo '<script src="js/page_js/projek/rifood.js"></script>';
        break;

    case 'risend':
        echo '<script src="js/page_js/projek/risend.js"></script>';
        break;

    case 'ritrip':
        echo '<script src="js/page_js/projek/ritrip.js"></script>';
        break;

    case 'ridu':
        echo '<script src="js/page_js/projek/ridu.js"></script>';
        break;

    case 'richat':
        echo '<script src="js/page_js/projek/richat.js"></script>';
        break;

    case 'about_us':
        echo '<script type="text/javascript" src="js/page_js/about_us.js"></script>';
        echo '<script type="text/javascript" src="plugins/dhtmlx_diagram/diagram.js"></script>';
        break;

    case 'kebijakan':
        if ($sub_page == "kebijakan_privasi") {
            echo '<script src="js/page_js/kebijakan/kebijakan_privasi.css"></script>';
        } else {
            echo '<script src="js/page_js/kebijakan/persyaratan_layanan.css"></script>';
        }
        break;

    default:
        echo '';
        break;
}
?>

<script>
    $('.icon').click(function() {
        $('span').toggleClass("cancel");
    });
</script>


</body>

</html>