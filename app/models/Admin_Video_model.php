<?php

class Admin_Video_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function updateVideo($data)
    {
        $query = "UPDATE video
        SET video_title = :video_title,
        link_video = :link_video,
        durasi_video = :durasi_video
        WHERE video_id = :video_id;";
        $this->db->query($query);
        $this->db->bind('video_title', $data['video_title']);
        $this->db->bind('link_video', $data['link_video']);
        $this->db->bind('durasi_video', $data['durasi_video']);
        $this->db->bind('video_id', $data['video_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusVideo($id)
    {
        $query = "DELETE FROM video WHERE video_id = :video_id";
        $this->db->query($query);
        $this->db->bind(':video_id', $id, PDO::PARAM_STR);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllVideosProduct()
    {
        $this->db->query('SELECT * FROM video where course_id = 3');
        return $this->db->resultSet();
    }

    public function getAllVideosWeb()
    {
        $this->db->query('SELECT * FROM video where course_id = 4');
        return $this->db->resultSet();
    }

    public function getAllVideosFigma()
    {
        $this->db->query('SELECT * FROM video where course_id = 1');
        return $this->db->resultSet();
    }

    public function getAllVideosAdobe()
    {
        $this->db->query('SELECT * FROM video where course_id = 2');
        return $this->db->resultSet();
    }

    public function getVideoById($id)
    {
        $this->db->query('SELECT * FROM video WHERE video_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}