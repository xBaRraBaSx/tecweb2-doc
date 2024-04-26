<?php

include_once 'Login.php' ;
class LoginDAO extends Login {
    //atributo
    private $tabela = "login";
    
    //Método Login - verifica la autenticación del usuario en el sistema
    public function logar(Login $login) {
        $sql = "SELECT * FROM $this->tabela WHERE  usuario = ? AND senha = ? ";
        $stmt = Login::preparaSQL($sql);
        $stmt->bindvalue(1, $login->getUsuario());
        $stmt->bindvalue(2, $login->getSenha());
        $stmt->execute();
        if($stmt->rowCount()){
            $dados = $stmt->fetch(PDO::FETCH_OBJ);
            $_SESSION["usuario"] = $dados->nome_completo;
            $_SESSION["autenticado"] = TRUE; 
            RETURN TRUE;
        }else{
            return false;
        }
    }
    //Método Logout - verifica si existe el login y lo destruye
    public static function deslogar(){
        if($_SESSION["autenticado"]){
            session_unset();
            session_destroy();
            header("localition:index.php");
        }
    }
}
