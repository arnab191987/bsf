<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Printpdf extends MY_Controller {

   public function __construct() {
       parent::__construct();
       $this->load->model('form_model');
   }

  
  public function view($id){
    $search_data=array();
    $cond="form_id=".$id;
    $search_data=$this->form_model->fetch($cond);
    $this->data['search_data']=$search_data;
    
    //load the view, pass the variable and do not show it but "save" the output into $html variable
    $html=$this->load->view('view_pdf', $this->data, true); 

    //this the the PDF filename that user will get to download
    $pdfFilePath = "Form-".$search_data[0]['form_reg_no'].".pdf";

    //actually, you can pass mPDF parameter on this load() function
    $pdf = $this->m_pdf->load();
    //generate the PDF!
    $pdf->WriteHTML($html);
    //offer it to user via browser download! (The PDF won't be saved on your server HDD)
    $pdf->Output($pdfFilePath, "I");
  
  }
 
}
