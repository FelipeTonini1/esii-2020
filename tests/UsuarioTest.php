<?php
namespace tests;

require_once('../uteis/vendor/autoload.php');
require_once('../models/Usuario.php');
require_once('../DAO/DAOUsuario.php');

use PHPUnit\Framework\TestCase;
use models\Usuario;
use dao\DAOUsuario;

class UsuarioTest extends TestCase{
     /**@test */

     public function TestIncluirUsuario(){
         $daoUsuario = new DAOUsuario();
         try{
             $this->assertEquals(
                 TRUE, 
                 $daoUsuario->incluirUsuario("felipe","felipe_tonini2009@hotmail.com","(49)98505-6619","felipe","123456")
             );
             unset($usuario);
         }catch(\Exception $e){
             $this->fail($e->getMessage());
         }
     }
     /**@test */
     public function testLogar(){
         $daoUsuario = new DAOUsuario();
         $usaurio = new Usuario();
         try{
             $usuario -> addUsuario("felipe","felipe", "felipe_tonini2009@hotmail.com", "(49)4998505-6619", TRUE);
             $this->assertEquals(
                 $usuario,
                 $daoUsuario->logar('felipe', '123456')
             );
         }
         catch(\Exception $e){
             $this->fail($e->getMessage());
         }
         unset($usuario);
         unset($daoUsuario);
     }
}
?>