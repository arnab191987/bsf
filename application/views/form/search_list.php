

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search Data of ESTT Form </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo $base_url; ?>form/search">Search</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
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
                          <th>View</th>
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
                              <a href="<?php echo base_url(); ?>printpdf/view/<?php echo $value['form_id'] ?>" target="_blank" class="btn btn-warning btn-xs"><i class="fa fa-folder"></i> </a> 
                            </td>
                          </tr>                      
                        <?php } ?>
                       
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->
