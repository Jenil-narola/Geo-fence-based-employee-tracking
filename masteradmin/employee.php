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
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <title>Employee Detail </title>
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
                   
                        
                        
                <div class="row" >
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                        <h5 class="card-header">Employee List</h5>
                            <div class="card-body">
                                <div id="result" class="table-responsive" >
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div></div>
            
                        <div class="card">
                            <!-- Button trigger modal -->
                            <a ><img src="assets/images/addbutton.png" data-toggle="modal" data-target="#exampleModal" style="z-index: 999; height: 65px;width: 66px;position: fixed;top: 94px;right: 43px;"></a>
                            <div id=employee_table></div>
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Enter Detail</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="false">&times;</span>
                                                    </a>
                                                </div>
                                            <div class="modal-body">
                                        <div class="card">
                                            
                                            <div class="card-body">
                                                <form id="insert_form" method="post"  data-parsley-validate="" novalidate="">
												<div class="form-group row">
                                                        <label for="phone" class="col-3 col-lg-2 col-form-label text-right">Phone</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="phone" type="text" required="" data-parsley-pattern="[0-9]{9,15}"   placeholder="Enter only digit" class="form-control">
                                                        </div>
                                                    </div>
												<div class="form-group row">
                                                    <label for="pass2" class="col-3 col-lg-2 col-form-label text-right">password</label>
                                                        <div  class="col-5 col-lg-5">
                                                            <input id="pass2" type="password"  placeholder="Password" class="form-control"  data-parsley-required>
                                                        </div>
                                                        <div class="col-9 col-lg-5">
                                                            <input type="password" id="pass1" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="user" class="col-3 col-lg-2 col-form-label text-right">Username</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="user" type="text" required=""  placeholder="username" class="form-control">
                                                        </div>
                                                    </div>
													<div class="form-group row">
													<label for="user" class="col-3 col-lg-2 col-form-label text-right">Gender</label>
														<div class="col-9 col-lg-10">
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio" name="radio_inline" checked="" class="custom-control-input" value="male"><span class="custom-control-label">Male</span>
														</label>
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio" name="radio_inline" class="custom-control-input" value="female"><span class="custom-control-label">Female</span>
														</label>
														</div>
													</div>
                                                    <div class="form-group row">
                                                        <label for="email" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="email" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                                                        </div>
                                                    </div>
													
                                                    
                                                    
                                                    <div class="row pt-2 pt-sm-5 mt-1">
                                                        <div class="col-sm-6 pl-0">
                                                            <p class="text-right">
                                                            <input type="submit" name="insert" id="action" value="insert" class="btn btn-space btn-primary" />
                                                                <!--<button type="submit" name="login_button" id="login_button" class="btn btn-space btn-primary">Submit</button>-->
                                                            
															<button class="btn btn-space btn-secondary" data-dismiss="modal">Cancel</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
	<div id=employee_table></div>
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Enter Detail</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="false">&times;</span>
                                                    </a>
                                                </div>
                                            <div class="modal-body">
                                        <div class="card">
                                            
                                            <div class="card-body">
                                                <form id="insert_form1" method="post"  data-parsley-validate="" novalidate="">
												<input type="hidden" name="id" id="id"/>
												<div class="form-group row">
                                                        <label for="phone" class="col-3 col-lg-2 col-form-label text-right">Phone</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="phone1" type="text" required="" value="<?php echo "value not" ;?>" data-parsley-type="digits" placeholder="Enter only digit" class="form-control" >
                                                        
														</div>
                                                    </div>
												<div class="form-group row">
                                                    <label for="pass2" class="col-3 col-lg-2 col-form-label text-right">password</label>
                                                        <div  class="col-9 col-lg-10">
                                                            <input id="pass21" type="password" required="" placeholder="Password" class="form-control">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="user" class="col-3 col-lg-2 col-form-label text-right">Username</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="user1" type="text" required=""  placeholder="username" class="form-control">
                                                        </div>
                                                    </div>
													<div class="form-group row">
													<label for="user" class="col-3 col-lg-2 col-form-label text-right">Gender</label>
														<div class="col-9 col-lg-10">
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio"   name="radio_inline"  class="custom-control-input" value="male"><span class="custom-control-label">Male</span>
														</label>
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio"  name="radio_inline" class="custom-control-input" value="female"><span class="custom-control-label">Female</span>
														</label>
														</div>
													</div>
                                                    <div class="form-group row">
                                                        <label for="email" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="email1" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                                                        </div>
                                                    </div>
													
                                                    
                                                    
                                                    <div class="row pt-2 pt-sm-5 mt-1">
                                                        <div class="col-sm-6 pl-0">
                                                            <p class="text-right">
                                                            <input type="submit" name="update" id="action1" value="update" class="btn btn-space btn-primary" />
                                                                <!--<button type="submit" name="login_button" id="login_button" class="btn btn-space btn-primary">Submit</button>-->
                                                            
															<button class="btn btn-space btn-secondary" data-dismiss="modal">Cancel</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>										
                                        </div>
                                        
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
    
    
    
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script>
        $(document).ready(function(){
			fetchuser();
			function fetchuser()
			{
				var action="select";
				
				$.ajax({
					//alert("jdjd");
					url : "select.php",
					method:"POST",
					data:{action:action},
				    success:function(data){
						$('#result').html(data);
					}
				});
				
			}
            

        });
		$(document).on('click', '#delete', function(){  
		
		function fetchuser()
			{
				var action="select";
				
				$.ajax({
					//alert("jdjd");
					url : "select.php",
					method:"POST",
					data:{action:action},
				    success:function(data){
						$('#result').html(data);
					}
				});
				
			}
           var id = $(this).attr("value");  
		   //alert(id);
           if(confirm("Are you sure you want to remove this data?"))  
           {  
                var action = "delete";
				
				var dataTosend='id='+id+'&action='+action;
				//alert(dataTosend);
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:dataTosend, 
                     success:function(data)  
                     {  
							alert(data);
                          fetchuser();  
                            
                     }  
                })  
           }  
            
      });  
		
		$(document).on('click', '#update', function(){  
		
			var id = $(this).attr("value");  
		    //alert(id);
			$.ajax({
                    url:"fetch.php",
                    method:"POST",
					data:{id:id},
					dataType:"json",
                    success:function(data)
                    {
						//$('#action).text("update");
						$('#id').val(id);
						$('#exampleModal1').modal('show'); 
						$('#phone1').val(data.mob_no);
						$('#pass21').val(data.pass);
						$('#user1').val(data.name);
						//$('#gen').val(data.gender);
						$('input:radio[value="'+data.gender+'"]').prop('checked',true);
						
						$('#email1').val(data.email);
						
						
                        
						 
						
                        
                    }
			
		   
		  
           
                
				
            
            
			}); 
		});			
		$('#insert_form').on('submit',function(){
                
				var phone = $('#phone').val();
                var password = $('#pass2').val();
				var password1 = $('#pass1').val();
				
                var name = $('#user').val();
                var email = $('#email').val();
                var gender = $("input[name='radio_inline']:checked").val();
				var action = $('#action').val();
				var dataTosend='phone='+phone+'&password='+password+'&name='+name+'&email='+email+'&gender='+gender+'&action='+action;
                if(phone !='' && password != ''&& password1 !='' && name !='' && email != '' && gender!='' && password == password1)
				{
	
                
                //alert(dataTosend);
                
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:dataTosend,
                    success:function(data)
                    {
						
                        alert(data);
						
							fetchuser();
                        
                    }

                });
				}
            });
			$('#insert_form1').on('submit',function(){
                
				var phone = $('#phone1').val();
                var password = $('#pass21').val();
				
				var id=$('#id').val();
                var name = $('#user1').val();
                var email = $('#email1').val();
                var gender = insert_form1.radio_inline.value;
				var action = $('#action1').val();
				var dataTosend='phone='+phone+'&password='+password+'&name='+name+'&email='+email+'&gender='+gender+'&action='+action+'&id='+id;
				//alert(gender);
                if(phone !='' &&  name !='' && email != '' && gender!='' && password !='')
				{
	
                
                //alert(dataTosend);
                
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:dataTosend,
                    success:function(data)
                    {
						
                        //alert(data);
						 
						//fetchuser();
                        
                    }

                });
				}
            });
			
			
			
		
		
    </script>
	<script>
	 </script>
	<script>
    $('#insert_form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
	
	<script src="assets/vendor/datepicker/datepicker.js"></script>
	 
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/datepicker/moment.js"></script>
    <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script>
	
	
</script>	
	
	
	
    
</body>
 
</html>