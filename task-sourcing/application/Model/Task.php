<?php

/**
 * Class Task
 *
 * TODO: Create CRUD for tasks. 
 */

namespace Mini\Model;

use Mini\Core\Model;
use PDOException;

class Task extends Model
{
    /**
     * Get all tasks from database
     */
    public function getAllTasks(){
        $sql = "SELECT * FROM tasks_owned";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    //TODO: Fill into correct sql and correct parameters.
    public function getTaskById($task_id)
    {
        $sql = "SELECT * FROM tasks_owned WHERE task_id = :task_id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':task_id' => (int)$task_id
        );
        $query->execute($parameters);
        return ($query->fetchAll())[0];
    }

    
    public function getTaskByPartialName($task_name)
    {
        $sql = "SELECT * FROM tasks_owned WHERE task_name LIKE :task_name" ;
        $query = $this->db->prepare($sql);
        $parameters = array(':task_name' => '%'.$task_name.'%');
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function getBidsByTask($task_id)
    {
        $sql = "SELECT * FROM bids WHERE task_id = :task_id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':task_id' =>  (int)$task_id
        );
        try {
            $query->execute($parameters);
            return $query->fetchAll();
        } catch (PDOException $e) {
            return null;
        }
    }

    //TODO: Fill into correct sql and correct parameters.
    public function createTask($name, $description, $point, $owner_email) {
        $sql = "INSERT INTO tasks_owned (task_name, expect_point, description, owner_email) VALUES (:task_name, :expect_point, :description, :owner_email)";
        //echo $sql;
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':task_name' => $name,
            ':expect_point' => (int)$point,
            ':description' => $description,
            ':owner_email' => $owner_email
        );
        try {
            $query->execute($parameters);
            return $sql;
        } catch (PDOException $e) {
            return false;
        }
    }

    //TODO: Fill into correct sql and correct parameters.
    public function updateTask($task_id, $name, $description, $point) {
        $sql = "UPDATE tasks_owned SET task_name = :task_name, expect_point = :expect_point, description = :description WHERE task_id = :task_id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':task_name' => $name,
            ':expect_point' => (int)$point,
            ':description' => $description,
            ':task_id' =>  (int)$task_id
        );
        try {
            $query->execute($parameters);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    //TODO: Fill into correct sql and correct parameters.
    public function deleteTask($task_id) {
        $sql = "DELETE FROM tasks_owned WHERE task_id = :task_id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':task_id' =>  (int)$task_id
        );
        try {
            $query->execute($parameters);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    

    public function getWinnerEmail($task_id) {
        $sql = "SELECT assignee_email FROM assign WHERE task_id = :task_id";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':task_id' =>  (int)$task_id
        );
        try {
            $query->execute($parameters);
            return ($query->fetchAll());
        } catch (PDOException $e) {
            return null;
        }
    }
}
