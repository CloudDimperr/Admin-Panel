<?php

class Barang_model extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_barang($nama = FALSE)
    {
        if ( $nama === FALSE )
        {
            $query = $this->db->get('barang');
            return $query->result_array();
        }

        $query = $this->db->get_where('barang', array('nama' => $nama));
        return $query->row_array();
    }
}