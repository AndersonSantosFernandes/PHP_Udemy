<?php

class Message{

    private $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function setMessage($msg, $type, $redirect = "index.php"){

        $_SESSION['msg'] = $msg;
        $_SESSION['type'] = $type;

        if($redirect != "back"){
            header("location: $this->url" . $redirect);
        }
        else
        {
            header("location: " . $_SERVER['HTTP_REFERER']);// LEVA PARA ULTIMA URL ACESSADA CASO A SOLICITAÇÃO NÃO SEJA ATENDIDA.
        }
    }
    public function getMessage(){
        if(!empty($_SESSION['msg'])){
            return[
                "msg"=>$_SESSION['msg'],
                "type"=>$_SESSION['type']
            ];
        }else{
            return false;
        }
    }
    public function clearMessage(){
        
    }

}

?>