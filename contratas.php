<?php
include "db.php";

    $usuarios = "SELECT * FROM contacto";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Administracion</title>
</head>
<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt="logo_new_way"></a>
    
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="arts.html">Artistas</a></li>
                <li><a href="us.html">Nosotros</a></li>
                <li><a href="contact.html">Contacto</a></li>
                <li id="icon"><a href="https://www.instagram.com/newwaycanarias/?hl=es"><i class='bx bxl-instagram-alt'></i></a></li>
                <li id="icon"><a href="https://mobile.twitter.com/newwaycanarias"><i class='bx bxl-twitter'></i></a></li>
                <li id="icon"><a href="https://es-es.facebook.com/NewWayCanarias/"><i class='bx bxl-facebook-square'></i></a></li> 
                <li id="icon"><a class="active" href="login.html"><i class='bx bx-desktop'></i></a></li> 
            </ul>
        </div>
    </section>

                <div class="section-p1">
        <h2 class="hhh2">Contactos</h2>
        <br><br>

        <?php
            include("function.php");
        ?>
        <table class="tab" width="100%">
            <tr>
                <th width="20%">Nombre</th>
                <th width="20%">Teléfono</th>
                <th width="20%">Correo</th>
                <th width="40%">Mensaje</th>
                <th width="10%">Opcion</th>
            </tr>

        <?php 
            $sql = "select * from contacto";
            $result = db_query($sql);
            while($row = mysqli_fetch_object($result)){
            ?>
            <tr>
                <td class="lin"><?php echo $row->nombre;?></td>
                <td class="lin"><?php echo $row->telefono;?></td>
                <td class="lin"><?php echo $row->correo;?></td>
                <td class="lin"><?php echo $row->mensaje;?></td>
                <td>
        <a href="delete.php?id=<?php echo $row->id;?>"><i class='bx bxs-trash-alt trash'></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </section>
    
</body>
</html>