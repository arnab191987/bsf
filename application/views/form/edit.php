

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2>Add ESTT Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo $base_url; ?>form/">List</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  
                      <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo $base_url; ?>form/add1/<?php echo $id; ?>" method="post">
                      <div class="alert alert-success" <?php if($success_msg!=""){ ?> style="display: block;" <?php }else{ ?> style="display: none;"<?php } ?>>
                            <button class="close" data-dismiss="alert">×</button>
                            <strong>Success!</strong>  <?php echo $success_msg ?>
                        </div>
                        <div class="alert alert-error" <?php if($error_msg!=""){ ?> style="display: block" <?php }else{ ?>style="display: none" <?php } ?>>
                            <button class="close" data-dismiss="alert">×</button>
                            <strong>Error!</strong>  <?php echo $error_msg ?>
                        </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IRL NO/Reg No  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_reg_no]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_reg_no'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rank <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_rank]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_rank']; ?>" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_name]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_name']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Coy  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_coy]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_coy']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dob" name="form[form_dob]" class="date-picker form-control col-md-7 col-xs-12" type="text" value="<?php echo $details['form_dob']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Joining <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="doj" name="form[form_joinig_date]" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $details['form_joinig_date']; ?>" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cast<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control"  id="eid" name="form[form_cast]" required="required">
                            <option value="">Choose option</option>
                            <?php 
                              if($details['form_cast']=='sc'){
                                $sc="selected";
                              }
                              elseif($details['form_cast']=='st'){
                                $st="selected";
                              }
                              elseif($details['form_cast']=='obc'){
                                $obc="selected";
                              }
                              elseif($details['form_cast']=='general'){
                                $general="selected";
                              }
                              else{
                                $sc="";
                                $st="";
                                $obc="";
                                $general="";
                              }
                            ?>
                            <option value="sc" <?php echo $sc; ?>>SC</option>
                            <option value="st" <?php echo $st; ?>>ST</option>
                            <option value="obc" <?php echo $obc; ?>>OBC</option>
                            <option value="general" <?php echo $general; ?>>General</option>
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">MEDICA CAT  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_medica]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_medica']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Maretial Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <?php 
                                $yes=$no="";
                                if($details['form_maretial_status']=="yes"){ 
                                   $yes="active"; 
                                }
                                if($details['form_maretial_status']=="no"){ 
                                   $no="active"; 
                                }
                            ?>
                            <label class="btn btn-default <?php echo $yes; ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="form[form_maretial_status]" value="yes"> &nbsp; Yes &nbsp;
                            </label>
                            <label class="btn btn-primary <?php echo $no; ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="form[form_maretial_status]" value="no"> No
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea id="message" name="form[form_address]" required="required" class="form-control" name="message"><?php echo $details['form_address'] ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Town/Village:  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_town]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_town']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PS:  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_ps]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_ps']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State:  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_state]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_state']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PO:  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_po]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_po']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pin:  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="form[form_pin]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_pin'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Qualification  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="numeric" id="name" name="form[form_qualification]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_qualification'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name OF NOK  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="numeric" id="name" name="form[form_name_nok]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_name_nok'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Relation OF NOK  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="numeric" id="name" name="form[form_rel_nok]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_rel_nok'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="numeric" id="name" name="form[form_phone]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details['form_phone'] ?>">
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Next</button>
                        </div>
                      </div>

                    </form>
                  
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->
