<?php 

    class Admin_Product extends Controller {
        public function index() {
            $data['video_product'] = $this-> model('Admin_Video_model')->getAllVideosProduct();
            $this->view('admin_product', $data);
        }


}