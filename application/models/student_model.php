<?php

  class Student_model extends CI_Model {

    public function addStudent() {
        $data=array(
            'NAME'=>$this->input->post('firstname'),
            'SURNAME'=>$this->input->post('lastname'),
            'TCKN'=>$this->input->post('tckn')
        );
        $this->db->insert('students',$data);
        $id=$this->db->insert_id();
        return $id;
    }

    public function get_all_students(){
        $this->db->select("*");
        $this->db->from("students");
        $query=$this->db->get();
        return $query->result();
    }

    public function getStudent($id)
    {
      $this->db->select("*");
      $this->db->where("ID",$id);
      $this->db->from("students");
      $query=$this->db->get();
      return $query->row();

    }

    public function updateStudent($id)
     {
      $data=array(
        'NAME'=>$this->input->post('firstname'),
        'SURNAME'=>$this->input->post('lastname'),
        'TCKN'=>$this->input->post('tckn')
      );

      $this->db->where("ID",$id);
      $this->db->update("students",$data);
      return $id;

     }

     public function deleteStudent($id){
       $this->db->where("ID",$id);
       $this->db->delete("students");
     }
      


  }

?>