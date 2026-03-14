<?php
class Connect
{
    private static $hostname = "localhost";
    private static $dbname = "gestiontache";
    private static $username = "root";
    private static $port = "3306";
    private static $password = "";

    public static function getConnection()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$hostname . ";dbname=" . self::$dbname . ";port=" . self::$port, self::$username, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            // echo "Connexion réussie";
        } catch (Exception $e) {
            die("ERREUR DE CONNEXION");
        }
    }
}
