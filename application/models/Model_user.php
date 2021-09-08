<?php 



class Model_user extends CI_Model {

     function __construct()

    {

         parent::__construct();

    }



    public function tampil_data()

    {

        return $this->db->get('tb_user');

    }



    public function tambah_user ($data,$table)

    {

        $this->db->insert($table,$data);

    }



    public function edit_user ($where , $table)

    {

        return $this->db->get_where($table,$where);

    }



    public function update_data($where,$data,$table)

    {

        $this->db->where($where);

        $this->db->update($table,$data) ; 

    }



    public function hapus_data($where,$table)

    {

        $this->db->where($where);

        $this->db->delete($table); 

    }



  public function find($id)

    {

        $result = $this->db->where('id', $id)

                            ->limit(1)

                            ->get('tb_user');

        if ($result->num_rows() > 0)

            {

                return $result->row(); 

            }

        else 

            {

                return array() ;

            }

    } 

    

    


}