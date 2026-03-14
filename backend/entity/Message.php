<?php
class Message{
    private $idMessage;
    private $idUserSender;
    private $idUserReceiver;
    private $message;
    private $dateEnvoie;
    private $etatMessage;

    function __construct($idMsg, $idUserS, $idUserR, $msg, $dateE, $etat){
        $this->idMessage = $idMsg;
        $this->idUserSender = $idUserS;
        $this->idUserReceiver = $idUserR;
        $this->message = $msg;
        $this->dateEnvoie = $dateE;
        $this->etatMessage = $etat;
    }

    function getIdMessage(){
        return $this->idMessage;
    }

    function getIdUserSender(){
        return $this->idUserSender;
    }

    function getIdUserReceiver(){
        return $this->idUserReceiver;
    }

    function getMessage(){
        return $this->message;
    }

    function setMessage($message){
        $this->message = $message;
    }
    
    function getDateEnvoie(){
        return $this->dateEnvoie;
    }

    function setDateEnvoie($dateEnvoie){
        $this->dateEnvoie = $dateEnvoie;
    }
    
    function getEtatMessage(){
        return $this->etatMessage;
    }

    function setEtatMessage($etatMessage){
        $this->etatMessage = $etatMessage;
    }
    
}
