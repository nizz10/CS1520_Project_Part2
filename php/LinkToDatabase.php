<?php

  class LinkToDatabase{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $con;
    private $sql;

    public function __construct($servername, $username, $password, $dbname){
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;
    }

    public function connectToDb(){
      $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
      if (!$this->con){
        die("Connection failed: " . mysqli_connect_error());
      }
      
    }

    public function insertMessage($name, $email, $message){
      $create = "CREATE TABLE IF NOT EXISTS Message (
              name VARCHAR(30),
              email VARCHAR(80),
              message LONGTEXT
              )";
      mysqli_query($this->con, $create);
      $this->sql = "INSERT INTO Message (name, email, message)
      VALUES ('$name', '$email', '$message')";
      if (mysqli_query($this->con, $this->sql)){
        echo "New record created successfully";
      }
      else{
        echo "Error: " . $this->sql . "<br>" . mysqli_error($this->con);
      }


    }
    public function disconnect(){
      mysqli_close($this->con);
    }

  }
