<?php 
class welcome extends CI_Controller{
    public function dashboard()
        {
            $this->load->view('Admin/dashboard');
        }
        public function logout()
        {
            $this->session->unset_userdata('id');
            return redirect('Admin/login');
        }
}
?>