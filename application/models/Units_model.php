<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Units_model extends MY_Model 
{
    protected $table = 'satuan';
    
    public function getDefaultValues()
    {
        return ['nama' => ''];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama',
                'label' => 'Nama Satuan',
                'rules' => 'trim|required|callback_unique_satuan',
                'errors' => [
                    'required' => '<h6>%s harus diisi.</h6>'
                ]
            ]
        ];

        return $validationRules;
    }

    public function deleteSatuan($id)
    {
        // Hapus data dengan ID tertentu dari tabel satuan
        return $this->db->delete($this->table, ['id' => $id]);
    }

}

/* End of file Units_model.php */
