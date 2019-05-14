

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Picture/Signature Upload </h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <!-- <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div> -->
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
         
          <div class="x_content">
            <p><b>Upload Profile picture</b></p>
            <form action="<?php echo $base_url; ?>form/add2/<?php echo $insert_id; ?>" class="dropzone"></form>
            
          </div>
          <div class="x_content">
              <p><b>Upload Signature</b></p>
              <form action="<?php echo $base_url; ?>form/add3/<?php echo $insert_id; ?>" class="dropzone"></form>
             <br>
              <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a href="<?php echo $base_url; ?>form" class="btn btn-success">Submit</a>
                          </div>
            </div>
          </div>
        </div>

         
      </div>
    </div>
<!-- /page content -->