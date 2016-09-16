<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'coast-electric');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('normalize');
                echo $this->Html->css('bootstrap');
                echo $this->Html->css('flexslider');
                echo $this->Html->css('slider');
                echo $this->Html->css('personal-styles');
                
                echo $this->Html->script('jquery-3.1.0.min');
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('jquery.flexslider-min');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
        <script>
            $(document).ready(function () {
                $('.flexslider').flexslider({
                    animation: 'fade',
                    controlsContainer: '.flexslider'
                });
            });
        </script>
</head>
<body>
    <div class="jumbotron container">
        <div style="float:left; margin:32px 0 0 50px;">
            <?php 
                echo $this->Html->image('logo.png', array('alt' => 'Logotipo', 'id'=> 'Logo', 'border' => '0'));
            ?>
        </div>
        <div style="float:left; margin:28px 0 0 52px;">
            <h1>Coast - Electric co.</h1>
            <p class="lead">Electrical Contractors, sinse 1986</p>
        </div>
        <div id="idioma">
            <ul>
                <li>
                    <?php 
                        echo $this->Html->image('bandera_de_USA.gif', array('alt' => 'EN', 'class'=> 'bandera', 'border' => '0'));
                    ?>
                </li>
                <li>
                    <?php 
                        echo $this->Html->image('mexico.jpg', array('alt' => 'ES', 'class'=> 'bandera', 'border' => '0'));
                    ?>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="navbar navbar-inverse navbar-fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--@Html.ActionLink("Web de Jose Sacramento", "Index", "Home", new { area = "" }, new { @class = "navbar-brand" })-->
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li id="menu"><a href="/">HOME</a></li>
                        <li id="menu"><a href="about">ABOUT</a></li>
                        <li id="menu"><a href="products">PRODUCTS</a></li>
                        <li id="menu"><a href="work">WORK</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li>@Html.ActionLink("Registrarse", "Register", "Account", routeValues: null, htmlAttributes: new { id = "registerLink" })</li>*@-->
                        <li id="menu"><a href="login">Iniciar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container body-content">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <div class="container footer">
            <footer>
                <p style="text-align:left;">Todos los Derechos Reservados &COPY; Coast - Electric co.</p>
            </footer>
        </div>
</body>
</html>