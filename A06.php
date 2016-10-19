<html>
  <head>
    <meta <charset="utf-8">
    <title>A06</title>
  </head>
  <body>
  <?php
    //Declaracion de clases
    include 'Alumno.php';
   
    $alumno1 = new Alumno();
    $alumno1->setNombre('Miguel');
    echo "El nombre del alumno: " .$alumno1->getNombre();

    $alumno1->setEdad('18');
    echo "</br> La edad: " .$alumno1->getEdad();

    $alumno1->setCurso('2');
    echo "</br> Su curso es: " .$alumno1->getCurso();

    $alumno1->setCiclo('DAW');
    echo "</br> Cursando el ciclo: " .$alumno1->getCiclo();

    ?>
  </body>
</html>
