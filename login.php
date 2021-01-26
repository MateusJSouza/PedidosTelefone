<?php
  if (count($_POST) > 0) {
    // 1. Pegar os valores do formulário
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // 2. Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "root";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=restaurante_bd", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";

      $stmt = $conn->prepare("SELECT codigo FROM usuario WHERE email=:email AND senha=md5(:senha)");
      $stmt ->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt ->bindParam(':senha', $senha, PDO::PARAM_STR);
      $stmt->execute();
    
      // set the resulting array to associative
      $result = $stmt->fetchAll();
      $qtd_users = count($result);
      if ($qtd_users == 1) {
        // TODO substituir pelo redirecionamento.
        $resultado["msg"] = "E-mail e senha conferem!";
        $resultado["cod"] = 1;
      } else if ($qtd_users == 0){
        $resultado["msg"] = "E-mail e senha não conferem!";
        $resultado["cod"] = 0;
      }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;

    // 3. Verificar se e-mail e senha estão no BD
  }
  include("index.php");

?>