			
		</div><!--- Main container -->
	</div><!--- Container body end -->
	<!-- jQuery -->
    <script src="<?php echo $base_url; ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $base_url; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $base_url; ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $base_url; ?>vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo $base_url; ?>vendors/iCheck/icheck.min.js"></script>
	    <!-- Parsley -->
    <script src="<?php echo $base_url; ?>vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo $base_url; ?>vendors/autosize/dist/autosize.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo $base_url; ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo $base_url; ?>vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo $base_url; ?>vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo $base_url; ?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo $base_url; ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo $base_url; ?>build/js/custom.min.js"></script>
    
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo $base_url; ?>vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- iCheck -->
    <script src="<?php echo $base_url; ?>vendors/iCheck/icheck.min.js"></script>

     <script src="<?php echo $base_url; ?>vendors/dropzone/dist/min/dropzone.min.js"></script>
    
  
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#dob').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            singleDatePicker: true,
            calender_style: "picker_4"
        },function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        
        $('#doj').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            },
            singleDatePicker: true,
            calender_style: "picker_4"
        },function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
                
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        
        ///// For Bill details page//////
        $('#datatable1').dataTable();
        $('#datatable2').dataTable();
        $('#datatable3').dataTable();
        ///// For Bill details page//////
        
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();

        $('#overtime').blur(function(){ 
            calculateSalary();
        });

        $('#current_advance_amt').blur(function(){ 
            calculateSalary();
        });

        $('#deduction_advance_amt').blur(function(){ 
            calculateSalary();
        });

        function calculateSalary(){
          // var amount=$('#salary_amt_hidden').val();
          var overtime=$("#overtime").val();
          var basic=$("#basic").val();
          var da=$("#da").val();
          var hra=$("#hra").val();
          var other=$("#other").val();
          var pf=$("#pf").val();
          var esi=$("#esi").val();
          var pt=$("#pt").val();
          var current_advance_amt=$("#current_advance_amt").val();
          var deduction_advance_amt=$("#deduction_advance_amt").val();

          var income=parseFloat(basic)+parseFloat(da)+parseFloat(hra)+parseFloat(other);
          var deduction=parseFloat(pf)+parseFloat(esi)+parseFloat(pt);
          
          var total;

          var total=(parseFloat(income)+parseFloat(overtime)+parseFloat(current_advance_amt))-(parseFloat(deduction)+parseFloat(deduction_advance_amt));
         
          $('#salary_amt').val(total);
        }

        
       $('#eid').change(function() {
            $.ajax({
             url: "<?php echo $base_url; ?>index.php/employee/checkGenerateSalary/"+$('#month').val()+"/"+$('#eid').val(),
            }).done(function(data) {
              if(data==1){
                alert("Salary Generated");
                $(".sub").hide();
              }
              else{
                $(".sub").show();
                $.ajax({
                 url: "<?php echo $base_url; ?>index.php/employee/searchEmployeeByID/"+$(this).val(),
                 dataType: "json",
                }).done(function(data) {
                    $("#name").val(data.employee_name);
                    $("#eid").val(data.employee_id);
                    $("#pf").val(data.employee_pf);
                    $("#esi").val(data.employee_esi);
                    $("#pt").val(data.employee_pt_amount);
                });
              }
            });
        });

        $('#working_days').blur(function() {
            $.ajax({
             url: "<?php echo $base_url; ?>index.php/employee/calculateSalary/"+$(this).val()+"/"+$("#leave_taken").val()+"/"+$('#eid').val()+"/"+$('#month').val()+"/"+$('#year').val(),
             dataType: "json",
            }).done(function(data) {
                $("#basic").val(data.basic);
                $("#leave_balance").val(data.leave_balance);
                $("#da").val(data.da);
                $("#hra").val(data.hra);
                $("#other").val(data.other);
                $("#salary_amt").val(data.salary);
                $("#salary_amt_hidden").val(data.salary);
                $("#still_advance_amt").val(data.still_advance);
            });
        });
        
        // $("#month").change(function(){
        //   $.ajax({
        //    url: "<?php echo $base_url; ?>index.php/employee/checkGenerateSalary/"+$(this).val()+"/"+$('#eid').val(),
        //   }).done(function(data) {
        //     if(data==1){
        //       alert("Salary Generated");
        //       $(".sub").hide();
        //     }
        //     else{
        //       $(".sub").show();
        //     }
        //   });
        // });
       
      });
    </script>

  </body>
</html>