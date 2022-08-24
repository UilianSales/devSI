<?php

    $lista = array("uilicat");
   // echo $lista;


   $nomes = array("Uilicat" , "Rogê" , "Vitoria" , "Matheus" , "Denise");

   /*acessando array manual
   echo $nomes[0]."<br>";
   echo $nomes[1]."<br>";
   echo $nomes[2]."<br>";
   echo $nomes[3]."<br>";
   echo $nomes[4]."<br>";*/


    for($i = 0; $i< count($nomes); $i++)
    {
        //echo $nomes[$i]."<br>";
    }

    $dados = array();
    $dados["Nome"] = array("Uilicat", "Marcos", "Lucas");
    $dados["idade"] = array("18", "30", "20");
    $dados["soltero"] = array(true , false, true);

    for($i = 0; $i<10; $i++){
        $dados[1] = array_push($dados,$i);
    }

    echo "<pre>";
        var_dump($dados);
    echo "</pre>";
    echo $dados[1];


    echo "<pre>";
    var_dump($dados);
    echo "</pre>";x
?> 