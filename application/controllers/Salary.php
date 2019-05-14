<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends MY_Controller {

	 public function __construct() {
       parent::__construct();
       $this->load->model('salary_model');
       $this->load->model('employee_model');
   }

	public function index($getmonth=null,$getyear=null)
	{
      $this->data['success_msg']=$this->session->userdata('success_msg');
      $this->data['error_msg']=$this->session->userdata('error_msg');
      
      $this->session->unset_userdata('success_msg');
      $this->session->unset_userdata('error_msg');
      $search=array();
      $search=$this->input->post('search');
      if(!is_null($getmonth)){
        $search['month']=$getmonth;
        $search['year']=$getyear;
      }

      if(count($search) > 0){
        $month=$search['month'];
        $year=$search['year'];
        $cond="s_month LIKE '".$search['month']."' AND s_year LIKE '".$search['year']."'";
      }else{
        $month=date("m");
        $year=date("Y");
        $cond="s_month LIKE '".date("m")."'";
      }
      $salaryList = $this->salary_model->fetch($cond);
      $this->data['salaryList']=$salaryList;

      $monthList = $this->month_model->fetch();
      $this->data['monthList']=$monthList;
      $this->data['month']=$month;
      $this->data['year']=$year;


  		$this->load->view('salary/list',$this->data);
  		$this->load->view('common/footer',$this->data);
	}

public function disbursal_date(){ 
    $search=array();
    $search=$this->input->post('search');
    $date="";
    if(count($search) > 0){
      $date=$search['year']."-".$search['month']."-";
      $cond="s_is_paid = 1 AND s_disbursal_date LIKE '".$date."%'";
      $join_cond=array(
        "employee" => array("s_employee_id=employee_id","left")
      );
      $this->data['search_data']= $this->salary_model->fetch_join($join_cond,$cond);
      // echo $this->db->last_query();
      // die;
    }
    $monthList = $this->month_model->fetch();
    $this->data['monthList']=$monthList;
    $this->data['date']=$date;
    $this->load->view('salary/disbursal_list', $this->data, FALSE);
    $this->load->view('common/footer',$this->data);
  }

  public function printalldispursal($date){
    // $date=base64_decode($date);

    $cond="s_is_paid = 1 AND s_disbursal_date LIKE '".$date."%'";
    $join_cond=array(
      "employee" => array("s_employee_id=employee_id","left")
    );
    $this->data['search_data']= $this->salary_model->fetch_join($join_cond,$cond);

    $extractdt=explode("-", $date);
    $year=$extractdt[0];
    $month=$extractdt[1];
    $cond="em_code='".$month."'";
    $monthFetch = $this->month_model->fetch($cond);
    $this->data['monthFetch']=$monthFetch;
    $this->data['year']=$year;

    $html=$this->load->view('salary/disbursal_list _pdf', $this->data, true); 

    //this the the PDF filename that user will get to download
    $pdfFilePath = "Disbursal-List.pdf";
    
    //actually, you can pass mPDF parameter on this load() function
    $pdf = $this->m_pdf->load();
    //generate the PDF!
    $pdf->WriteHTML($html);
    //offer it to user via browser download! (The PDF won't be saved on your server HDD)
    $pdf->Output($pdfFilePath, "I");
  }

  public function disbursal($s_id,$month,$year){
    $this->data['success_msg']=$this->session->userdata('success_msg');
    $this->data['error_msg']=$this->session->userdata('error_msg');
    
    $this->session->unset_userdata('success_msg');
    $this->session->unset_userdata('error_msg');

    $disbursal=array();
    $disbursal=$this->input->post('disbursal');
    if(count($disbursal) > 0){
      $result=$this->salary_model->edit($disbursal,$s_id);
          
      if($result > 0){
          $this->data['success_msg']="Salary is disbursed";
          $this->session->set_userdata(array('success_msg' => $this->data['success_msg']));
      }
      else{
          $this->data['error_msg']="Salary is not disbursed";
          $this->session->set_userdata(array('error_msg' => $this->data['error_msg']));
      }
       redirect('index.php/salary/');
    }
    $cond="s_id=".$s_id;
    $salaryDetails = $this->salary_model->fetch($cond);

    $cond="em_code='".$month."'";
    $monthname = $this->month_model->fetch($cond);
    $this->data['monthname']=$monthname[0]['em_desc'];

    $this->data['salaryDetails']=$salaryDetails[0];
    $this->data['s_id']=$s_id;
    $this->data['month']=$month;
    $this->data['year']=$year;
    $this->load->view('salary/disbursal',$this->data);
    $this->load->view('common/footer',$this->data);
  }

  
	public function add()
	{
      $salary=array();
      $salary=$this->input->post('salary');

      $this->data['success_msg']="";
      $this->data['error_msg']="";
      
      if(count($salary) > 0){
        // $checkunique=$this->checkunique($salary['salary_ledger'],false);
        // if($checkunique=="false"){
          $result=$this->salary_model->add($salary);
          
          if($result > 0){
              $this->data['success_msg']="salary added";
          }
          else{
              $this->data['error_msg']="salary is not added";
          }
        // }
        // else{
        //   $this->data['error_msg']="Ledger name must be unique, unless can not save.";
        // }
      }
      $monthList = $this->month_model->fetch("","","","","","ASC");
      $this->data['monthList']=$monthList;
      
      $empList = $this->employee_model->fetch("","","","","","ASC");
      $this->data['empList']=$empList;

      $this->load->view('salary/add',$this->data);
      $this->load->view('common/footer',$this->data);
	}
        

        
  public function deletesalary($id=null)
	{
      $result=$this->salary_model->delete('s_id',$id);
      if($result > 0){
          $this->session->set_userdata('success_msg', "salary deleted");
      }
      else{
          $this->session->set_userdata('error_msg', "salary not deleted");
      }
      redirect('index.php/salary/');
	}

  public function checkunique($ledgerName="", $isAjax=true){
      $cond="salary_ledger LIKE '".$ledgerName."'";
      $details=$this->salary_model->fetch($cond);
      if(count($details) > 0){
         $show="true";
      }
      else{
        $show="false";
      }
      if($isAjax){
        echo $show;
        die;
      }
      else{
        return $show;
      }
  }

  public function checkuniqueboxno($box_no="", $isAjax=true){
      $cond="salary_box_no LIKE '".$box_no."'";
      $details=$this->salary_model->fetch($cond);
      if(count($details) > 0){
         $show="true";
      }
      else{
        $show="false";
      }
      if($isAjax){
        echo $show;
        die;
      }
      else{
        return $show;
      }
  }

  public function fetchname($box_no="", $isAjax=true){
      $cond="salary_box_no LIKE '".$box_no."'";
      $details=$this->salary_model->fetch($cond);
      if(count($details) > 0){
         $name=$details[0]['salary_name'];
      }
      else{
        $name="";
      }
      if($isAjax){
        echo $name;
        die;
      }
      else{
        return $name;
      }
  }


  public function printpayslip($s_id,$month,$year)
  {
    $details[0]=array();
    $cond="s_id = ".$s_id." AND s_month LIKE '".$month."' AND s_year LIKE '".$year."'";
    $join_cond=array(
      "employee" => array("s_employee_id=employee_id","left")
    );
    $details=$this->salary_model->fetch_join($join_cond,$cond);
    // print_r($details);
    // echo $this->db->last_query();
    // die;

    $cond="em_code='".$month."'";
    $monthFetch = $this->month_model->fetch($cond);
    $this->data['monthFetch']=$monthFetch;
    $this->data['month']=(int)$month;
    $this->data['year']=$year;
    $this->data['details']=$details[0];
    
    $html=$this->load->view('salary/generate', $this->data, true); 
                
    //this the the PDF filename that user will get to download
    $pdfFilePath = "PaySlip-".$month.$year.".pdf";
    
    //actually, you can pass mPDF parameter on this load() function
    $pdf = $this->m_pdf->load();
    //generate the PDF!
    $pdf->WriteHTML($html);
    //offer it to user via browser download! (The PDF won't be saved on your server HDD)
    $pdf->Output($pdfFilePath, "I");

  }
        
}
