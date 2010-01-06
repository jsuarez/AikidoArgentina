<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Aikido Argentina - Galeria de fotos de Aikido</title>
    <?php include("includes/head.php");?>

    <!--====== SCRIPT JQUERY: GalleryFix =======-->
    <link href="js/jquery.galleryfix/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.galleryfix/js/script.js"></script>
    <script type="text/javascript" src="js/jquery.galleryfix/js/execute.js"></script>
    <!--====== END SCRIPT ======-->
</head>

<body>

    <div class="container">
        <div class="span-24 last header">
            <?php include("includes/header.php");?>
        </div>
        <!--end header-->

        <div class="clear span-24 last container-center">
            <div class="span-15">
                <div class="titles span-5 space-title">
                    <h1>Galería de<br />Fotos</h1>
                </div>

                <div class="container-photos last content">
                    <div class="content-photos">
                        <ul>
                            <li><a class="miniaturas" rel="group" href="container/images/002.jpg"><img src="container/images/thumbs/002.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/003.jpg"><img src="container/images/thumbs/003.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/004.jpg"><img src="container/images/thumbs/004.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/005.jpg"><img src="container/images/thumbs/005.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/05miramar_001.jpg"><img src="container/images/thumbs/05miramar_001.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/05miramar_002.jpg"><img src="container/images/thumbs/05miramar_002.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/05miramar_003.jpg"><img src="container/images/thumbs/05miramar_003.jpg" alt="aikido" width="164" height="123" /></a></li>
                            <li><a class="miniaturas" rel="group" href="container/images/05miramar_004.jpg"><img src="container/images/thumbs/05miramar_004.jpg" alt="aikido" width="164" height="123" /></a></li>
                        </ul>
                    </div>
                </div>
                <!--end content-->

                <div class="content-paginador float-left">
                    <div class="arrows float-left">
                        <a href="#" onclick="Gallery.back(); return false;"><img src="images/button_arrow_left.png" alt="Atras" /></a>
                    </div>

                    <div id="pages"></div>

                    <div class="arrows float-right">
                    	<a href="#" onclick="Gallery.next(); return false;"><img src="images/button_arrow_right.png" alt="Siguiente" /></a>
                    </div>
                </div>

            </div>

        </div>
        <!--end container-center-->
    </div>
    <!--end container-->

    <div class="clear span-24 last footer">
        <?php include("includes/footer.php");?>
    </div>
    <!--end footer-->

</body>
</html>
