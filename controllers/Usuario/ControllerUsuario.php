<?php

namespace controller;

$separador = DIRECTORY_SEPARATOR;
$root = $_SERVER['DOCUMENTE_ROOT'];

require_once($root.'../DAO/DAOUsuario.php');

use DAO\DAOUsuario;

/**
 * Esta classe serve para tratar as regras de negocio pertinentes a classe
 * classe usaurio
 * seu escopo limita-se as funções da entidade usuarios
 * 
 * @author Felipe Tonini
 *
 */class ControllerUsuario{
     /**
      * Recebe os dados de login, faz o devido tratamento e envia apora o dao executar no banco de dados 
      * @param string $login Login do usuario 
      * @param string $senha Senha do usuario
      * @return Usuario
      */
      public function fazerlogin($login, $senha){
          $daoUsuario = new DAOUsuario();
          try{
              $usuario - $daoUsuario->logar($login,$senha);
          }catch(\Exception $e){
            throw new \Exception($e->getMessage());
          }
          unset($daoUsuario);
          return $usuario
          
      }
      /**
       * Rece e trata os dados do usuario e envia para o DAO
       * gravar no banco de dados
       * 
       * 
       * @param string $nome Nome do Usuario
       * @param string $email Email do Usuario
       * @param string $celular Celular do Usuario
       * @param string $login Login do Usuario
       * @param string $senha Senha do Usuario
       * @return TRUE|Exception Retorna TRUE caso a inclusão tenha sido bem sucedidade ou uma Execptiom caso não tenha. 
       * 
       */
      public function salvarUsuario($nome,$email,$celular,$login,$senha){
          $daoUsuario = new DAOUsuario();
          try{
              $daoUsuario->incluirUsuario($nome,$email,$celular,$login,$senha);
          }catch(\Exception $e){
              throw new \Exception($e->getMessage());
          }
      }
 }
 ?>