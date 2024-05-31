<?php

class Langganan_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertValue()
    {
        $data['tgl_transaksi'] = new DateTime();
        $query = "INSERT INTO 
        transaksi (transaksi_id, tgl_transaksi, jml_transaksi, metode_pmbyrn, status_transaksi) 
        VALUES 
        ('', :tgl_transaksi, :jml_transaksi, :metode_pmbyrn, '') ";
        $this->db->query($query);
        $this->db->bind('tgl_transaksi', $data['tgl_transaksi']->format("Y-m-d H:i:s"));
        $this->db->bind('jml_transaksi', '1.500.000');
        $this->db->bind('metode_pmbyrn', 'Transfer Bank');
        // $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function insertCourseAdobe()
    {
        $query = "INSERT INTO detail_video (id_detailvideo, status_course, user_id, course_id) VALUES ('', '', :user_id, 2)";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insertCourseFigma()
    {
        $query = "INSERT INTO detail_video (id_detailvideo, status_course, user_id, course_id) VALUES ('', '', :user_id, 1)";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insertCourseWeb()
    {
        $query = "INSERT INTO detail_video (id_detailvideo, status_course, user_id, course_id) VALUES ('', '', :user_id, 4)";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insertCourseProduct()
    {
        $query = "INSERT INTO detail_video (id_detailvideo, status_course, user_id, course_id) VALUES ('', '', :user_id, 3)";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}