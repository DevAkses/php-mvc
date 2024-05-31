<?php 

    class Admin_Figma extends Controller {
        public function index() {
            session_start();
            $data['video_figma'] = $this-> model('Admin_Video_model')->getAllVideosFigma();
            $this->view('admin_figma', $data);
        }


}