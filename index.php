<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <title>Registro de Pedidos 1.0</title>
</head>
<body>
  <header>
    <h2>Registro de pedidos 1.0</h2>
  </header>

  <main class="container">

    <section class="form-section">
      <form id="form-login" action="login.php" method="POST">

        <?php if (isset($resultado) && $resultado["cod"] == 0): ?>
        <div class="alert alert-danger">
          <?php 
            echo $resultado["msg"];
          ?>
        </div>
        <?php endif; ?>

        <div class="email">
          <label for="email">E-mail</label><br>
          <input type="email" id="email" name="email" placeholder="Digite seu email">
        </div>
          
        <div class="password">
          <label for="password">Senha</label><br>
          <input type="password" id="senha" name="password" placeholder="Digite sua senha">
        </div>
  
        <input type="submit" id="submeter" value="Entrar" class="btn btn-primary">
  
      </form>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>