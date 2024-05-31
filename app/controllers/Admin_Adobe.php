<?php 

    class Admin_Adobe extends Controller {
        public function index() {
            $data['video_adobe'] = $this-> model('Admin_Video_model')->getAllVideosAdobe();
            $this->view('admin_adobe', $data);
        }


}