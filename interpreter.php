<?php

  // nombre de documentos codigos 
  $nombre_documento = "41.NEW.BOLSOS TIENDA.csv";
  $nombre_documento_codigos = "CODIGOS.csv";
  $nombre_documento_salida = $nombre_documento;
  
  // ruta y unbicacion de documentos codigos
  $archivo_lectura = fopen("./CSV/".$nombre_documento, "r");
  $archivo_lectura_codigos = fopen("./CSV/".$nombre_documento_codigos, "r");
  $archivo_escritura_salida = "./RESULT/".$nombre_documento;


  // declaro el array vacio
  $lectura = array();
  $codigos = array();
  $procesado = array();
  $n = 0;

  // $actual = file_get_contents($fichero);
  // // Añade una nueva persona al fichero
  // $actual .= "John Smith\n";
  // // Escribe el contenido al fichero
  // file_put_contents($fichero, $actual);

  // si existe el archivo
  if ($archivo_lectura) {

    // ciclo el archivo entero
    while (($line = fgets($archivo_lectura)) !== false) {
      // process the line read.
      // echo "LINEA: ".$line ."";
      $lectura[$n] = explode( ';', $line );
      $n++;
    }

    // var_dump($lectura);

    // cerrar el archivo al terminar
    fclose($archivo_lectura);
  
  }

  // despues de leer todo el archivo e interpretarlo, me toca cambiar todo por codigos...
  // tengo que leer el archivo de codigos.


  // si existe el archivo
  if ($archivo_lectura_codigos) {
    // reseteo el index
    $n = 0;
    // ciclo el archivo entero
    while (($line = fgets($archivo_lectura_codigos)) !== false) {
      // process the line read.
      // echo "LINEA: ".$line ."";
      $codigos[$n] = explode( ';', $line );
      $n++;
    }

    // var_dump($codigos);

    // cerrar el archivo al terminar
    fclose($archivo_lectura_codigos);
  
  }

  $procesado = $lectura;
  // tengo la lectura y los codigos. ahora empiezo a crear un nuevo arreglo con los nuevos codigos

  // cambiando filas en especifico
  for ($i = 0; $i < count($procesado); $i++) {
    // $j = 0;
    echo "linea nueva \n";

    for ($j = 0; $j < count($codigos); $j++) {

      $codigos[$j][2] = trim($codigos[$j][2]);

      // CATEGORIA
      if( trim($procesado[$i][2]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][2] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] == "CATEGORIA");


        if($codigos[$j][2] === "CATEGORIA"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][2];
          $procesado[$i][2] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][2]." \n";;
        }
        
      }

      // GENERAL / GENERO
      if( trim($procesado[$i][3]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][3] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "GENERAL / GENERO");

        if($codigos[$j][2] === "GENERAL / GENERO"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][3];
          $procesado[$i][3] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][3] ." \n";
        }
        
      }

      // ARTICULO / SUBCATEGORIA
      if( trim($procesado[$i][4]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][4] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "GENERAL / GENERO");

        if($codigos[$j][2] === "ARTICULO / SUBCATEGORIA"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][4];
          $procesado[$i][4] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][4] ." \n";
        }
        
      }
      
      // LINEA
      if( trim($procesado[$i][5]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][5] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "GENERAL / GENERO");

        if($codigos[$j][2] === "LINEA"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][5];
          $procesado[$i][5] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][5] ." \n";
        }
        
      }
      
      // SUBLINEA / CORTE
      if( trim($procesado[$i][6]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][6] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "GENERAL / GENERO");

        if($codigos[$j][2] === "SUBLINEA / CORTE"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][6];
          $procesado[$i][6] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][6] ." \n";
        }
        
      }
      
      // MODELO
      if( trim($procesado[$i][7]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][7] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "MODELO");

        if($codigos[$j][2] === "MODELO"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][7];
          $procesado[$i][7] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][7] ." \n";
        }
        
      }

      // COLOR
      if( trim($procesado[$i][8]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][8] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "COLOR");

        if($codigos[$j][2] === "COLOR"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][8];
          $procesado[$i][8] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][8] ." \n";
        }
        
      }

      // TALLA
      if( trim($procesado[$i][9]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][9] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "TALLA");

        if($codigos[$j][2] === "TALLA"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][9];
          $procesado[$i][9] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][9] ." \n";
        }
        
      }
      
      // MARCA
      if( trim($procesado[$i][10]) == $codigos[$j][1] ){
        // echo "esto es ". $procesado[$i][10] . " igual a " . $codigos[$j][1]."\n";
        // var_dump($codigos[$j]);
        // var_dump($codigos[$j][2]);
        // var_dump($codigos[$j][2] === "MARCA");

        if($codigos[$j][2] === "MARCA"){
          echo "concuerda,";
          echo " cambie : ". $procesado[$i][10];
          $procesado[$i][10] = $codigos[$j][0];
          echo " a esto : ". $procesado[$i][10] ." \n";
        }
        
      }
      

      // // ahora escribo al archivo
      // $superlinea = $procesado[$i][0].";". $procesado[$i][1].";". $procesado[$i][2].";". $procesado[$i][3].";". $procesado[$i][4].";". $procesado[$i][5].";". $procesado[$i][6].";". $procesado[$i][7].";". $procesado[$i][8].";". $procesado[$i][9].";". $procesado[$i][10].";". $procesado[$i][11].";". $procesado[$i][12].";". $procesado[$i][13].";". $procesado[$i][14].";". $procesado[$i][15].";". $procesado[$i][16].";". $procesado[$i][17].";". $procesado[$i][18].";". $procesado[$i][19].";". $procesado[$i][20].";". $procesado[$i][21].";". $procesado[$i][22].";". $procesado[$i][23].";". $procesado[$i][24].";". $procesado[$i][25];

      // // echo $superlinea;
      // file_put_contents($archivo_escritura_salida, $superlinea, FILE_APPEND | LOCK_EX);

    }
    
    // ahora escribo al archivo
    // for ($i = 0; $i < count($procesado); $i++) {
    //   // NAB36AD4-10422;ZAPATO NIKE AIR FORCE BLANCO CAMALEON;CALZADO;DAMA;ZAPATO;DEPORTIVO;CORTE BAJO;AIR FORCE CAMALEON;CAMALEON;36;NIKE;;;6;;;;;;1;40;0005700003577CI11;1;25998807;;AD4
      $superlinea = $procesado[$i][0].";". $procesado[$i][1].";". $procesado[$i][2].";". $procesado[$i][3].";". $procesado[$i][4].";". $procesado[$i][5].";". $procesado[$i][6].";". $procesado[$i][7].";". $procesado[$i][8].";". $procesado[$i][9].";". $procesado[$i][10].";". $procesado[$i][11].";". $procesado[$i][12].";". $procesado[$i][13].";". $procesado[$i][14].";". $procesado[$i][15].";". $procesado[$i][16].";". $procesado[$i][17].";". $procesado[$i][18].";". $procesado[$i][19].";". $procesado[$i][20].";". $procesado[$i][21].";". $procesado[$i][22].";". $procesado[$i][23].";". $procesado[$i][24].";". $procesado[$i][25];

      // echo $superlinea;
      file_put_contents($archivo_escritura_salida, $superlinea, FILE_APPEND | LOCK_EX);
    // }


  }



