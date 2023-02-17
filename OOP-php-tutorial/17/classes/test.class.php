<?php

// how to fetch data from the database 
class Test extends Dbh { // db 
    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row['users_firstname' . '<br>'];
        }
    }

    public function getUsersStmt() {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row['users_firstname' . '<br>'];
        }
    } 
    

}