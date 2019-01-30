
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú de navegación</title>
</head>
<body>
<nav>
<ul>
    <?php
        $menu = array("Inicio", "Blog", "Videos", "Contacto");
        $cuenta = count($menu);
      
        for ($i=0; $i < $cuenta ; $i++) { 
            echo '<li><a href="#">'.$menu[$i].'</a></li>';
        }
       
    ?>
    </ul>
    </nav>
</body>
</html>
