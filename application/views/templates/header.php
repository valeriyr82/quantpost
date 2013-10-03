 
<? $version = "2.1.4"; ?>
<!DOCTYPE html>    
    <html lang="en"> 
    <head>
        <meta charset="utf-8" />

        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Quantpost description." />
        <title>Quantpost: <?= $page_title ?></title>
        
        
        <!-- FIXME need favicon etc here -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
        <link rel="icon" type="image/ico" href="favicon.ico">
        
        
        <!-- part of distribution for Zurb Foundation -->
        <script src="<?php echo base_url() ?>foundation/javascripts/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>foundation/javascripts/modernizr.foundation.js"></script>
        <script src="<?php echo base_url() ?>foundation/javascripts/foundation.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>foundation/stylesheets/foundation.css">     
        
        <!--[if lt IE 9]>
                <link rel="stylesheet" href="<?php echo base_url() ?>foundation/stylesheets/ie.css">
        <![endif]-->
        
        
        <!--  This loads jQuery 1.6.4 as part of the system -->
        <script src="<?php echo base_url() ?>javascripts/jquery.validate.min.js"></script>
        <!--<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>-->
        <!--<script src="<?php echo base_url() ?>javascripts/jquery.reveal.js"></script>
        <script src="<?php echo base_url() ?>javascripts/jquery.orbit-1.4.0.js"></script>
        <script src="<?php echo base_url() ?>javascripts/forms.jquery.js"></script>
        <script src="<?php echo base_url() ?>javascripts/jquery.customforms.js"></script>
        <script src="<?php echo base_url() ?>javascripts/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url() ?>javascripts/jswipe.js"></script>-->
        
        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        
        <!-- Custom JS HERE -->
        <script src="<?php echo base_url() ?>javascripts/app.js"></script>
        
        
        <!-- Less CSS, JS -->
        <link rel="stylesheet/less" href="<?php echo base_url() ?>stylesheets/style.less" /> 
        <script src="<?php echo base_url() ?>javascripts/less-1.3.0.min.js"></script>
        
    
    </head>
    <body>

        
        <!-- qBar -->
        <div id="zurBar" class="container">
            <div class="row">
                <div class="four phone-two columns">
                    <h1>
                        <a href="<?php echo base_url() ?>">
                            <div><div class="left quant">Quant</div><div class="left post">post</div></div>
                        </a>                        
                    </h1>
                </div>
                <div class="eight phone-two columns">
                    <strong class="right">

                        <?php //echo anchor('news/local/123', 'My News', array('title' => 'The best news!')); 
                        ?>

                        <?php
                        if ($page != "register") {
                            echo anchor('Registration/register', 'REGISTER', array('class' => "small nice radius blue button ", 'title' => 'Register'));
                        }
                        if ($page != "landing") {
                            echo anchor('Landing/login', 'LOGIN', array('class' => "small nice radius blue button ", 'title' => 'Login'));
                        }
                    ?>   
                    </strong>
                </div>

            </div>
        </div>
        <!-- /qBar -->


