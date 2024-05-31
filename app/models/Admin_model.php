<?php

class Admin_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekUsername($data)
    {
        $query = "SELECT username_admin FROM admins WHERE username_admin = :username_admin";
        $this->db->query($query);
        $this->db->bind('username_admin', $data['username_admin']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cekPassword($data)
    {
        $query = "SELECT password_admin FROM admins WHERE username_admin = :username_admin";
        $this->db->query($query);
        $this->db->bind('username_admin', $data['username_admin']);
        $this->db->execute();
        $result = $this->db->resultSet();

        if ($result ) {
            $Password = $result[0]['password_admin'];
            $plainPassword = $data['password_admin'];

            if (($plainPassword == $Password) ) {
                return true;
                
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getUser($data)
    {
        var_dump($data);
    }


}