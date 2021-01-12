<?php

class usuario{

    private $us_cod;

    private	$us_nome;

    private $us_username;   

    private	$us_email;

    private $us_instituticao;

    private $us_formacao;

    private	$us_sexo;

    private	$us_data;

    private	$us_hora;

    private	$us_ip;

	public function getUs_cod() {
        return $this -> us_cod;
    }

    public function getUs_nome() {
        return $this -> us_nome;
    }

    public function getUs_username() {
        return $this -> us_username;
    }

    public function getUs_email() {
        return $this -> us_email;
    }

    public function getUs_instituicao() {
        return $this -> us_instituticao;
    }

    public function getUs_formacao() {
        return $this -> us_formacao;
    }

    public function getUs_sexo() {
        return $this -> us_sexo;
    }

    public function getUs_data() {
        return $this -> us_data;
    }

    public function getUs_hora() {
        return $this -> us_hora;
    }

    public function getUs_ip() {
        return $this -> us_ip;
    }

    public function setUs_cod($us_cod) {
        $this->us_cod = $us_cod;
    }

    public function setUs_nome($us_nome) {
        $this->us_nome = $us_nome;
    }

    public function setUs_username($us_username) {
        $this->us_username = $us_username;
    }

    public function setUs_email($us_email) {
        $this->us_email = $us_email;
    }

    public function setUs_instituicao($us_instituticao) {
        $this->us_instituticao = $us_instituticao;
    }

    public function setUs_formacao($us_formacao) {
        $this->us_formacao = $us_formacao;
    }

    public function setUs_sexo($us_sexo) {
        $this->us_sexo = $us_sexo;
    }

    public function setUs_data($us_data) {
        $this->us_data = $us_data;
    }

    public function setUs_hora($us_hora) {
        $this->us_hora = $us_hora;
    }

    public function setUs_ip($us_ip) {
        $this->us_ip = $us_ip;
    }




}

?>