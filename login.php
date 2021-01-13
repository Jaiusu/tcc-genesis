<?php

session_start();

require_once("classes/DAO/userDAO.php");

$userDAO = new userDAO();

if($_SESSION['login'] == 1){
   ?>
      <script type="text/javascript">

      var txt;
      if (confirm("Você já está logado, deseja sair?")){
      document.location.href="index.php?user=2"
      }else{
      document.location.href="index.php"
      }

      </script>
   <?php
   }

if(isset($_POST['btnSubmit'])){

   if($userDAO -> login($_POST['inEmail'], $_POST['inPass'])){

   $_SESSION['login'] = 1;

   header("Location: index.php");

}else{
   ?>

   <script type="text/javascript">

   alert("Email ou senha inválidos");

   </script>

<?php
}
}

if (isset($_GET['user'])) {
   
   switch ($_GET['user']) {
      case '1':

         ?>
         <script type="text/javascript">

         alert("Você ainda não está logado");

         </script>
      <?php

         break;

      case '2':

         $_se

         ?>
         <script type="text/javascript">

            alert("Deslogado com sucesso");

         </script>

      <?php
         
         break;

      case '3':
         ?>
         <script type="text/javascript">

            alert("Sua conta foi bloqueada ou excluida");

         </script>
      <?php

         break;
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Genesis</title>
    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">

    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="js/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body style="background-color: #1b1b1b">
    <div class="sidenav">
        <div class="login-main-text">
           <h2>Login<br> Membro Genesis</h2>
           <p>Entre com sua conta ou faça seu cadastro.<br>É totalmente <b>gratuito</b>!</p>
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
                 <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" placeholder="Senha" name="inPass" required>
                 </div>

                 <div class="form-group"><a href="funct/recupPass.php"><p>Esqueceu a senha?</p></a></div>
                  
                 <button type="submit" class="btn btn-black" name="btnSubmit">Login</button>
                 <a href="register.php"><button type="button" class="btn btn-secondary">Cadastro</button></a>

              </form>
           </div>
        </div>
     </div>
</body>
</html>
