<?php
class Message 
{    
    private $pdo;

    //initialize database connection in the constructor
    function __construct()
    {             
      $host = 'localhost';      //where is the mysql database? 
      $username = 'root';       //username to connect to mysql db

      $password = '';           //password for mysql

      $database = 'contact';    //please make a mysql database named college
      $dsn="mysql:host=$host;dbname=$database";
      $this->pdo = new PDO($dsn, $username, $password);

      if(!$this->pdo) {
        echo 'Could not connect to the database.<br/>Please check database connection parameters and try again. '; exit;
      }

    }
    //1. create function to insert data
    public function create($message_id, $fullname, $email, $telephone,$message)
    {
        $sql = "INSERT INTO messages (message_id,fullname,email,telephone,message) VALUES (:message_id,:fullname,:email,:telephone,:message)";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(':message_id', $message_id);
        $query->bindParam(':fullname', $fullname);
        $query->bindParam(':email', $email);
        $query->bindParam(':telephone', $telephone);
        $query->bindParam(':message', $message);
        $ret = $query->execute();
        echo '<br/>' . count($ret) . ' records created. Full name =' . $fullname;             
    }

   //2. update function to update data
    public function update($message_id, $fullname, $email, $telephone,$message)
    {
      
    }

    //3. delete
    public function delete($message_id){
        $sql = "DELETE FROM messages WHERE message_id=:message_id";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(':message_id',$message_id);
        $ret = $query->execute();
        return count($ret);
       }

    //4. select all the records sorted by college id
    public function getAllmessages()
    {
      
    } 

    //4. select single record based by id
    public function getMessage($id)
    {
     
      
    } 


}

//echo '<h3>CONTACT US (CRUD operations using PDO)</h3>';

//initialize the class
//$message = new Message();

//$rnd = rand(31,99);        //generate a random number between 31 and 99
//$message_id = $rnd . "KCC2018";
//$fullname = "Ram  " . $rnd; 
//$email = "mail.$rnd@gmail.com";
//$telephone = "9841635  " . $rnd; 
//$message = "BLANK MESSAGE";

//$message->create($message_id, $fullname, $email);
// $message->update($message_id, $fullname, $email);
// $message->delete($message_id);
//$records = $user->retrieve();
  


