<?php

     class usuarios{

                private $idusuario;
                private $deslogin;
                private $dessenha;
                private $tbcadastro;


                public function getIdUsuario(){

                    return $this->idusuario;
                }

                public function setIdUsuario($var){

                    $this->idusuario = $var;
                }

                


                public function getDesLogin(){

                    return $this->deslogin;
                }

                public function setDesLogin($var){

                    $this->deslogin = $var;
                }

                


                public function getDesSenha(){

                    return $this->dessenha;
                }

                public function setDesSenha($var){

                    $this->dessenha = $var;
                }

                

                
                public function getTbUsuarios(){

                    return $this->tbusuarios;
                }

                public function setTbUsuarios($var){

                    $this->tbusuarios = $var;
                }

                public function LoadById($id):array
                {

                    $sql = new sql();

                // $result = $sql->select(" SELECT *FROM tb_usuarios WHERE idusuarios = $this->idusuario");

                $result = $sql->select(" SELECT * FROM tb_usuarios 
                WHERE idusuarios = :ID", array( ":ID"=> $id));


                if( count($result) > 0 ){

                    $row = $result[0];

                    $this->setIdUsuario( $row[ 'idusuario']); // metodo  pega os dados e colocara em cada campo .
                    $this->setDesLogin( $row[ 'deslogin']);
                    $this->setDesSenha( $row[ 'dessenha']);
                    $this->setTbUsuarios( new DateTime($row[ 'tbusuarios']));
                    
            

                }


            }

            public function __toString(){   // transformara os dados do banco em string.

                return json_encode( array(   // trara as informações em forma de array

                    "id"=>$this->getIdUsuario,    // os metodos buscara as informações.
                    "login"=>$this->getDesLogin,
                    "senha"=>$this->getDesSenha,
                    "tabela"=>$this->getTbUsuarios

                ));
            }
        
 
    }

?>