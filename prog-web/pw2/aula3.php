<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
	<link href="bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello, world!</h1>	 
    <?php
     /*$str = "Hello fri3nd, you're
     looking          good today!";

        print_r(str_word_count($str, 1));
        echo "<br>";
        print_r(str_word_count($str, 2));
        echo "<br>";
        print_r(str_word_count($str, 1, 'àáãç3'));
        echo "<br>";
        echo str_word_count($str);
        echo "<br>";*/

        $frase = "isso e uma frase uma outra uma";
        $palavra = "uma";
        $result = -1;
        $pos = 0;
        $posicoes = array();

        do {
           $result = strpos($frase , $palavra , $pos);
           //echo "Resultado: $result <br>";

           if ($result != false){
            $pos = $result + 1;
            array_push($posicoes , $result);
           }
            
        }while($result != false);

        echo strtoupper($frase) . "<br>";
        echo strtolower($frase) . "<br><br>";


        echo "$frase <br>";
        echo "As posicoes encontradas foram: ";
        var_dump($posicoes);

        echo "<br>";

        $array = array (4,5,6,"luis",3.1415); //array de varios tipos
        var_dump($array);

    ?>

	<script src="bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
