<?php

  class LinkToDatabase{
    $servername;
    $username;
    $password;
    $dbname;
    $con;
    $sql;

    public function __construct($servername, $username, $password, $dbname){
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
      $this->dbname = $dbname;
    }

    public function connectToDb(){
      $this->con = mysqli_connect($servername, $username, $password, $dbname);
      if (!$con){
        die("Connection failed: " . mysqli_connect_error());
      }
    }

    public function insertMessage($name, $email, $message){
      $this->sql = "INSERT INTO Message (name, email, message)
      VALUES ($name, $email, $message)";
      if (mysqli_query($this->con, $this->sql)){
        echo "New record created successfully";
      }
      else{
        echo "Error: " . $this->sql . "<br>" . mysqli_error($this->con);
      }

      public function disconnect(){
        mysqli_close($this->con);
      }
    }


  }
