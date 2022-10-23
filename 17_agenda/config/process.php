<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if(!empty($data)){ //Se a variável $data não estiver vazia executa o primeiro bloco de código.
print_r($data);
//criar contato
    if($data["type"] === "create"){
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name,  :phone, :observation)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observations);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato salvo com sucesso!";
        }catch(PDOException $e){
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }        
    }
    elseif($data["type"] === "edit"){
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts 
                    SET name = :name, phone = :phone, observation = :observation
                    WHERE id = :id
                    ";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observations);
        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato editado com sucesso!";
        }catch(PDOException $e){
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }        
    } elseif($data["type"] === "delete"){
        $id = $data['id'];

        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION["msg"] = "Contato deletado com sucesso!";
        }catch(PDOException $e){
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        } 


    }
    //Redirect home.
    header("location:" . $_BASE_URL . "../index.php");

}
else
{
    $id;
    if(!empty($_GET)){
        $id = $_GET["id"];
    }
    //retorna todos contatos
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    }
    else
    {
    //retorna todos contatos
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}
//fechar conexao no PDO:
$conn = null;

?>