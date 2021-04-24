<?php  

function connection() {
  try {
    $connection = new PDO('mysql:host=teste.cvbeswlpgxrp.us-east-1.rds.amazonaws.com;port=3306;dbname=Caduser','root','password');
    return $connection;
  } catch (Exception $error) {
    echo "Ocorreu o seguinte erro: {$error->getMessage()}";
  }
}
