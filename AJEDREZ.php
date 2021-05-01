<?php
    $control=7; //variable de control del tamaño del tablero

    echo "<h1>Tablero de Ajedrez<br></h1>";
    echo "<table border=1>"; //defino tabla
    //Primer for para hacer las filas
    for($i=1; $i<=$control; $i++)
    {
        echo "<tr>";//Marca el inicio de cada fila 
        //Segundo for coloca cada columna dentro de una fila
        for($j=1; $j<=$control; $j++)
        {
            //Coloca las imagenes blancas alternadas, dependiendo si las columnas y filas son pares o no.
            if($j%2 !=0 && $i%2 !=0 || ($j%2 ==0 && $i%2 ==0))
                echo "<td><img src=\"./blanco.jpg\" width=\"50\" height=\"50\"></td>";
            //Coloca las imagenes negras alternadas, dependiendo si las las columnas y filas son pares o no
            else if(($j%2 ==0 && $i%2 !=0) || ($j%2 !=0 && $i%2 ==0))
                echo "<td><img src=\"./negro.jpg\" width=\"50\" height=\"50\"></td>";
        }
        echo "</tr>";//Fin de fila
    }
    echo "</table>";//Fin de tabla
    echo "<br><br><strong>Jazmín Ramírez<strong>"
?>