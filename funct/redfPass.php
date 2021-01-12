<?php

require_once("../classes/DAO/userDAO.php");
require_once("../classes/DAO/passDAO.php");

$userDAO = new userDAO();
$passDAO = new passDAO();


?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha - Genesis</title>
    
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <script type="text/javascript" src="../js/script.js"></script>

    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
</head>
<body style="background-color: #1b1b1b">
    <div class="sidenav">
        <div class="login-main-text">
           <h2> Redefinição de Senha </h2>
           <p>Deseja alterar sua senha?<br>É simples, <b>Digite sua nova senha nos campos ao lado, e assim poderá facilmente recuperar sua senha</b>!</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
              <form method="POST">
                 <div class="form-group">
                    <label>Senha</label>
                    <input onkeyup="validarSenha('inputPassword', 'inputPass', 'resultCad');" type="password" class="form-control" placeholder="Senha" name="inPass" required>
                 </div>
                 <div class="form-group">
                         <label>Confirmar Senha</label>
                         <input onkeyup="validarSenha('inputPassword', 'inputPass', 'resultCad');" type="password"   placeholder="Confirme a Senha" name="inPassC" class="form-control" id="" required>
                 </div>
                 <button name="btnSubmit" type="button" class="btn btn-secondary">Redefinir</button>
              </form>
           </div>
        </div>
     </div>
</body>
</html>

  <?php

    if(isset($_POST['btnSubmit'])){

        $us_email = base64_decode($_GET['cod']);

        $codUser = $userDAO -> consCodUser($us_email);

        if($passDAO -> redefinirSenha($codUser, $_POST['inPass'])){
?>
    <script type="text/javascript">

            alert("Senha alterada com Sucesso");
            document.location.href="http://localhost/tcc-genesis-main/login.php";
    </script>
<?php
        }else{
?>
            <script type="text/javascript">
        
                    alert("Erro ao alterar a Senha");
        
            </script>
<?php
        }
    }

  ?>