<?php

namespace test;

require_once('../uteis/vendor/autoload.php');
require_once('../model/Usuario.php');
require_once('../Controller/Usuario/ControllerUsuarioTest.php');

use PHPUnit\Framework\TestCase;
use models\Usuario;
use controller\ControllerUsuerio;


class ControllerUsuarioTest extends TestCase{
    /**
     * @test
     */
    public function testLogar(){
        $ctrlUsuario = new ControllerUsuario();
        $usuario = new Usuario();
         $usuario -> addUsuario("felipe tonini","felipe", "felipe_tonini2009@hotmail.com", "(49)4998505-6619", TRUE);
    
         try{
            $usuario -> addUsuario("felipe","felipe", "felipe_tonini2009@hotmail.com", "(49)4998505-6619", TRUE);
            $this->assertEquals(
                $usuario,
                $ctrlUsuario->fazerLogin('felipe', '123456')
            );
        }
        catch(\Exception $e){
            $this->fail($e->getMessage());
        }
        unset($usuario);
        unset($daoUsuario);
    }
    public funciton testIncluirUsuario(){
        $ctrlUsuario = new ControllerUsuario();
        try{
            $this->assetEquals(
                TRUE,
                $ctrlusuario->salvarUsuario("Leandro Machado", " leandro@gmail.com.br","(49)99999-9999","leonardo","abc")
            );
        }catch(\Exception $e){
            $this->fail($e->getMessage());
        }
    }
}