
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Genesis</title>
    
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">

    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
</head>
<body style="background-color: #1b1b1b">
    <div class="sidenav">
        <div class="login-main-text">
           <h2> Recuperação de Senha </h2>
           <p>Esqueceu ou perdeu sua senha? <br>É simples, <b>digite o email cadastrado no campo ao lado, e clique em enviar. Você receberá um email de confirmação.</b>!</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
              <form method="POST">
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Endereço de Email" name="inEmail" required>
                 </div>
                 <button type="button" class="btn btn-secondary">Enviar</button>
              </form>
           </div>
        </div>
     </div>
</body>
</html>

<?php

if(isset($_POST['btnSubmit'])){

    ?>

<script type="text/javascript">

alert("Email de recuperação enviado com sucesso");

</script>

    <?php

    $mail = $_POST['inEmail'];

    $mailCript = base64_encode($_POST['inEmail']);

    $mensagem = "Para recuperar a senha clique no link abaixo: <br> <a href='http://localhost/genesis/funct/redfPass.php?cod={$mailCript}'>Redefinir Senha</a>";

    require_once("envEmail.php");

    enviarEmail($_POST['inEmail'],"Prezado", "Recuperação de Senha", $mensagem);

}

?>
