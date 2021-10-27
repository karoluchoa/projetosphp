<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> www.Formulário de contat.com </title>
  <link rel="stylesheet" type="text/css" href="bootstrap/CSS/bootstrap.min.css">
</head>
<body>
  <h1><center><font face="Arial">Entre em contato conosco!</font><center></h1>

  <style type="text/css">
    body{
      background-color: #add8e6 
    }
  </style>
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   <section>
    <div class="container">
    <div class="row">
    <div class="col-6">
        <div class="form-floating mb-3">
          <form method="post" action="valida.php">
            <input type="name" class="form-control" id="floatingInput" placeholder="name@example.com" name="nomecompleto"> 
            <label for="floatingInput"> Seu nome completo </label>
            </div>
            <br>
            <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingPassword" placeholder="password" name="email">
            <label for="floatingPassword"> Seu email </label>
            </div>
            <br>
            <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="password" name="fone">
            <label for="floatingInput"> Telefone </label>
            </div>

    </div>
    <div class="col-6">
      <div class="input-group">
  <span class="input-group-text">Digite uma mensagem</span>
  <textarea class="form-control" aria-label="With textarea" name="mensagem"></textarea>
  <form>
</div>
    </div>
    </div>
      <button type="button" class="btn btn-primary">Enviar mensagem</button>
    </div>
   </section>
</body>
</html>