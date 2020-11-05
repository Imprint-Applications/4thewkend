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
    <header class="masthead text-center text-white d-flex" data-aos="fade-up" style="background-image: url('assets/img/landing_backgrounds/wpsBG.png');background-size: cover;background-position: center center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-12">
                    <h1 class="text-uppercase titleArtwork" data-aos="fade-up"><strong>what people say</strong></h1>
                </div>
                <div class="col col-lg-12 col-md-10 mx-auto col-12">
                    <p id="sub-headingArtwork" class="text-faded" data-aos="fade-up"><strong>Testimonials | Trust Pilot | Google Reviews</strong><br></p>
                </div>
            </div>
            <div class="col d-lg-flex align-items-lg-end col-lg-12 col-md-10 mx-auto d-flex justify-content-between align-items-center" id="iconsWPS"><a href="https://shop.imprintapplications.com/pages/sports-wear" style="color:#74CC34;"><i class="fa fa-phone p-2 rounded-circle"></i></a>
                <div class="hero">
                    <a href="#whatpeoplesay" class="scroll-down">
                        <div class="mouse" ><span></span></div>
                        <div class="arrow"><span></span></div>
                    </a>
                </div>
                <a href="http://m.me/imprintapplications" target="_blank">
                    <i class="fab fa-facebook-messenger p-2 rounded-circle"></i>
                </a>
            </div>
            <div id="thumb-green-left"></div>
            <div id="thumb-green-right"></div> 
        </div>
    </header>

    <section id="whatpeoplesay">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <h1 class="artworkHeading" data-aos="fade-up">testimonials</h1>
                    <hr data-aos="fade-up">
                    <h3 class="testimonialsSubHeading" data-aos="fade-up"><strong>We have made sure that our customer satisfaction is above par, we like to think we have put an imprint on everyone of them.</strong></h3>
                    <p class="testimonialsText pb-2" data-aos="fade-up">From Imprint applications to you, the customer, we thank you for supporting us the same way we support you. We are internally grateful for our customers to recognise our hard work and by spreading the positive feedback to their family &amp; friends.<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-5 rounded-lg" data-aos="flip-left">
                        <div class="card-body text-center"><img loading=eager class="img-fluid rounded-circle" src="assets/img/svg/Test1.svg">
                            <p class="card-text" data-aos="fade-up"><strong>From Imprint applications to you, the customer, we thank you for supporting us the same way we support you. We are internally grateful for our customers to recognise our hard work and by spreading the positive feedback to their family &amp; friends.</strong><br></p>
                            <hr data-aos="fade-up">
                            <p data-aos="fade-up"><span style="color:#74CC34;">Catherine</span> | Middlesbrough | UK</p>
                        </div>
                    </div>
                    <div class="card mb-5" data-aos="flip-right">
                        <div class="card-body text-center"><img loading=eager class="img-fluid rounded-circle" src="assets/img/svg/Test2.svg">
                            <p class="card-text" data-aos="fade-up"><strong>Absolutely amazing service. 3 times I have used Imprint and it has always been last minute but they managed to get everything done each time. Great service and amazing professional attitude.</strong><br></p>
                            <hr data-aos="fade-up">
                            <p data-aos="fade-up"><span style="color:#74CC34;">Brian</span> | Stockton | UK</p>
                        </div>
                    </div>
                    <div class="card mb-5" data-aos="flip-left">
                        <div class="card-body text-center"><img loading=eager class="img-fluid rounded-circle" src="assets/img/svg/Test3.svg">
                            <p class="card-text" data-aos="fade-up"><strong>The Lads and lasses are fantastic, very friendly and they do amazing job in such quick turn around. They work crazy hours to make us all happy and it works. Thanks Again For all your help.</strong><br></p>
                            <hr data-aos="fade-up">
                            <p data-aos="fade-up"><span style="color:#74CC34;">Darren</span> | Leeds | UK</p>
                        </div>
                    </div>
                    <div class="card mb-5" data-aos="flip-right">
                        <div class="card-body text-center"><img loading=eager class="img-fluid rounded-circle" src="assets/img/svg/Test4.svg">
                            <p class="card-text" data-aos="fade-up"><strong>I must admit I am not somebody who understand the design process, I asked for advice from the design team and they managed to re draw my logo as I didn't have the correct file format. Lovely team..</strong><br></p>
                            <hr data-aos="fade-up">
                            <p data-aos="fade-up"><span style="color:#74CC34;">Susie</span> | Luton | UK</p>
                        </div>
                    </div>
                    <div class="card mb-5" data-aos="flip-left">
                        <div class="card-body text-center"><img loading=eager class="img-fluid rounded-circle" src="assets/img/svg/Test5.svg">
                            <p class="card-text" data-aos="fade-up"><strong>With the pandemic I have been really unsure to get back to work, as a Contractor I have found it very difficult. Imprint gave me the PPE and face coverings I needed for me to get back on my feet. Just Brilliant.</strong><br></p>
                            <hr data-aos="fade-up">
                            <p data-aos="fade-up"><span style="color:#74CC34;">Chris</span> | South Shields | UK</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="suggestions" data-aos="fade-up">
        <?php include ('inc/suggestions.php');?>
    </section>

    <section id="contact" class="p-0" data-aos="fade-up" style="background: #FFFFFF;"><img loading=eager class="img-fluid d-md-flex position-absolute" id="smoke" src="assets/img/page_images/smoke.png">
        <?php include ('inc/callback.php');?>
    </section>

    <section id="newsletter" class="p-0" data-aos="fade-up" style="background: #232323;">
        <div class="container-fluid">
            <div class="row">
                <?php include ('inc/newsletter.php');?>
            </div>
        </div>
    </section>

    <?php include ('inc/scripts.php');?>
    <?php include ('inc/footer.php');?>
</body>

</html>