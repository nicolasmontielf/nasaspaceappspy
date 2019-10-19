
<html lang="es">
<head>
    <?php 
    $page="SpaceApps";
    include 'includes/head.php'; 
    ?>

</head>
<body style="overflow-y:hidden;">
    <?php include 'menu.php'; ?>
    <div id="video-back">
        <video autoplay muted>
            <source src="assets/videos/space.mp4" type="video/mp4">
        </video>

        <div class="row">
            <div class="container-fluid main">
                <div class="col-md-12 col-lg-12">
                    <div class="principal-text">
                        <p class="text"> No more a Dream,<br>
                        the reality beyond Neptuno.
                        </p>
                    </div>

                    <div class="principal-button">
                        <a href="tour">Explore the Tour</a>
                        <a href="faq">Know The Ship</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

<?php include 'scripts.php'; ?>

</body>
</html>