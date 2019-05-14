<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ESTT FORM</title>
<script src="<?php echo $base_url; ?>vendors/jquery/dist/jquery.min.js"></script>
 <script src="<?php echo $base_url; ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<style type="text/css">

#top_name {
    width: 340px;
    margin: 0 auto;
    padding: 0px;
    padding-bottom: 2px;
    text-align: center;
    background: #000;
    color: #FFF;
    z-index: 1;
}
  table{
    border-collapse: collapse;
  }
  body{
    font-size: 12px;
  }

  table {
    border-collapse: collapse;
    border: #ce1204!important;
        color: midnightblue!important;
}

#h_right {
    height: 20%;
}
#h_left {
    clear: both;
    height: 20%;
    font-size: 18px;
}

#name_add {
    height: 100%;
    }

    label.wt {
    padding-right: 5px;
}

.amount1 {
    width: 40%;
    text-align: center;
}

.amount {

    text-align: center;
}

.right {
text-align: center;
}

.putItemTable td{
  text-align: center;
}
</style>
</head>

<body>

<div style="border: 1px solid #ce1204!important;    width: 100%;
    margin: auto;">
    <div id="top_name" STYLE="font-size:18px;    background: #ce1204!important;">ESTT FORM,-Reg No <?php echo $search_data[0]['form_reg_no']  ?></div>
    <div style="padding: 10px;">



<div class="head_gst">
<h2 style="FONT-SIZE: 60PX;TEXT-ALIGN: CENTER;color: #ce1204!important;margin-top: -10px;margin-bottom: 5px;">192 BN </h2>

<div style="width:100%">
<div clss="add_p" style="font-size: 14px;    font-weight: 700;text-align: center;margin-bottom: 20px;color: midnightblue;float:left;width:100%">
192 BN Border Security Force.
</div>


</div>
 

<table width="100%" border="1">
  <tbody>
    <tr>
      <td align="center"></td>
    </tr>
  </tbody>
</table>
  <table width="100%" border="1">
  <tbody>
    <tr>
      <td width="50%">
        <table width="100%">
          <tr>
            <td>IRL/REG no :</td><td><?php echo $search_data[0]['form_reg_no']; ?></td>
            <td>Name :</td><td><?php echo $search_data[0]['form_name']; ?></td>
          </tr>
          
        </table>
      </td>
      <td>
        <table width="75%">
          <tr>
            <td>Rank</td><td><?php echo $search_data[0]['form_rank']; ?></td>
          </tr> 
          <tr>
            <td>COY</td><td><?php echo $search_data[0]['form_coy']; ?></td>
          </tr> 
           <tr>
            <td>Date of Birth</td><td><?php echo $search_data[0]['form_dob']; ?></td>
          </tr> 
           <tr>
            <td>DOJ</td><td><?php echo $search_data[0]['form_joinig_date']; ?></td>
          </tr> 
          <tr>
            <td>Cast</td><td><?php echo ucfirst($search_data[0]['form_cast']); ?></td>
          </tr> 
          <tr>
            <td>MEDICA CAT </td><td><?php echo $search_data[0]['form_medica']; ?></td>
          </tr>
           <tr>
            <td>Maretial Status </td><td><?php echo ucfirst($search_data[0]['form_maretial_status']); ?></td>
          </tr>
           <tr>
            <td>Address </td><td><?php echo ucfirst($search_data[0]['form_address']); ?></td>
          </tr>
           <tr>
            <td>Town/Village </td><td><?php echo ucfirst($search_data[0]['form_town']); ?></td>
          </tr>
           <tr>
            <td>PS </td><td><?php echo $search_data[0]['form_ps']; ?></td>
          </tr>
            <tr>
            <td>State </td><td><?php echo $search_data[0]['form_state']; ?></td>
          </tr>
           <tr>
            <td>PO </td><td><?php echo $search_data[0]['form_po']; ?></td>
          </tr>
          <tr>
            <td>Pin </td><td><?php echo $search_data[0]['form_pin']; ?></td>
          </tr>
          <tr>
            <td>Qualification </td><td><?php echo $search_data[0]['form_qualification']; ?></td>
          </tr>
          <tr>
            <td>Name OF NOK  </td><td><?php echo $search_data[0]['form_name_nok']; ?></td>
          </tr>
          <tr>
            <td>Relation OF NOK  </td><td><?php echo $search_data[0]['form_rel_nok']; ?></td>
          </tr>
          <tr>
            <td>Phone  </td><td><?php echo $search_data[0]['form_phone']."".$search_data[0]['form_profile_pic']; ?></td>
          </tr>
        </table>
        <table width="25%">
          <tr>
            <td>Profile Picture</td>
          </tr>
          <tr>
            <td><img src="<?php echo base_url().'uploads/'.$search_data[0]['form_profile_pic']; ?>" width="150" height="150" ></td>
          </tr>
          <tr>
            <td>Signature</td>
          </tr>
          <tr>
            <td><img src="<?php echo base_url().'uploads/'.$search_data[0]['form_signature']; ?>" width="150" height="150" ></td>
          </tr>
        </table>
      </td>
    </tr>
  </tbody>
</table>


</div>
</div>

</body>
</html>
