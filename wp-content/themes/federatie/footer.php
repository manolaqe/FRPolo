<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package federatie
 */

?>

<footer>
        <hr>
        <div class="container-fluid padding " id="contact ">
            <div class="row text-center padding ">
                <div class="col-12 ">
                    <h2>Follow us</h2>

                </div>
                <div class="col-12 social padding ">
                    <a href="https://www.facebook.com/FederatiaRomanadePolo/ "><i class="fab fa-facebook "></i></a>
                    <a href="https://www.instagram.com/federatia_romana_de_polo/ "><i class="fab fa-instagram "></i></a>
                    <a href="https://www.youtube.com/channel/UCN1k-dU28OcmetQDdzLaYog "><i class="fab fa-youtube "></i></a>

                </div>
            </div>
        </div>
        <div class="container-fluid col-10 text-center ">
            <div class="row footer">
                <div class="col-md-6">
                    <p><b>Federatia Romana de Polo</b><br>Str. Vasile Conta, nr. 16<br>Bucureşti<br>+40213170918<br>office@frpolo.ro</p>
                    <div class="map1 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.655618868814!2d26.09913395137669!3d44.44022597899962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff48bcf41775%3A0x4a80812fe5ae9659!2sStrada%20Vasile%20Conta%2016%2C%20Bucure%C8%99ti%20030167!5e0!3m2!1sen!2sro!4v1614322547364!5m2!1sen!2sro "
                            style="border:0; width:80%; height:30vh; margin-right:1%; " allowfullscreen=" " loading="lazy "></iframe>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <p><b>Bazin Inot Tolea Grintescu </b><br>Str. Av. Popa Marin, nr. 2<br>Bucureşti<br>+40212300785<br> frpolo2019@gmail.com</p>
                    <div class="map2 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.439088853089!2d26.09268815137745!3d44.4651716789993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2020be04532b7%3A0xddc40bceb31cf26!2sComplex%20Sportiv%20Floreasca!5e0!3m2!1sen!2sro!4v1614322691946!5m2!1sen!2sro "
                            style="border:0; width:80%;height:30vh; " allowfullscreen=" " loading="lazy "></iframe>
                    </div>
                </div>
                <div class="col-12 text-center mt-5 ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/frpolo_logo.png" width="80 " height="50 ">
                    <h5>&copy; Copyright FRPolo.ro 2021</h5>
                </div>
            </div>
        </div>
    </footer>
    <?php
wp_footer();
?>

</body>

</html>
