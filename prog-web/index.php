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
      echo "Primeira execução"."<br>";
      $A = "Bom";
      $B = "Dia";
      echo $A . $B ; //concatenação
      echo "<br>";
      print 
      var_dump($A); //mostra o tipo e o valor da variável
      echo "<br>";
      echo "Hoje " , " Eh" , " Quinta", " -" , " Feira";
      echo "<br>";
      // print "Hoje " , "Eh" , "Quinta", "-" , "Feira"; //o print exibe apenas uma coisa. a nao ser que eu concatene um na frente do outro com "." pois "," significa parametro e "." significa concatenação
      //uma variavel pode ter seus valores alterados
      $a = "Eh Uma String";
      var_dump($a);//mostra que a variavel é uma string
      echo "<br>";
      $a = 10;
      var_dump($a);//mostra que a variavel é um inteiro
      echo "<br>";
    ?>

	<script src="bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
