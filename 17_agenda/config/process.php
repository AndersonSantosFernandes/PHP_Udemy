<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if (!empty($data)) { //Se a variável $data não estiver vazia executa o primeiro bloco de código.

    //criar contato
    if ($data["type"] === "create") { //Criar um novo contato.
        $name = $data["name"];
        $phone = $data["phone"];
        $email = $data["email"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, email, observation) VALUES (:name,  :phone, :email, :observation)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":observation", $observations);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato salvo com sucesso!";
            // $_SESSION["msg"] = "<script>
            //                     window.alert('Contato salvo com sucesso');
            //                     </script>";
        } catch (PDOException $e) {
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } elseif ($data["type"] === "edit") { //Edição do contato selecionado
        $name = $data["name"];
        $phone = $data["phone"];
        $email = $data["email"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts 
                    SET name = :name, phone = :phone, email = :email, observation = :observation
                    WHERE id = :id
                    ";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam("email", $email);
        $stmt->bindParam(":observation", $observations);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato editado com sucesso!";
        } catch (PDOException $e) {
            //erro na conexao
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } elseif ($data["type"] === "delete") { //Deletar o contato selecionado
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

} else {
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    //retorna todos contatos
    if (!empty($id)) { //Se pelo GET vier um id será retornado apenas uma linha
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    } else {
        //retorna todos contatos caso o GET esteja vazio.
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

<!-- <form action="" method="POST">
    <div class="form-control">
        <input type="hidden" name="type" value="delete">
        <label for="check">Marque para confirmar</label>
        <input type="checkbox" name="check" id="">
        <input type="submit" value="Processar">
    </div>
</form> -->