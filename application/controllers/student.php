<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
    }


     public function add(){
        if(isset($_POST["new_btn"])){
            $this->load->model('Student_model');
           if( $this->Student_model->addStudent()){
             $this->session->set_flashdata("success","student success addedd");
             redirect('index.php/student/add','refresh');
           }else{
            $this->session->set_flashdata("error","There is a problem during insert");
            redirect('index.php/student/add','refresh');
           }
        }
        
		$this->load->view('add_student');
     }


     public function allStudents(){
         $this->load->model('Student_model');
         $students=$this->Student_model->get_all_students();
         $data["students"]=$students;
         $this->load->view('all_students',$data);
     }

     public function edit($id){
        $this->load->model('Student_model');
         if(isset($_POST["edit_btn"])){
             if($this->Student_model->updateStudent($id)){
                $this->session->set_flashdata("success","student success updated");
                redirect('index.php/student/edit/'.$id,'refresh');
             }else{
                $this->session->set_flashdata("error","student error updated");
                redirect('index.php/student/edit/'.$id,'refresh');
             }
         }
         $data["student"]=$this->Student_model->getStudent($id);
         $this->load->view('edit_student',$data);
     }

     public function delete($id){
        $this->load->model('Student_model');
        $this->Student_model->deleteStudent($id);
        redirect('index.php/student/allStudents');

     }

}
