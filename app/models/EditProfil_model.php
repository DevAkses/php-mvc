<?php

class EditProfil_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertGambar($gambar)
    {
        $query = "UPDATE users SET gambar = ? WHERE user_id = ?";
        $this->db->query($query);
        $this->db->bind(1, $gambar, PDO::PARAM_STR);
        $this->db->bind(2, $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getProfilById()
    {   
        $query = "SELECT nama_user, email_user, user_desc, gambar FROM users WHERE user_id = :user_id;";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function updateProfil($data)
    {
        $query = "UPDATE users
        SET nama_user = :nama_user,
        email_user = :email_user,
        user_desc = :user_desc
        WHERE user_id = :user_id;";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->bind('nama_user', $data['nama_user']);
        $this->db->bind('email_user', $data['email_user']);
        $this->db->bind('user_desc', $data['user_desc']);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function hapusAkun()
    {
        $query = "DELETE FROM users WHERE user_id = :user_id";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}