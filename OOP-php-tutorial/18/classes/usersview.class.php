<?php

class UsersView extends Users {

    public function showUser($name) {
        $result = $this->getUser($name);
        echo "Full name: " . $result['users_firstname'];

    }
}