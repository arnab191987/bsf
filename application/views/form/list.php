

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of ESTT Form data</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo $base_url; ?>form/add">Add</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="alert alert-success" <?php if($success_msg!=""){ ?> style="display: block;" <?php }else{ ?> style="display: none;"<?php } ?>>
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Success!</strong>  <?php echo $success_msg ?>
                    </div>
                    <div class="alert alert-error" <?php if($error_msg!=""){ ?> style="display: block" <?php }else{ ?>style="display: none" <?php } ?>>
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Error!</strong>  <?php echo $error_msg ?>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>IRL/Reg No</th>
                          <th>Name</th>
                          <th>Rank</th>
                          <th>Maratial</th>
                          <th>DOJ</th>
                          <th>DOB</th>
                          <th>Phone</th>
                          <!-- <th>Address</th>
                          <th>Salary</th>
                          <th>ID Proof</th>
                          <th>Acdemic <br/>Proof</th> -->
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($formList as $key => $value) { ?>
                          <tr>
                            <td><?php echo $value['form_reg_no'] ?></td>
                            <td><?php echo $value['form_name'] ?></td>
                            <td><?php echo $value['form_rank'] ?></td>
                            <td><?php echo $value['form_maretial_status'] ?></td>
                            <td><?php echo $value['form_joinig_date'] ?></td>
                            <td><?php echo $value['form_dob'] ?></td>
                            <td><?php echo $value['form_phone'] ?></td>
                            <td>
                            <a href="<?php echo base_url(); ?>form/edit/<?php echo $value['form_id'] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a> 
                            <a href="<?php echo base_url(); ?>printpdf/view/<?php echo $value['form_id'] ?>" target="_blank" class="btn btn-warning btn-xs"><i class="fa fa-folder"></i> </a> 
                            <?php if($this->session->userdata('user_role')==1){ ?>
                            <a href="<?php echo base_url(); ?>form/deleteform/<?php echo $value['form_id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
                          <?php } ?>
                            </td>
                          </tr>
                       <!--  <tr>
                            <td><?php echo $value['employee_id_no'] ?></td>
                            <td>

                               <a href="javascript:void(0)"  data-toggle="modal" data-target=".bs-example-modal-employee-picture-sm<?php echo $value['employee_id'] ?>"><?php echo $value['employee_name'] ?></a>

                                  <div class="modal fade bs-example-modal-employee-picture-sm<?php echo $value['employee_id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Picture of <?php echo $value['employee_name'] ?></h4>
                                        </div>
                                        <div class="modal-body">
                                          <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/uploadfile/upload/<?php echo  $value['employee_profile_pic']; ?>" style="width:100%">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                            </td>
                            <td><?php echo $value['employee_designation'] ?></td>
                            <td><?php echo ucfirst($value['employee_gender']) ?></td>
                            <td><?php echo $value['employee_joinig_date'] ?></td>
                            <td><?php echo $value['employee_phone'] ?></td>
                            <td><?php echo $value['employee_address'] ?></td>
                            <td><?php echo $value['employee_salary_amount'] ?></td>
                            <td>

                               <a href="javascript:void(0)"  data-toggle="modal" data-target=".bs-example-modal-employee-idproof-sm<?php echo $value['employee_id'] ?>"><?php echo $value['employee_id_type'] ?></a>

                                  <div class="modal fade bs-example-modal-employee-idproof-sm<?php echo $value['employee_id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">ID Proof of <?php echo $value['employee_name'] ?></h4>
                                        </div>
                                        <div class="modal-body">
                                          <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/uploadfile/upload/<?php echo  $value['employee_id_proof']; ?>" style="width:100%">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                            </td>
                            <td>

                               <a href="javascript:void(0)"  data-toggle="modal" data-target=".bs-example-modal-employee-academicproof-sm<?php echo $value['employee_id'] ?>"><?php echo $value['employee_qualification'] ?></a>

                                  <div class="modal fade bs-example-modal-employee-academicproof-sm<?php echo $value['employee_id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">

                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                          </button>
                                          <h4 class="modal-title" id="myModalLabel">Academic Proof of <?php echo $value['employee_name'] ?></h4>
                                        </div>
                                        <div class="modal-body">
                                          <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/uploadfile/upload/<?php echo  $value['employee_qualification_proof']; ?>" style="width:100%">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                            </td>
                            <td>
                            <a href="<?php echo base_url(); ?>index.php/employee/employeedetails/<?php echo $value['employee_id'] ?>" class="btn btn-info btn-xs"><i class="fa fa-folder"></i> View </a> 
                             <a href="<?php echo base_url(); ?>index.php/employee/deleteemployee/<?php echo $value['employee_id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr> -->
                        <?php } ?>
                       
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->
