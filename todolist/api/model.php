<?php 
require_once "Database.php";

class model {
    public function getTodos()
    {
        $pdo = $this->getConnection();

        $query = 'SELECT * FROM todos'; 

        $PdoStatement = $pdo->prepare($query);

        $PdoStatement->execute();

      //print_r($PdoStatement->fetchAll());

      return $PdoStatement->fetchAll();
    }

    public function createTodo($todo)
    {
        $pdo= $this->getConnection();

        $query='INSERT INTO todos (title, description) VALUES ( :title, :description)';

        $PdoStatement = $pdo->prepare($query);
        
        return $PdoStatement ->execute($todo);
    }

public function updateTodo($todo)
    {
        $pdo= $this->getConnection();

        $query='UPDATE todos SET (title=:title,description=:description) WHERE(id=:id)';

        $PdoStatement=$pdo->prepare($query);
        return $PdoStatement -> execute($todo);
    }

    public function deleteTodo($todo)
    {
        $pdo = $this->getConnection();

        
        $query = 'DELETE FROM todo WHERE id = :id';

        $PdoStatement = $pdo->prepare($query);

       
        $values = [
            'id' => $todo['id'],
        ];

        return $PdoStatement->execute($values);
    }

    private function getConnection()
    {
        // on va créer une nouvelle instance de Database
        $db = new Database();
        // ici je retourne un objet PDO que je pourrai utiliser pour mes requêtes
        return $db->connect();
    }
}
//$model = new Model();

//$response = $model->deleteTodo([
   // 'id' => '4',
    //'description' => 'description méthode create',
//]);

//var_dump($response);

//$model->getTodos();



