<?php

function enviarEmail($email, $nome, $assunto, $mensagem) {

    $servidor = "smtp.gmail.com";
    $porta = 587;
    $usuarioServidor = "pandmr949@gmail.com";
    $senhaServidor = "jhonbruno11";

    $usuario = $nome;
    $emailusuario = $email;

    require_once("../classes/phpMailer/PHPMailerAutoload.php");
    require_once("../classes/phpMailer/class.phpmailer.php"); //Aqui vem o diretório da classe.
    $mail = new PHPMailer();
    $mail->SMTPSecure = 'tls';
    $mail->IsSMTP(true); // telling the class to use SMTP
    $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Host = $servidor; // sets the SMTP server
    $mail->Port = $porta; // set the SMTP port for the GMAIL server

    $mail->Username = $usuarioServidor; // SMTP account username
    $mail->Password = $senhaServidor; // SMTP account password

    $mail->SetFrom($usuarioServidor, $assunto);

    $mail->Subject = $assunto; //assunto
    $mail->IsHTML(true);
    $mail->AltBody = "Para ler esta mensagem, por favor utilize um leitor que suporte HTML"; // optional, comment out and test

    $mail->MsgHTML($mensagem);

    $mail->AddAddress($emailusuario, $usuario); //Primeiro parâmetro email do usuário e segundo nome.
    if ($mail->Send()) {
        ?>
        <script>
            alert("Enviamos para seu e-mail informações de como redefinir a senha de sua conta.");
        </script>
        <?php

    } else {
        ?>
        <script>
            alert("Houve um erro ao tentar enviar um e-mail, tente novamente.");
        </script>
        <?php

    }
}
?>