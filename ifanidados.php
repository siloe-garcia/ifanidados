<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <style>
        form{
            margin: 0 auto;
            width: 400px;
            background-image: url(https://st.depositphotos.com/1275255/2371/i/600/depositphotos_23711897-stock-photo-nice-blue-abstract-sky-blur.jpg);
            background-repeat: no-repeat;
            text-align: center;
        }
        #boton{
            background-color: greenyellow;
            color:white;
            font-weight: bold;
            
        }
        #msg{
            text-align: center;
            font-size: 30px;
        }
        #etiqueta{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label id="etiqueta" name="nombre">Nombre de Usuario:</label>
        <input type="text" name="nombre" required><br>
        <label id="etiqueta" name="edad">Escribe tu edad    :</label>
        <input type="number" name="edad"><br>
        <input id="boton" type="submit" name="submit" value="Enviar">
    </form>
    <!--Es codigo php-->
    <?php
        if (isset($_POST['submit'])) {
            $nombre=$_POST['nombre'];
            $edad=$_POST['edad'];
            if ($edad>0 && $edad<=11) {
                echo '<p id="msg"> El usuario: <b>'.$nombre.'</b> :es <b>un niño</b></p>';
            }else{
                if($edad>=12 && $edad<=17){
                    echo '<p id="msg"> El usuario: <b>'.$nombre.'</b> :es <b>un adolecente</b></p>';
                }else{
                    if($edad>=18 && $edad<=64){
                        echo '<p id="msg"> El usuario: <b>'.$nombre.'</b> :es <b>un adulto</b></p>';
                    }else{
                        if($edad>=65){
                            echo '<p id="msg"> El usuario: <b>'.$nombre.'</b> :es <b>un adulto mayor</b></p>';
                        }else{
                            echo 'Dato invalido';
                        }
                    }
                }
            }
        }
    ?>
</body>
</html>