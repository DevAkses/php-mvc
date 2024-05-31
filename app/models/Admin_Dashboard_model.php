<?php

class Admin_Dashboard_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahVideo($data)
    {
        $query = "INSERT INTO video (video_id, video_title, link_video, durasi_video, course_id) VALUES ('', :video_title, :link_video, :durasi_video , :course_id)";
        $this->db->query($query);
        $this->db->bind('video_title', $data['video_title']);
        $this->db->bind('link_video', $data['link_video']);
        $this->db->bind('durasi_video', $data['durasi_video']);
        $this->db->bind('course_id', $data['course_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}