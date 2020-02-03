<!doctype html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('../dbconfig/config.php');
if(!isset($_SESSION['username']))
   {
       header("location:../index.php");
   }
   
   
?>

    

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    	
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />

    <title>Client details </title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php require "navbar.php"; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php require "leftbar.php"; ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper" >
            <div class="container-fluid  dashboard-content"  >
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" >
                            <h2 class="pageheader-title">Data Tables</h2>
                            
                        </div>
                    </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                   
                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card" style="margin-bottom: 1px;">
									<div style="display: inherit;">
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-left: 1.5%;"><h5 style=" margin-top: 9px;margin-bottom: 1px;font-size: 15px;">Select employee :-</h5></div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-left: 2.5%;"><h5 style="margin-top: 9px;margin-bottom: 1px;font-size: 15px;">Select From :-</h5></div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-left: 1.6%;"><h5 style="margin-top: 9px;margin-bottom: 1px;font-size: 15px;">Select To :-</h5></div>

									</div>
                                    
										<div class="card-body" style="padding-top: 0.6rem;padding-right: 0.5rem;padding-bottom: 0rem;padding-left: 0.6rem;">
                                       
                                            <div class="form-row">
											
                                                
                                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-left: 1.5%;">

                                                <select class="form-control" id="input_select" >
                                                    
													<option placeholder="select"> Select employee name </option>
															<?php
																if($stmt=$con->query("select * from emp"))
																{
																	while($r=$stmt->fetch_array(MYSQLI_ASSOC))
																	{
																	?>
													<option value="<?php echo $r['id']; ?>"><?php echo $r['name'] ?> </option>
															
																		 <?php } } ?>  
                                                                         </select>
                                             </div>                            
                                             <div class="col-md-3 col-sm-3 col-12" style="margin-left: 1.5%;">

                                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                <input type="text" id="mydate" value="N/A" placeholder="Enter date " style="width:18.5%;margin-bottom: 9px;margin-left: 6.8%;" class="form-control datetimepicker-input" data-target="#datetimepicker4" required/>
                                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker" style="padding-bottom: 9px;">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div></div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-12" style="margin-left: 1.5%;">

                                                <div class="input-group date" id="datetimepicker4_1" data-target-input="nearest">
                                                <input type="text" id="mydate1" value="N/A" placeholder="Enter date " style="width:18.5%;margin-bottom: 9px;margin-left: 6.8%;" class="form-control datetimepicker-input" data-target="#datetimepicker4_1"  required/>
                                                <div class="input-group-append" data-target="#datetimepicker4_1" data-toggle="datetimepicker" style="padding-bottom: 9px;">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            
                                            </div>
                                            </div>
                                            
                                            
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12" style="margin: auto;margin-top: -5px;">
                                            <div >
											
											 
											 <div>
											<input type="submit" class="btn btn-primary" id="filter" >
												</div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12" style="margin: auto;margin-top: -41px;padding-left: 38px;">
                                            <div >
											
											 
                                           
											<button class="btn btn-primary" id="reset" value="RESET">RESET </div>
											</div> </div></div>
											
                                                
										
										
                                   
									
													
														
														
														
                                        </div>
													
                                </div>  
                        
                <div class="row" >
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                        
                        <h5 class="card-header">Employee History
                        
                        <label style="margin-left: 46%" class="custom-control custom-radio custom-control-inline">
															<input type="radio" name="radio_inline_" checked class="custom-control-input" value="permanent"><span class="custom-control-label">Permanent</span>
														</label>
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio" name="radio_inline_"  class="custom-control-input" value="visited"><span class="custom-control-label">Visited</span>
														</label></h5>
                            <div class="card-body">
                                <div id="result" class="table-responsive" ></div>
                                <div id="editor"></div>
                                <div id="result1" class="table-responsive" ></div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div></div>
            
                        
	
                               
                                        
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
                </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/datepicker/moment.js"></script>
    <script src="assets/vendor/datepicker/datepicker.js"></script>
    <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
  

    
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    
    <script>
    
        
        
        $(document).ready(function(){
			fetchuser()
          
            
            
			 function fetchuser()
			{
				var action="select";
				
				$.ajax({
					//alert("jdjd");
					url : "selecthistory.php",
					method:"POST",
					data:{action:action},
				    success:function(data){
						$('#result').html(data);
                        
					}
				});
				
			};
            
            setInterval(function() {
      fetchuser();// Do something every 5 seconds
}, 5000);

        
           

        });
        $(document).on('click', '#pdf', function(){ 
            var doc = new jsPDF('p','pt', 'a4');
            source = $('#result1')[0];
                var specialElementHandlers = {
                  '#editor': function (element, renderer) {
                return true;
            }
        };
                margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
                    };
            doc.fromHTML(
                source,
                margins.left,
                margins.top,{
                    'width': margins.width,
                    'elementHandlers': specialElementHandlers
            },
           function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        doc.save('Test.pdf');
     }, margins);
            
        });
        
        $('#filter').on("click",function(ev){
            var id=$('#input_select').val();
            var type=$("input[name='radio_inline_']:checked").val();
            //alert(type);
            if(id=="Select employee name")
            {
			    alert("select employee to search");
				event.preventDefault();
			}
            else{
                
                var date1=$('#mydate').val(); 
                var date2=$('#mydate1').val();

                //alert(date1);
                
                $('#result').hide();
                
                
                $.ajax({
					
					url : "historyshow.php",
					method:"POST",
					data:{id:id,date1:date1,date2:date2,type:type},
				    success:function(data){
                        $('#result1').show();
						$('#result1').html(data);
                        
					}
				});
         }

        });
        $('#reset').on("click",function(){
            $('#result1').hide();
            
            $('#result').show();

        });
		
    </script>
	<script src="assets/vendor/datepicker/datepicker.js"></script>
	 
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
     <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
     <script src="assets/libs/js/main-js.js"></script>
     <script src="assets/vendor/datepicker/moment.js"></script>
     <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
	
	
	
	
	
	
	
	
    
</body>
 
</html>