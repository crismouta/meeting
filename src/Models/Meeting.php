<?php

namespace App\Models;

use App\Connection;
use PDO;

class Meeting {
    private ?int $id;
    private string $coder;
    private string $topic;
    private ?string $mytime;
    
    private $connection;

    public function __construct(string $coder = '', string $topic = '', string $mytime = '', int $id = NULL)
    {
        
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        $this->id = $id;
        $this->connection = new Connection();
    }

    public function getList()
    {
        $sql = "SELECT * FROM `meeting`";
        $query = $this->connection->mysql->query($sql);
        $meetingArray = $query->fetchAll();
        $meetingList = [];

        foreach($meetingArray as $meeting){
            $meetingItem = new Meeting ( $meeting['coder'], $meeting['topic'], $meeting['mytime'],$meeting['id'],);
            array_push($meetingList, $meetingItem);
        }
        return $meetingList;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCoder()
    {
        return $this->coder;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getTimeDate()
    {
        return $this->mytime;
    }

    public function insertItem()
    {
        $sql = "INSERT INTO `meeting`(coder, topic) VALUES ('$this->coder', '$this->topic') ";
        $this->connection->mysql->query($sql);
    
    }

    public function rename($coder, $topic)
    {
        $this->coder = $coder;
        $this->topic = $topic;

    }

    public function update()
    {
        $sql = "UPDATE meeting SET `coder` = '{$this->coder}', `topic` = '{$this->topic}' WHERE `id` = {$this->id}";     
        $this->connection->mysql->query($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM `meeting` WHERE `meeting`.`id`= {$this->id}";
        $this->connection->mysql->query($sql);
    }

    
    public function findById($id)
    {
        $query = $this->connection->mysql->query("SELECT * FROM `meeting` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Meeting($result[0]["coder"], $result[0]["topic"], $result[0]["mytime"] ,$result[0]["id"]);
    }



/*     public function insert($coder, $topic, $mytime) 
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        
        $sql = "INSERT INTO meeting(coder, topic, mytime) VALUE(?,?,?)";
        $insert = $this->connection->prepare($sql);
        $arrayData = array($this->coder, $this->topic, $this->mytime);
        $resultInsert = $insert->execute($arrayData);
        $idInsert = $this->connection->lastInsertId();
        return $idInsert;
    
    }

    public function getList()
    {
        $sql = "SELECT * FROM meeting";
        $execute = $this->connection->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }

    public function update($id, $coder, $topic, $mytime)
    {
        $this->coder = $coder;
        $this->topic = $topic;
        $this->mytime = $mytime;
        $sql = "UPDATE meeting SET coder=?, topic=?, mytime=? WHERE id=$id";
        $update = $this->connection->prepare($sql);
        $arrayData = array($this->coder, $this->topic, $this->mytime);
        $resultExecute = $update->execute($arrayData);
        return $resultExecute;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM meeting WHERE id = ?";
        $arrayWhere = array($id);
        $execute = $this->connection->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    } 

    public function delete($id)
    {
        
        $sql = "DELETE FROM meeting WHERE id=?";
        $arrayWhere = array($id);
        $delete = $this->connection->prepare($sql);
        $resultDelete = $delete->execute($arrayWhere);
        return $resultDelete;
    } */
} 
