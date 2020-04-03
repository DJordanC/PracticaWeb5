<?php

//$nombre = 'Pedro';
//$profesion =['Docente','Medico','Bombero','Agricultor'];

/* Variables de Arreglos Asociativos
$pais[0]=[
    'nombre' => 'Venezuela',
    'poblacion' => 50
];
$pais[1]=[
    'nombre' => 'Bolivia',
    'poblacion' => 30
];*/

$eleccion = 'cafe';
   /* if($eleccion === 'espagueti'){
        echo 'El valor del espagueti es: BsS 130.000,00';
    }*/
    switch($eleccion){
        case 'arroz':
            echo 'El valor del arroz es: BsS 125.000,00';
        break;
        case 'espagueti':
            echo 'El valor del espagueti es: BsS 130.000,00';
        break;
        case 'azucar':
            echo 'El valor del azucar es: BsS 85.000,00';
        break;
        default:
            echo 'No hay';
        break;


    }
?>
<!DOCTYPE html>
<html lang= "es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    
        <body>
            <h1>
           
                <?php
                /* ==== Arreglo  
                     $i=0;
                     while($i<=3){
                        echo '<h1>Mi profesion es: '.$profesion[$i].'</h1>';
                     $i++;
                    }
               // echo $nombre;
               */

                /* ==== For
              for($i=0;$i<=3;$i++){
                    echo '<h1>Mi profesion es: '.$profesion[$i].'</h1>'; 
                }
                */

                /* ==== Foreach
                    foreach($profesion as $valor){
                        echo '<h1>Mi profesion es: '.$valor.'</h1>'; 
                    }
                */
                   // echo $pais[1]['nombre']

                /*  ==== Arreglos asociativos
                    for($i=0;$i<=1;$i++){
                       echo '<h3> Nombre: '.$pais[$i]['nombre'].'</h3>';
                       echo '<h3> Nombre: '.$pais[$i]['poblacion'].'</h3>';
                       echo '<hr>';
                    }
                
                    foreach($pais as $valor){
                        echo '<h3> Nombre: '.$valor['nombre'].'</h3>';
                        echo '<h3> Nombre: '.$valor['poblacion'].'</h3>';
                        echo '<hr>';
                    }
                */
                    

                ?>
             
            <h1>Opciones</h1> 
            <hr>
            <h3>Espagueti</h3>
            <h3>Arroz</h3> 
            <h3>Azucar</h3>  
            

        
        </body>
</html>