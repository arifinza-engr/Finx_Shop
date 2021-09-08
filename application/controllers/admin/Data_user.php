<?php 



    class Data_user extends CI_Controller{



        public function __construct()

        {

            parent::__construct();



            if($this->session->userdata('role_id') != '1')

            {

                $this->session->set_flashdata('pesan','

                <div class="alert alert-danger alert-dismissible fade show" role="alert">

                 Anda Belum Login

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

                </button>

            </div>');



            redirect('auth/login');

            }

        }

        

        public function index()

            {

                $data['user'] =  $this->model_user->tampil_data()->result();

                $this->load->view('templates_admin/header');

                $this->load->view('templates_admin/sidebar');

                $this->load->view('admin/data_user',$data);

                $this->load->view('templates_admin/footer');

            }
            public function edit ($id)

        {

            $where = array('id' => $id) ;

            $data['user'] = $this->model_user->edit_user($where ,'tb_user')->result() ;

            

            $this->load->view('templates_admin/header');

            $this->load->view('templates_admin/sidebar');

            $this->load->view('admin/edit_user',$data);

            $this->load->view('templates_admin/footer');

        }



        public function update()

        {

            $id = $this->input->post('id');

            $nama  = $this->input->post('nama');

            $username = $this->input->post('username');

            $password = $this->input->post('password');






            $data = array (

                'nama' => $nama ,

                'username' => $username ,

                'password' => $password ,

                'role_id' => $role_id ,

             );



             $where = array (

                'id' => $id 

             );



             $this->model_user->update_data($where,$data,'tb_user');

             redirect ('admin/data_user/index');

        }



        public function hapus ($id) 

        {

            $where = array('id' => $id );

            $this->model_user->hapus_data($where,'tb_user');



            redirect ('admin/data_user/index');

        }



    } 