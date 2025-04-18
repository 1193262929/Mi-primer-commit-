<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="section">
        <div>
            <img src="logo.png" alt="">
        </div>
        <h1 class="titulo">Mi pagina Web</h1>
        <p class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. At tenetur debitis quas repudiandae nemo culpa earum autem natus cum aliquid unde officia, magnam ab non enim laborum ullam reiciendis assumenda.</p>
        
    </section>
    <form action="" method="POST">
        <div class="div_input">
            <input class="input" name="nombre" type="text" placeholder="Ingresa tu nombre">
        </div>
        <div class="div_input">
            <input class="input" name="enviar" type="submit" value="Enviar">
        </div>
    </form>
    <?php
     if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            ?>
                <div class="mensaje"><?php echo "Hola ". $nombre . " bienvenido(a) al curso de git y GitHub, debes seguir practicando mucho Git";?></div>
            <?php
        }
        
    
    }else {
    ?>
        <div class="mensaje"><?php echo "Error";?></div>
    <?php
    }
    ?>
        
   
    
</body>
</html>