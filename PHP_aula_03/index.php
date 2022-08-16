<?php
    $meuArray=[
        "Nome" =>"Giovanna Laura",
              "Idade" => 18,
              "Time" => "-",
              "Comida favorita" => "Batata recheada"
];
 
       foreach($meuArray as $chave => $valor){
        echo "<p><strong>$chave </strong> $valor </br></p>";
       }
        echo "<br> <table>";
        foreach($meuArray as $chave => $valor){
        echo "<tr><td>$chave </td> <td>$valor</td></tr> ";
        };
        echo "</table>";
    



 //Array associativo 
 /* $array = [

    "nome" => "Juliana",
    "idade" => 17,
    "media" => 10.0

  ];

  //echo "O nome é: "  .$array["nome"].  " <br> a idade é: " .$array["idade"]. " <br> a média é " .$array["media"];

  //Array associativo
  // Percorrendo o array associativo
 /* foreach($array as $chave => $valor){
    echo "<strong> $chave: </strong> $valor <br />";
  }*/

    //print_r($array); --> imprime direto o array


    // Matriz associativa
  /*  $todosAlunos=[
        0 => ["nome" =>"Maria",
              "idade" => 15,
              "media" => 25.5],

        1 => ["nome" => "Mário",
              "idade" => 15,
              "media" => 25]
];

//echo $todosAlunos[0]["nome"];
//echo $todosAlunos[1]["idade"];

//Array associativo
for ($i = 0; $i < 2; $i++){
    foreach($todosAlunos[$i] as $chave => $valor){
        echo "<br> <strong> $chave </strong>: $valor<br />";
    }
}*/

?>