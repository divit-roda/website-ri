<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white">

    <!--Footer Links-->
    <div class="container pt-5 px-4 px-md-0">
        <div class="row mt-5">

            <!--First column-->
            <div class="col-12 col-md-5 pe-0 pe-md-5 pb-4">
                <div class="page-footer-img">
                    <img src="assets/logo/logo.png" width="100px" alt="">
                </div>
                <div class="page-footer-text">
                    <p class="text-white mt-2">100% Karya Anak Nusantara</p>
                    <p class="text-white">Inovatif, Kreatif dan Produktif. Menjadi satu-satunya Aplikasi Karya Anak Nusantara yang Bergerak Mandiri Untuk Nusantara</p>
                    <p class="text-white mb-0">#satusentuhanuntuksemua </p>
                    <p class="text-white my-0">#maafsayadidepan</p>
                    <p class="text-white my-0">#rodaindonesia</p>
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
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 pb-5 pb-md-4">
                <h6 class="text-uppercase fw-bold">
                    <strong>Menu</strong>
                </h6>
                <hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="?page=kontak">Kontak Kami</a></p>
                <p><a href="#projek-section">Projek</a></p>
                <p><a href="?page=info_driver">Info Driver</a></p>
                <p><a href="?page=about_us">Tentang Kami</a></p>
            </div>
            <div class="col-12 col-md-5">
                <h6 class="text-uppercase fw-bold">
                    <strong>Info Kontak</strong>
                </h6>
                <hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <div class="footer-info">
                    <div class="footer-info-item">
                        <i class="ri-map-pin-2-fill"></i>
                        <p>Jl. Terusan Buah Batu No.171, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40287</p>
                    </div>
                    <div class="footer-info-item">
                        <i class="ri-mail-send-fill"></i>
                        <p>cs@rodaindonesia.site</p>
                    </div>
                    <div class="footer-info-item">
                        <i class="ri-phone-fill"></i>
                        <div class="contact-detail">
                            <div class="row">
                                <div class="col-4">Telepon</div>
                                <div class="col-1">:</div>
                                <div class="col-7">(022) 2068 2586</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Hotline</div>
                                <div class="col-1">:</div>
                                <div class="col-7">(0813) 2220 5561</div>
                            </div>
                            <div class="row d-flex">
                                <div class="col-4">Technical Service</div>
                                <div class="col-1">:</div>
                                <div class="col-7">(0877) 1307 1972<br>(0813) 2214 6567</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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