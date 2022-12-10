<?php

class M_profile extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_mahasiswa()
    {
        $sql = "SELECT * FROM biodata_mhs";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function insert_data($data)
    {
        $sql = "INSERT INTO biodata_mhs (npm,name,birth_place,birth_date,gender,nationality,university,faculty,univ_major,shs,shs_major,email,phone,address) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($data['npm'], $data['name'], $data['birth_place'], $data['birth_date'],$data['gender'], $data['nationality'], $data['university'], 
									$data['faculty'],$data['univ_major'], $data['shs'], $data['shs_major'], $data['email'],$data['phone'], $data['address']));
    }

    public function get_mahasiswa_spec($npm)
    {
        $this->db->where('npm', $npm);
        $data = $this->db->get('biodata_mhs');
        return $data->result();
    }

    public function update_data($data)
    {
        $sql = "UPDATE biodata_mhs SET name=?, birth_place=?, birth_date=?, gender=?, nationality=?, university=?, faculty=?, univ_major=?, shs=?, shs_major=?, email=?, phone=?, address=? WHERE npm=?";
        $this->db->query($sql, array($data['name'], $data['birth_place'], $data['birth_date'], $data['gender'], $data['nationality'], $data['university'], $data['faculty'], $data['univ_major'], $data['shs'], $data['shs_major'], $data['email'], $data['phone'], $data['address'], $data['npm']));
    }

    public function delete_mahasiswa($npm)
    {
        $this->db->delete('biodata_mhs', array('npm' => $npm));
    }
}
