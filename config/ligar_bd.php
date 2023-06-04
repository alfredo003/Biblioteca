<?php
define('usuario', 'root');
define('senha', '');
define('Host', 'mysql:host=localhost;dbname=biblioteca');
 
class Ligar{
    private static $conn = null;
    public static function conectar() {
        try {
            self::$conn = new PDO(Host, usuario, senha);
        } catch (exception $erro) {
            //echo '<script type = "text/javascript">alert("Ocorreu um erro na conexão");location.href="index.php";</script>';
            //print_r($erro);

            //echo "<center><h2>Ocorreu um erro de conexao</h2></center><br><center><h3>Contacte o Administrador do Sistema</h3></center>";
        }
        return self::$conn;
    }
    public static function chamar_bd() {
        return(self::$conn == null) ? self::conectar() : self::$conn;
    }

}