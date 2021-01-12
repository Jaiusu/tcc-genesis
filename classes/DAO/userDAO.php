<?php

    require_once("Connection.php");

    class userDAO{

        function __construct(){

            $this -> con = new Connection();

            $this -> pdo = $this -> con -> Connect();

        }

        function cadastrar(usuario $entUsuario){

            try {
                
                $stmt = $this -> pdo -> prepare("INSERT INTO usuario VALUES ('', :us_nome,:us_username, :us_email, :us_instituicao, :us_formacao, :us_sexo, :us_data, :us_hora, :us_ip)");  

                $param = array(

                    ":us_nome" => $entUsuario -> getUs_nome(),
                    ":us_username" => $entUsuario -> getUs_username(),
                    ":us_email" => $entUsuario -> getUs_email(),
                    ":us_instituicao" => $entUsuario -> getUs_instituicao(),
                    ":us_formacao" => $entUsuario -> getUs_formacao(),
                    ":us_sexo" => $entUsuario -> getUs_sexo(),
                    ":us_data" => date("Y/m/d"),
                    ":us_hora" => date("h:i:s"),
                    ":us_ip" => gethostbyaddr($_SERVER['REMOTE_ADDR'])

                );

                return $stmt -> execute($param);

            } catch (PDOException $e) {
                echo "Error 01: {$e -> getMessage()}";
            }

        }

        function consCodUser($us_email){

            try {

                $stmt = $this -> pdo -> prepare("SELECT * FROM usuario WHERE us_email = :us_email");

                $param = array(":us_email" => $us_email);

                $stmt -> execute($param);

                if($stmt -> rowCount() > 0){

                    $consulta = $stmt->fetch(PDO::FETCH_ASSOC);

                    return $consulta["us_cod"];

                }else{

                    return "";

                }

            } catch (PDOException $e) {
                echo "Error 02: {$e -> getMessage()}";
            }

        }
        function consEmail($us_email){

            try {

                $stmt = $this -> pdo -> prepare("SELECT * FROM usuario WHERE us_email = :us_email");

                $param = array(":us_email" => $us_email);

                $stmt -> execute($param);

                if($stmt -> rowCount() > 0){

                    return true;

                }else{

                    return false;

                }

            } catch (PDOException $e) {
                echo "Error 03: {$e -> getMessage()}";
            }

        }
        function login($us_email, $us_senha){

            try {

                $stmt = $this -> pdo -> prepare("SELECT * FROM usuario INNER JOIN senha ON senha.us_cod = usuario.us_cod WHERE usuario.us_email = :us_email AND senha.us_senha = :us_senha");

                $param = array(
                    ":us_email" => $us_email,
                    ":us_senha" => md5($us_senha)
                );

                $stmt -> execute($param);

                if($stmt -> rowCount() > 0){

                    return true;

                }else{

                    return false;

                }

            } catch (PDOException $e) {
                echo "Error 04: {$e -> getMessage()}";
            }

        }
       function delConta($email){

        try {
            $stmt = $this->pdo->prepare("DELETE senha, usuario FROM senha INNER JOIN usuario ON senha.us_cod = usuario.us_cod WHERE us_email = :email");

            $param = array(

                ":email" => $email

            );

            $stmt -> execute($param);

        } catch (PDOException $e) {
            echo "Error 6: {$e -> getMessage()}";
        }
        
       }
        public function returnName($email){
            try {
            $stmt = $this->pdo->prepare("SELECT us_nome FROM usuario WHERE us_email = :email");

            $param = array(

                ":email" => $email

            );

            $dt = $stmt->execute($param);

            $dados = $stmt->fetch(PDO::FETCH_ASSOC);

            return $dados["us_nome"];

         } catch (PDOException $e) {
            echo "Error 05: {$e -> getMessage()}";

            return null;
        }
        }
    }

?>