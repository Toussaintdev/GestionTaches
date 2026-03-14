<?php
require_once "../entity/Utilisateur.php";
require_once "../config/connect.php";

class UtilisateurDAO{
    public static function create($user){
        $conn = Connect::getConnection();
        $sqlQuery = "INSERT INTO users(NOMUSER, PRENOMUSER, LOGIN, PASSWORD, EMAIL, NUMERO)".
                    "VALUES(:nom, :prenom, :login, :password, :email, :numero)";
        $data = ["nom"=>$user->getNom(), "prenom"=>$user->getPrenom(), "login"=>$user->getLogin(), "password"=>$user->getPassword(), "email"=>$user->getEmail(), "numero"=>$user->getNumero()];
            $reponse = $conn->prepare($sqlQuery);
            $reponse->execute($data);
    }

    public static function getUser($login, $password){

    }

    public static function getById($idUser){

    }

    public static function modify($user){

    }

}