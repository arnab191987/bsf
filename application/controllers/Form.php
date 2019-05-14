<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MY_Controller {

   public function __construct() {
       parent::__construct();
       $this->load->library('session');
       $this->load->model('form_model');
   }

  public function index()
  {
      $this->data['success_msg']=$this->session->userdata('success_msg');
      $this->data['error_msg']=$this->session->userdata('error_msg');
      
      $this->session->unset_userdata('success_msg');
      $this->session->unset_userdata('error_msg');
      
      $formList = $this->form_model->fetch();
      $this->data['formList']=$formList;
      $this->load->view('form/list',$this->data);
      $this->load->view('common/footer',$this->data);
  }

  public function add()
  {
    $this->data['success_msg']=$this->session->userdata('success_msg');
    $this->data['error_msg']=$this->session->userdata('error_msg');

    $this->session->unset_userdata('success_msg');
    $this->session->unset_userdata('error_msg');

    
    $this->load->view('form/add',$this->data);
    $this->load->view('common/footer',$this->data);
  }

  public function add1($id=0)
  {
    $this->data['success_msg']=$this->session->userdata('success_msg');
    $this->data['error_msg']=$this->session->userdata('error_msg');
    $form=$error= $data=array();
    $insert_id=0;

    $this->session->unset_userdata('success_msg');
    $this->session->unset_userdata('error_msg');

    $form=$this->input->post('form');

    if(count($form) > 0){
      if($id==0){
        $form['form_submitted_by']=$this->session->userdata('user_id');
        $details=$this->form_model->add($form);
        $insert_id=$details[0]['form_id'];
        if($insert_id==0){
          redirect('form/add');
        }
      }
      else{
        $form['form_updated_by']=$this->session->userdata('user_id');
        $form['form_last_modified_date']=date("Y-m-d H:i:s");
        $details=$this->form_model->edit($form,$id);
        $insert_id=$id;
      }
     
    }

    $this->data['insert_id']=$insert_id;
    $this->load->view('form/form_upload',$this->data);
  
    $this->load->view('common/footer',$this->data);
  }

  public function add2($id,$flag=0){

    if($flag==0){
      $form['form_profile_pic']=$_FILES['file']['name'];
      $this->form_model->edit($form,$id);
      move_uploaded_file($_FILES['file']['tmp_name'], "./uploads/".$_FILES['file']['name']);
    }
    $this->data['id']=$id;
    $this->load->view('form/form_upload',$this->data);
    $this->load->view('common/footer',$this->data);
  }

  public function add3($id,$flag=0){

    if($flag==0){
      $form['form_signature']=$_FILES['file']['name'];
      $this->form_model->edit($form,$id);
      move_uploaded_file($_FILES['file']['tmp_name'], "./uploads/".$_FILES['file']['name']);
    }
    
  }

  public function edit($id)
  {
    $this->data['success_msg']=$this->session->userdata('success_msg');
    $this->data['error_msg']=$this->session->userdata('error_msg');
    $details=array();
    $cond="form_id=".$id;
    $details=$this->form_model->fetch($cond);

    $this->data['details']=$details[0];
    $this->data['id']=$id;
    $this->load->view('form/edit',$this->data);

    $this->load->view('common/footer',$this->data);
  }

  public function search(){
    $this->load->view('form/search',$this->data);
    $this->load->view('common/footer',$this->data);
  }

  public function search_list(){

    $form=array();
    $form=$this->input->post('form');

    $cond="1 ";
    if(count($form) > 0){
      foreach ($form as $key => $value) {
         if($form[$key]!=""){
          // echo $key."--".$form[$key];
          $cond.="AND ".$key."='".$form[$key]."'";
         }
          
      }
    }
    // echo $cond;
    $formList = $this->form_model->fetch($cond);
    // echo $this->db->last_query();
    // die;
   
    $this->data['formList']=$formList;
    $this->load->view('form/search_list',$this->data);
    $this->load->view('common/footer',$this->data);
  }
 
}
