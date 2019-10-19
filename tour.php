<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
    $page="Explore the Tour";
    include 'includes/head.php'; 
    ?>

</head>
<body>
    <div class="main3 tour">
        <?php include 'menu.php' ?>
            <div class="slider" id="slider">
                <div class="slItems">
                    <div class="slItem" style="background-image: url('1.jpg');">
                        <div class="slText">
                            Servicio 1
                        </div>
                    </div>

                    <div class="slItem" style="background-image: url('1.jpg');">
                        <div class="slText">
                            Servicio 2
                        </div>
                    </div>

                    <div class="slItem" style="background-image: url('1.jpg');">
                        <div class="slText">
                            Servicio 3
                        </div>
                    </div>
                </div>
            
        </div>
    </div>


<?php include 'scripts.php' ?>

<script>
$('#slider').rbtSlider({
  height:'100vh',
  // displays dots pagination
  'dots':true,
  // displayes arrows navigation
  'arrows':true,
  // autoplay interval
  // 3 = 3 seconds
  'auto': 3
});

</script>
</body>
</html>