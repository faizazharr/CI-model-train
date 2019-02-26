<?php
class form extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
    }
    // index php
    public function index()
    {
        $this->load->view('form');
        
    }
    // validation check
    // public function formCheck()
    // {
    //     $this->form_validation->set_rules('nama', 'nama', 'required|callback_nama_check');
    //     $this->form_validation->set_rules('nim', 'nim', 'required|numeric|callback_nim_check');
        
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('form');
            
    //     } else {
    //         $this->load->view('success');
    //     }
    // }

    // public function nama_check($nama)
    // {
    //     if ($nama == 'abcde') {
    //         return TRUE;
    //     } else {
    //         $this->form_validation->set_message('nama_check', 'nama tidak terdaftar');
    //         return FALSE;
    //     }
    // }

    // public function nim_check($nim)
    // {
    //     if ($nim == '1234') {
    //         return TRUE;
    //     } else {
    //         $this->form_validation->set_message('nim_check', 'nim tidak terdaftar');
    //         return FALSE;
    //     }
    // }

    public function viewForm()
    {
        $data['isi'] = $this->data_model->view();
        $this->load->view('data',$data);
    }

    public function addData()
    {
        $data = $this->data_model;
        $this->form_validation->set_rules($data->rules());
            
        if ($this->form_validation->run()) {
            $data->add();
        } else {
            # code...
        }
        
    }

}