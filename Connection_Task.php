<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:30 PM
 */

class Connection_Task
{
    private $conn;
    public function __construct()
    {
        $this->conn=new PDO("mysql:host=localhost;dbname=test","testuser","1");
    }
    public function GetConnection(){return $this->conn;}

    public function SaveMessage($msg){
        try{
            $statement= $this->conn->prepare("INSERT INTO tasks (Task,Description) VALUES (:task,:description)");
            $statement->execute(
                array(
                    ':task'=> $task,
                    ':description'=>$description

                )
            );
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    public function Register($name,$email,$password){
        try{
            $statement= $this->conn->prepare("INSERT INTO admin2 (name,email,password) VALUES (:name,:email,:password)");
            $statement->execute(
                array(
                    ':name'=> $name,
                    ':email'=>$email,
                    ':password'=>$password

                )
            );
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }

    public  function LogIN($email,$password)
    {

        try{
            $query= "SELECT * FROM admin2 where email='".$email."' And password='".$password."'";
            $result = $this->conn->prepare($query);
            $result->execute();
        //  print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }

    }

    public  function GetMessages()
    {

        try{
            $query= "SELECT * FROM tasks";
            $result = $this->conn->prepare($query);
            $result->execute();
            //  print_r($result->fetchAll());
            return $result->fetchAll();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }

    }

    public function DeleteMsg($id){
        try{
            $query= "DELETE FROM tasks where Task=".$Task;
            $result = $this->conn->prepare($query);
            $result->execute();
        }
        catch(Exception $ex){
            echo "Invalid<br>";
        }

    }

    function UpdateMessage($Description,$Task)
    {
        try{
            $statement= $this->conn->prepare("UPDATE Messages SET IsImportant=:isimp where Task=".$Task);
            $statement->execute(
                array(
                    ':isimp'=>$ismarked

                )
            );
        }
        catch (Exception $ex){
            echo "<br>Error in Inserting Data";
        }
    }
}
?>