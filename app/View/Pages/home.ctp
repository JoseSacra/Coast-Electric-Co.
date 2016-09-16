<?php

/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<div id="main" class="row">
    <div class="onecol"></div> 
    <div id="slider" class="tencol">
        <div class="flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <?php echo $this->Html->image('alumbrado.jpg', array('alt' => 'Alumbrado publico', 'border' => '0')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->image('Lineas.jpg', array('alt' => 'Lineas de alta tension', 'border' => '0')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->image('controles.jpg', array('alt' => 'instalacion de controles', 'border' => '0')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="onecol last"></div>
</div>
<div class="service-section">
    <div class="container">
        <div class="row">
            <div class="section_heading_title">
                <h1>Nuestros Servicios</h1>
                <div class="pagetitle-separator">
                    <div class="pagetitle-separator-border">
                        <div class="pagetitle-separator-box"></div>
                    </div>
                </div>
                <p>Ofresemos Grandes Servicios a nuestros Clientes</p>
            </div>
        </div>	
        <div class="row">
            <div class="col-md-4 col-sm-6 service-effect">
                <div class="service-box">
                    <?php 
                        echo $this->Html->image('residencial.jpg', array('alt' => 'Servicios Residenciales', 'border' => '0')); 
                    ?>
                    <!--<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="http://jose-sacra.azurewebsites.net/wp-content/uploads/2016/07/images.jpg">-->
                </div>
                <div class="service-area">
                    <h2><a href="#">Residencial</a></h2>
                    <p>Realizamos todo tipo de servicios Residenciales</p>
                </div><!-- / service-area -->
            </div> <!-- / service-effect column -->

            <div class="col-md-4 col-sm-6 service-effect">
                <div class="service-box">
                    <?php 
                        echo $this->Html->image('comercial.jpg', array('alt' => 'Servicios Comerciales', 'border' => '0')); 
                    ?>
                    <!--<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="http://jose-sacra.azurewebsites.net/wp-content/uploads/2016/07/desarrollo-web.jpg">-->
                </div>
                <div class="service-area">
                    <h2><a href="#">Comercial</a></h2>
                    <p>Diseño y desarrollo de servicios electricos comerciales</p>
                </div><!-- / service-area -->
            </div> <!-- / service-effect column -->

            <div class="col-md-4 col-sm-6 service-effect">
                <div class="service-box">
                    <?php 
                        echo $this->Html->image('alumbrado_1.jpg', array('alt' => 'Servicios Publicos', 'border' => '0')); 
                    ?>
                </div>
                <div class="service-area">
                    <h2><a href="#">Servicios Publicos</a></h2>
                    <p>Implementacion de servicios electricos para alumbrado pubblico</p>
                </div><!-- / service-area -->
            </div><!-- / service-effect column -->

        </div>	
    </div>

    <div class="portfolio-section">
        <div class="container">

            <div class="row">
                <div class="section_heading_title">
                    <h1>Featured Portfolio Project</h1>
                    <div class="pagetitle-separator">
                        <div class="pagetitle-separator-border">
                            <div class="pagetitle-separator-box"></div>
                        </div>
                    </div>
                    <p>Most Popular of Our Works.</p>

                </div>
            </div>
<!--            <div class="row">
                <div class="col-md-3 col-md-6 home-portfolio-area">
                    <div class="home-portfolio-showcase">
                        <div class="home-portfolio-showcase-media">

                            <img class="img-responsive home-portfolio-img" alt="Sleek &amp; Beautiful" src="https://wp-themes.com/wp-content/themes/wallstreet/images/portfolio1.jpg">

                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4>Wall Street Style</h4>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6 home-portfolio-area">
                    <div class="home-portfolio-showcase">
                        <div class="home-portfolio-showcase-media">

                            <img class="img-responsive home-portfolio-img" alt="Sleek &amp; Beautiful" src="https://wp-themes.com/wp-content/themes/wallstreet/images/portfolio2.jpg">

                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4>Wall Street Style</h4>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6 home-portfolio-area">
                    <div class="home-portfolio-showcase">
                        <div class="home-portfolio-showcase-media">

                            <img class="img-responsive home-portfolio-img" alt="Sleek &amp; Beautiful" src="https://wp-themes.com/wp-content/themes/wallstreet/images/portfolio3.jpg">

                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4>Wall Street Style</h4>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-6 home-portfolio-area">
                    <div class="home-portfolio-showcase">
                        <div class="home-portfolio-showcase-media">

                            <img class="img-responsive home-portfolio-img" alt="Sleek &amp; Beautiful" src="https://wp-themes.com/wp-content/themes/wallstreet/images/portfolio4.jpg">

                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4>Wall Street Style</h4>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>-->