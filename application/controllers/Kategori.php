<?php
defined('BASEPATH') OR exit('No direct script access allowed');



    class Kategori extends CI_Controller{

        public function muslim()

        {

            $data['muslim'] = $this->model_kategori->data_muslim()->result();

            $this->load->view('templates/header');

            $this->load->view('templates/sidebar');

            $this->load->view('elektronik',$data);

            $this->load->view('templates/footer');

        }   



        public function pakaian_pria()

        {

            $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();

            $this->load->view('templates/header');

            $this->load->view('templates/sidebar');

            $this->load->view('pakaian_pria',$data);

            $this->load->view('templates/footer');

        }

        

        public function pakaian_wanita()

        {

            $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();

            $this->load->view('templates/header');

            $this->load->view('templates/sidebar');

            $this->load->view('pakaian_wanita',$data);

            $this->load->view('templates/footer');

        }   



        public function pakaian_anak_anak()

        {

            $data['pakaian_anak_anak'] = $this->model_kategori->data_pakaian_anak_anak()->result();

            $this->load->view('templates/header');

            $this->load->view('templates/sidebar');

            $this->load->view('pakaian_anak_anak',$data);

            $this->load->view('templates/footer');

        }   



        public function aksesoris()

        {

            $data['aksesoris'] = $this->model_kategori->data_aksesoris()->result();

            $this->load->view('templates/header');

            $this->load->view('templates/sidebar');

            $this->load->view('peralatan_olahraga',$data);

            $this->load->view('templates/footer');

        }   





    }