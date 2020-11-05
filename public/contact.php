<!DOCTYPE html>
<html>

<head>
    <?php include ('inc/header.php');?>
</head>

<body id="page-top">
<script defer>AOS.init();</script><script defer>var scroll = new SmoothScroll('a[href*="#"]');</script>
    <?php include ('inc/navigation.php');?>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <a id="scrollToTop"></a>

    <section id="contact">
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col col-12 col-md-6 text-center" data-aos="fade-up" style="background-image: url('assets/img/landing_backgrounds/contactBG.png'); background-position:center; ">
                    <h1 class="contactHeadingLeft" data-aos="fade-right" data-aos-delay="1000">Let's put an Imprint on you</h1>
                    <h3 class="contactSubHeadingLeft p-2" data-aos="fade-right" data-aos-delay="1000">We're happy to have our doors open to you.</h3>
                    <div class="contactInformation">
                        <div class="contactIcons p-2">
                            <i class="fab fa-facebook-square" data-aos="fade-right" data-aos-delay="1000"></i>
                            <i class="fab fa-youtube" data-aos="fade-right" data-aos-delay="1000"></i>
                            <i class="fab fa-linkedin" data-aos="fade-right" data-aos-delay="1000"></i>
                            <i class="fa fa-twitter-square" data-aos="fade-right" data-aos-delay="1000"></i>
                            <i class="fa fa-instagram" data-aos="fade-right" data-aos-delay="1000"></i>
                        </div>
                        <h6 class="d-flex p-2" id="contactDetails">Tel:
                            <a class="contactLink" href="tel:0333 344 7411" style="color:#232323!important;" data-aos="fade-right" data-aos-delay="1000">
                                <br> 0333 344 7411
                                <br><br>
                            </a>
                        </h6>
                        <h6 class="d-flex pb-2" id="contactDetails">
                            <a class="contactLink" data-aos="fade-right" data-aos-delay="1000" style="color:#232323!important;" href="https://www.google.com/maps/place/Imprint+Applications/@54.5874905,-1.2548882,17z/data=!4m12!1m6!3m5!1s0x487eeda4cf926f5f:0x26d35a7ba9f91153!2sImprint+Applications!8m2!3d54.5875403!4d-1.252957!3m4!1s0x487eeda4cf926f5f:0x26d35a7ba9f91153!8m2!3d54.5875403!4d-1.252957">
                                Unit 1A, Brighouse Road, Riverside Business Park, TS2 1RT</h6>
                            </a>
                    </div>
                </div>
                <div class="col col-12 col-md-6 text-center">
                    <h1 class="contactHeadingRight mb-5" data-aos="fade-left" data-aos-delay="1000">Let's Talk</h1>
                    <h3 class="contactSubHeadingRight" data-aos="fade-left" data-aos-delay="1000">You can email us directly</h3>
                    <h3 class="contactSubHeadingRight" style="font-size: 0.75rem;" data-aos="fade-left" data-aos-delay="1000">
                        <a class="contactLink" href="mailto:info@imprintapplications.co.uk" data-aos="fade-left" data-aos-delay="1000">info@imprintapplications.co.uk
                            <i class="fas fa-arrow-right ml-2" data-aos="fade-left" data-aos-delay="1000"></i>
                        </a>
                    </h3>
                    <h3 class="contactSubHeadingRight pt-5" data-aos="fade-left" data-aos-delay="1000">Lets <span class="bold"> Talk About</span></h3>
                    <?php 
                           if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                           {
                               ?>
                                <script defer>
                                swal({
                                    title: "<?php echo $_SESSION['status']; ?>",
                                    // text: "Your message has been received. We will contact you shortly.",
                                    icon: "<?php echo $_SESSION['status_code'];?>",
                                    button: "Great!",
                                });
                                </script>
                               <?php
                               unset($_SESSION['status']);
                           }
                    ?>
                    <form method="POST" action="send.php">
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="col-md-6">
                            <div class="row" style="display:flex; flex-direction: row; flex-wrap: wrap; width:100%;">
                                <div class="column">
                                        <input type="radio"  id="products" name="contactRadio" value="Products" data-aos="fade-left" data-aos-delay="1000" checked> 
                                        <label class="form-check-label-contact" for="products" data-aos="fade-left" data-aos-delay="1000">Products</label>
                                </div>
                                <div class="column">
                                    <input type="radio" id="shop" name="contactRadio" value="Company Shop" data-aos="fade-left" data-aos-delay="1000" unchecked>
                                    <label class="form-check-label-contact" for="shop" data-aos="fade-left" data-aos-delay="1000">Company Shop</label>
                                </div>
                                <div class="column">
                                    <input type="radio"  id="orders" name="contactRadio" value="Orders" data-aos="fade-left" data-aos-delay="1000" unchecked>
                                    <label class="form-check-label-contact" for="orders" data-aos="fade-left" data-aos-delay="1000">Orders</label>
                                </div>
                                <div class="column">
                                    <input type="radio"  id="artwork" name="contactRadio" value="Artwork" data-aos="fade-left" data-aos-delay="1000" unchecked>
                                    <label class="form-check-label-contact" for="artwork" data-aos="fade-left" data-aos-delay="1000">Artwork</label>
                                </div>
                            </div>
                        </div>
                        <input class="form-control mb-3" name="name" type="text" placeholder="Name" data-aos="fade-left">
                        <input class="form-control mb-3" name="number" type="tel" placeholder="Number" data-aos="fade-left">
                        <input class="form-control mb-3" name="email" type="email" placeholder="Email" data-aos="fade-left">
                        <textarea class="form-control mb-3" name="message" placeholder="What do you want to talk about?" data-aos="fade-left"></textarea>
                        <div class="g-recaptcha" data-sitekey="6Ld-VNEZAAAAAL2KaVEPdMJ9RpGeQkE8pJ71eLez" data-aos="fade-left"></div>
                        <button class="btn btn-submit btn-outline-green rounded-0" type="submit" data-aos="fade-left">Send Message</button>
                    </form>
                    <div id="thumb-black" data-aos="fade-left" data-aos-delay="1000"></div>
                </div>
            </div>
        </div>
    </section>
<?php include ('inc/scripts.php');?>
<?php include ('inc/footer.php');?>
</body>

</html>