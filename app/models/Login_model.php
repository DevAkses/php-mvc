<?php

class Login_model {
    private $table = "user";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    
    public function cekUsername($data)
    {
        $query = "SELECT username from users where username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cekPassword($data)
    {
        session_start();
        $query = "SELECT user_id, nama_user ,sandi_user, email_user from users where username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        $result = $this->db->resultSet();

        if ($result ) {
            // User found, now check the password
            $hashedPassword = $result[0]['sandi_user'];
            $plainPassword = $data['sandi_user'];

            if ( password_verify($plainPassword, $hashedPassword) ) {
                // Passwords match 
                $_SESSION['nama_user'] = $result[0]['nama_user'];
                $_SESSION['user_id'] = $result[0]['user_id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['email_user'] = $result[0]['email_user'];
                // var_dump($_SESSION['username']);
                //var_dump($_SESSION);              
                return true;
                
            } else {
                // Passwords do not match
                // var_dump($hashedPassword);
                // var_dump($plainPassword);
                return false;
            }
        } else {
            // User not found
            return false;
        }
    }

    public function getUser($data)
    {
        var_dump($data);
        // $this->db->query('');
        // return $this->db->resultSet();
    }


}