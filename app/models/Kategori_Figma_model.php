<?php

class Kategori_Figma_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cariDataVideosFigma($keyword)
    {
        // $keyword = $_GET("keyword");
        $this->db->query('SELECT 
        video.video_title, video.video_id 
        FROM 
        video 
        INNER JOIN 
        detail_video 
        ON
        video.course_id = detail_video.course_id 
        WHERE
        detail_video.course_id = 1 
        AND
        detail_video.status_course = 0
        AND
        video.video_title 
        LIKE 
        :keyword');
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->resultSet();

    }

    public function getAllVideosFigma()
    { 
        $this->db->query('SELECT
        video.video_id,
        video.course_id,
        video.video_title,
        detail_video.status_course
      FROM
        video
      INNER JOIN
        detail_video
      ON
        video.course_id = detail_video.course_id
      WHERE
        video.course_id = 1
      AND
        detail_video.status_course = false
      AND
        detail_video.user_id = :user_id
        ');
      $this->db->bind('user_id', $_SESSION['user_id']);
      return $this->db->resultSet();
    }

    public function getVideoById($id)
    {
        $this->db->query('SELECT * FROM video WHERE video_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}