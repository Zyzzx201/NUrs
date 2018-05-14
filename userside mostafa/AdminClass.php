<?php
require_once('db.php');
class admin
{
    public $id;
    public $teacher_id;
    public $username;
    public $passwords;
    public $strategy;

    public function insert()
    {
        $DBObject = new DB();
        $sql = "INSERT INTO admin (teacher_id, username, passwords, strategy) VALUES 
        ( '" . $this->teacher_id . "' ,'" . $this->username . "', '" . $this->passwords . "','".$this->strategy."')";
        $DBObject->connect();
        //SELECT IF (EXISTS (SELECT username,password from admin where username=  AND passwords '" . $this->passwords . "'), 'Valid' , 'Invalid')
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function select()
    {
        $DBObject = new DB();
        $sql = "SELECT * FROM admin where id = '" . $this->id . "' OR teacher_id = '" . $this->teacher_id . "'";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        while ($row = mysqli_fetch_array($result)) {
            echo $row['id'];
            echo $row['teacher_id'];
            echo $row['username'];
            echo $row['passwords'];
            echo $row['strategy'];
        }
        $DBObject->disconnect();
    }

    public function delete()
    {
        $DBObject = new DB();
        $sql = "DELETE FROM admin where id = '" . $this->id . "' OR teacher_id ='" . $this->teacher_id . "'";
        $DBObject->connect();
        $DBObject->execute($sql);
        $DBObject->disconnect();
    }

    public function compare()
    {
        $DBObject = new DB();
        //$sql = "SELECT username, passwords FROM admin WHERE username = '".$this->username."' AND passwords = '".$this->passwords."' LIMIT 1";
        $sql = "SELECT IF (EXISTS (SELECT username,passwords from admin where username='" . $this->username . "' AND passwords '" . $this->passwords . "'), 'Valid' , 'Invalid')";
        $DBObject->connect();
        $result = $DBObject->execute($sql);
        return $result;
        $DBObject->disconnect();
    }
}
?>