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

    public function gettUsersStmt($firstname, $lastname) {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['users_dateofbirth' . '<br>'];

        }
    }

    public function setUsersStmt($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);
    } 
    

}