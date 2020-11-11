<?php

namespace models;
/**
 * Classe Model de Usuario
 * @author Felipe Tonini
 */
class Usuario{

    /**
     * Login do usuario
     * @var string
     * 
     */
    public $login;
    /**
     * Nome do usuario
     * @var string
     */
    public $nome;
    /**
     * E-mail do usuario
     * @var string
     */
    public $email;
    /**
     * Celular do usuario
     * @var string
     */
    public $celular;
    /**
     * Identifica se o usuario esta logado ou nao 
     * @var boolean
     */
    public $logado;

    /**
     * Carrega os atributos da classe usuario
     * @param string $login Login do usuario
     * @param string $nome Nome do usuario
     * @param string $email E-mail do usuario
     * @param string $celular Celular do usuario
     * @param string $logado Identifica se o Usuario esta logado ou não
     * @return void
     */


    public function addUsuario($login,$nome,$emil,$celular,$logado)
    $this->login = $login;
    $this->nome = $nome;
    $this->email = $email;
    $this->celular = $celular;
    $this->logado = $logado;
}
?>