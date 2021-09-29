<?php 

use GuzzleHttp\Client;
class Karyawan_model extends CI_model {

    private $_client;
    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost/446777_APL04/server/api/',
            'auth' => ['admin','1234']
        ]);
    }

    public function getAllKaryawan()
    {
            //return $this->db->get('karyawan')->result_array();

        

            $response = $this->_client->request('GET', 'Karyawan',[
            
                'query' =>[
                    'X-API-KEY' => '123a'
                ]
                
            ]);
    
            $result  = json_decode($response->getBody()->getContents(), true);
    
            return $result['data'];

    }

    public function getKaryawanById($id)
    {
        

        $response = $this->_client->request('GET', 'Karyawan',[
            
            'query' =>[
                'X-API-KEY' => '123a',
                'id_karyawan' => $id
            ]
            
        ]);

        $result  = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nikkaryawan" => $this->input->post('nikkaryawan', true),
            "email" => $this->input->post('email', true),
            "posisi" => $this->input->post('posisi', true),
            'X-API-KEY' => '123a'
        ];

        $response = $this->_client->request('POST', 'Karyawan', [
            'form_params'=> $data
        ]);

        $result  = json_decode($response->getBody()->getContents(), true);

        return $result;


    }
    public function hapusDataKaryawan($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('karyawan', ['id' => $id]);
        $response = $this->_client->request('DELETE', 'Karyawan',[
            'form_params' => [
                'id_karyawan' => $id,
                'X-API-KEY' => '123a'
            ]
        ]);
        
        $result  = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nikkaryawan" => $this->input->post('nikkaryawan', true),
            "email" => $this->input->post('email', true),
            "posisi" => $this->input->post('posisi', true),
            "id_karyawan" => $this->input->post('id', true),
            'X-API-KEY' => '123a'
        ];
        $response = $this->_client->request('PUT', 'Karyawan', [
            'form_params'=> $data
        ]);

        $result  = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function cariDataKaryawan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('posisi', $keyword);
        $this->db->or_like('nikkaryawan', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('karyawan')->result_array();
    }
}