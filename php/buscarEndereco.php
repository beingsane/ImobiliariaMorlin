<?php

class localidade 
{
  public $endereco;
  public $cidade;
  public $bairro;
}

try
{
  require "conexaoMySQL.php";
  
  $localidade = "";
  $cep = "";
  if (isset($_POST["cep"]))
    $cep = $_POST["cep"];
  
  $SQL = "
    SELECT endereco, cidade, bairro
    FROM cliente
  ";
  
  if (! $result = $conn->query($SQL))
    throw new Exception('Ocorreu uma falha ao buscar a localidade: ' . $conn->error);
    
  if ($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
    
    $localidade = new localidade();
    
    $localidade->endereco = $row["endereco"];
    $localidade->cidade = $row["cidade"];
    $localidade->bairro = $row["bairro"];

  } 
  
  $jsonStr = json_encode($localidade);
  echo $jsonStr;
  
}
catch (Exception $e)
{
  $msgErro = $e->getMessage();
}


if ($conn != null)
  $conn->close();

?>