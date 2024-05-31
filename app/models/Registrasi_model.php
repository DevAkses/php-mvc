<?php

class Registrasi_model{
    private $table = "users";
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function registrasiUser($data) 
    {
        $data['sandi_user'] = password_hash($data['sandi_user'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (user_id, nama_user, username, email_user, sandi_user) VALUES ('', :nama_user, :username, :email_user, :sandi_user)";
        $this->db->query($query);
        $this->db->bind('nama_user', $data['nama_user']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email_user', $data['email_user']);
        $this->db->bind('sandi_user', $data['sandi_user']);
        $this->db->execute();
        return $this->db->rowCount();

    }

    

    public function cekUsername($data)
    {
        $query = "SELECT username from users where username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cekEmail($data)
    {
        $query = "SELECT email_user from users where username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}