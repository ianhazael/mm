<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="http://www.mundominero.mx/contentslider.js">
        </script>
        <link rel="stylesheet" type="text/css" href="http://www.mundominero.mx/contentslider.css" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="http://directoriominero.mx/wp-content/themes/directorypress/style.css" type="text/css" media="screen" />
        <link rel="pingback" href="http://directoriominero.mx/xmlrpc.php" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://directoriominero.mx/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://directoriominero.mx/wp-includes/wlwmanifest.xml" />
        <link href="http://directoriominero.mx/wp-content/themes/directorypress/themes/default/css/styles.css" type="text/css" rel="stylesheet" /><!--[if IE 6]><link rel="stylesheet" href="http://directoriominero.mx/wp-content/themes/directorypress/ie6.css" type="text/css" media="all" /><![endif]-->

<!--		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <script type="text/javascript" src="http://directoriominero.mx/wp-content/themes/directorypress/js/jquery.js">
        </script>
        <script type="text/javascript" src="http://directoriominero.mx/wp-content/themes/directorypress/js/_DirectoryPress.js">
        </script>
        <script type="text/javascript" src="http://directoriominero.mx/wp-content/themes/directorypress/js/jquery.scrollTo-1.3.3.js">
        </script>
        <script type="text/javascript" src="http://directoriominero.mx/wp-content/themes/directorypress/js/jquery.localscroll-1.2.5.js">
        </script>
        <script type="text/javascript" src="http://directoriominero.mx/wp-content/themes/directorypress/js/jquery.serialScroll-1.2.1.js">
        </script>
        <script src="http://directoriominero.mx/wp-content/themes/directorypress/js/s3Slider.js" type="text/javascript">
        </script><!-- Pulls in the s3 Slider Plugin for the Ellenby Hotel Scarboroughs slider -->

        <script type="text/javascript">
            //<![CDATA[
            <!-- This runs the s3Slider for the Features Items. -->
            $(document).ready(function() {                  
                $('#featured-item').s3Slider({
                    timeOut: 6000                                   <!-- To speed up the slider, lower the number. -->
                });                                                                     <!-- To slow down the slider, raise the number. -->
            }); 
            //]]>
        </script>
        <link rel="stylesheet" type="text/css" href="http://www.mundominero.mx/contentslider.css" />
        <style type="text/css">
            /*<![CDATA[*/
            div.c11 {min-height:500px;}
            div.c10 {padding-top:0px;}
            div.c9 {width:350px;min-height:500px;}
            img.c8 {border:1px solid black; float:left; margin-right:10px;}
            a.c7 {font-size:16px; color:#454444;}
            table.c6 {background-color: #FFFFFF}
            span.c5 {color: #464646; font-family: Arial; font-size: 80%}
            span.c4 {color: #3F4472; font-family: Arial; font-size: 18pt}
            img.c3 {border: 1px solid #808080}
            div.c2 {width:480px; float:left; align:right; margin-top:20px;}
            div.c1 {width:465px; float:left;}
            /*]]>*/
        </style>
    </head>
    <body class="home blog">
        <div id="shadow-wrapper">
            <div class="shell">
                <div id="LogoArea">
                    <div class="cl"> </div>
                    <h1 class="LogoText">Directorio Minero México</h1>
                    <div class="c1"><a href="/"><img src="http://www.directoriominero.mx/header-pagina.png" border="0" alt="** PLEASE DESCRIBE THIS IMAGE **" /></a></div>
                    <div class="c2"></div>
                </div>
                <!-- Header -->
                <div id="header">
                    <div class="cl"> </div>
                    <!-- Navigation -->
                    <div id="navigation">
                        <ul>
                            <li><a href="/"><span>Home</span></a></li>
                            <li><a id="nav-0" href="/index.php?r=mineras/index" class=""><span>Mineras</span></a></li>
                            <li><a id="nav-1" href="/index.php?r=proveedores/index" class=""><span>Proveedores</span></a></li>
                            <li><a id="nav-2" href="/?page_id=1" class=""><span>Anexar listado</span></a></li>
                        </ul>
                    </div>
                    <!-- END Navigation -->
                    <div class="cl"> </div>
                </div>
                <!-- END Header -->
                <div class="cl"> </div>
                <!-- Content -->
                <div id="content">

					<?php echo $content; ?>
                   
                </div>
                
                <!-- END Content -->
                <!-- Footer -->
                <p class="foottext"><small> Copyright <?php echo date("Y"); ?>. Directorio Minero es una publicación de INSETEC S.A. de C.V. <a href="/sitemap.xml" title="Directory Site Map">Site Map</a> </p>
                <!-- END Footer --></div>
            
            <br /></div>
        <!-- END Shadow Wrapper -->
    </body>
</html>