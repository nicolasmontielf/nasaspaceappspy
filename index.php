<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php include 'includes/head.php'; ?>

    <style>

#video-back  {
    min-width: 100%;
    max-height: 100%;
    overflow: hidden;
    z-index:-100;
}

.text {
    color:white;
    font-size:50px;
    text-align:center;
    font-weight:bold;
}

.main {
    position:absolute;
    top:0px;
    left:0px;
    border:solid;
    min-height:100%;
    background-color:rgba(0,0,0,.5);
}

.principal-text {
    margin-top:15%;
}

body {
    overflow-y:hidden;
}

.principal-button a {
    border:solid 1px white;
    padding:15px;
    text-align:center;
    color:white;
}

.principal-button a:hover {
    text-decoration:none;
}

.principal-button {
    text-align:center;
    margin-top:2em;
}
    </style>
</head>
<body>
    
    <div id="video-back">
        <video autoplay muted loop>
            <source src="assets/videos/hola.mov" type="video/mp4">
        </video>

        <div class="row">
            <div class="container-fluid main">
                <div class="col-md-12 col-lg-12">
                    <div class="principal-text">
                        <p class="text"> ¿Estás preparado para <br>formar parte del futuro? </p>
                    </div>

                    <div class="principal-button">
                        <a href="hola">Llévame al tour</a>
                        <a href="hola">Preguntas Frecuentes</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>



</body>
</html>