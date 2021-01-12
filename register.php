<?php

require_once("classes/DAO/userDAO.php");
require_once("classes/Entidade/usuario.php");

require_once("classes/DAO/passDAO.php");
require_once("classes/Entidade/senha.php");

$userDAO = new userDAO();
$passDAO = new passDAO();

$usuario = new usuario();
$senha = new senha();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Genesis</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script type="text/javascript" src="js/script.js"></script>

    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
</head>

<body style="background-color: #1b1b1b">
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Cadastro<br> Novo membro Genesis</h2>
            <p>Entre com sua conta ou faça seu cadastro.<br>É totalmente <b>gratuito</b>!</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="register-form">
                <form method="POST">
                    <div class="form-group">
                        <label>Nome completo *</label>
                        <input type="text" class="form-control" placeholder="Nome completo" name="inName" required>
                    </div>
                    <div class="form-group">
                        <label>Usuário *</label>
                        <input type="text" class="form-control" placeholder="Nome de usuário" name="inUser" required>
                    </div>
                    <div class="form-group">
                        <label>Instituição de Ensino/Trabalho</label>
                        <input type="text" class="form-control" placeholder="Nome da instituição" name="inInst">
                    </div>
                    <div class="form-group">
                        <label>Nível de Formação Acadêmica</label>
                        <input type="text" class="form-control" placeholder="Formação acadêmica" name="inFormAc">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" class="form-control" placeholder="Endereço de email" name="inEmail" required>
                    </div>
                    <div class="form-group">
                        <label>Senha *</label>
                        <input onkeyup="validarSenha('inputPassword', 'inputPass', 'resultCad')" type="password" class="form-control" id="inputPassword" name="inPass" placeholder="Senha (Mínimo 8 dígitos)" required>
                    </div>
                    <div class="form-group">
                        <label>Repetir Senha *</label>
                        <input type="password" onkeyup="validarSenha('inputPassword', 'inputPass', 'resultCad')"  id="inputPass" name="inPassC" class="form-control" placeholder="Repetir senha" required>
                    </div>
                    <div class="form-group">
                        <label> Sexo </label>
                        <select name="sexo" id="inputSexo">

                        <option value="m" class="form-control"> Masculino </option>
                        <option value="f" class="form-control"> Feminino </option>
                        <option value="n" class="form-control"> Não definido </option>

                        </select>
                    </div>
                    <div class="form-group">

                        <p class="form_control" id="resultCad">&nbsp;</p>

                    </div>
                    <button type="submit" name="btnSubmit" class="btn btn-black">Cadastrar</button>
                    <a href="login.php"><button type="button" class="btn btn-secondary">Tenho uma conta</button></a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php

if(isset($_POST['btnSubmit'])){

    $usuario -> setUs_nome($_POST['inName']);
    $usuario -> setUs_username($_POST['inUser']);
    $usuario -> setUs_email($_POST['inEmail']);
    $usuario -> setUs_sexo($_POST['sexo']);
    $usuario -> setUs_instituicao($_POST['inInst']);
    $usuario -> setUs_formacao($_POST['inFormAc']);


    if(!$userDAO -> consEmail($_POST['inEmail'])){

    if($userDAO -> cadastrar($usuario)){

      $codUser = $userDAO->consCodUser($_POST['inEmail']);

      $senha -> setUs_senha($_POST['inPassC']);
      $senha -> setUs_cod($codUser);

      if($passDAO -> cadastrar($senha)){
  ?>
        <script type="text/javascript">

          document.getElementById("resultCad").innerHTML = "Cadastrado com Sucesso";
          document.getElementById("resultCad").style.color = "green";

        </script>
  <?php
      }else{

  ?>
          <script type="text/javascript">
  
          document.getElementById("resultCad").innerHTML = "Erro ao Cadastrar";
          document.getElementById("resultCad").style.color = "red";
  
  
          </script>
  <?php
  
      }    
}
}else {
  ?>
  <script type="text/javascript">

  document.getElementById("resultCad").innerHTML = "Email já cadastrado";
  document.getElementById("resultCad").style.color = "red";


  </script>
<?php
}
}
?>