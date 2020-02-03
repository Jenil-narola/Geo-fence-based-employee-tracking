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



<style>
#map1{
	height:298px;
	width:457px;
	
}
#map2{
	height:298px;
	width:457px;
	
}
html,body{
	height:500px;
	margin:0;
	padding:0px;
}
   
</style>


    

 
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

    <title>Track location </title>
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
                                                        <label for="phone" class="col-3 col-lg-2 col-form-label text-right">Name</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="name" type="text" required=""  data-parsley-type="text" class="form-control" >
                                                        
														</div>
                                                    </div>
											
													
												<div class="form-group row">
														<label for="map1" class="col-3 col-lg-2 col-form-label text-right">Select location :</label>
													</div>	
                                                   <div class="form-group row" id="map1">
                                                       
                                                    </div>
													
												
													<div class="form-group row">
													<label for="user" class="col-3 col-lg-2 col-form-label text-right">Type</label>
														<div class="col-9 col-lg-10">
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio" id="v2"  name="radio_inline"  class="custom-control-input" value="permanent"><span class="custom-control-label">Permanent</span>
														</label>
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio" id="v1" name="radio_inline" class="custom-control-input" value="visited"><span class="custom-control-label">Visited</span>
														</label>
														</div>
													</div>
                                                    <div class="form-group row">
                                                        <label for="time_format" class="col-3 col-lg-2 col-form-label text-right">Work hour</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="time_format" type="text"  style="width: 45%;margin-left: 5%;" class="form-control" >
                                                        
														</div>
                                                    </div>
                                                    
													<div class="form-group row" id="t">
                                                        <label for="user" id="d" class="col-3 col-lg-2 col-form-label text-right">Date</label>
														
                                                        
												
                                            <div class="form-group">
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="text" id="date1" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div></div>
                                    
                                                   
													
                                                    
                                                    
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
    <script src="assets/vendor/datepicker/datepicker.js"></script>
	 
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
     <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
     <script src="assets/libs/js/main-js.js"></script>
     <script src="assets/vendor/datepicker/moment.js"></script>
     <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    
    
   <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv8sqodU6JHTfTqACmD1Eg_ok2SuSfYks&libraries=places&callback=initMap"
    async defer></script>
   
    
	 <script>
     	
			
	var lat="";
	var lng="";
	var map;
	var marker="";
	function k(){
			//alert(lat);
			var myCenter=new google.maps.LatLng(lat,lng);

			var mapProp = {
                    center:myCenter,
                    zoom:15
                    
                    };
					map=new google.maps.Map(document.getElementById("map1"),mapProp);
                     marker=new google.maps.Marker({
                    position:myCenter,
					draggable: true,
                    });
                    marker.setMap(map);
					google.maps.event.addListener(map, 'click', function(event) {                
				//Get the location that the user clicked.
				var clickedLocation = event.latLng;
				marker.setPosition(clickedLocation);
				markerLocation();
					});
					google.maps.event.addListener(marker, 'dragend', function(event){
					markerLocation();
            });
					
					
					//google.maps.event.addDomListener(window, 'load', initialize);
					
			//alert(lat);
		}
	function initMap()
        {
            
			marker=false;
			//The center location of our map.
			var centerOfMap = new google.maps.LatLng(21.2142,72.8366);
			
 
			//Map options.
			var options = {
						center: centerOfMap, //Set center.
						zoom: 15 //The zoom value.
							};
        
			map = new google.maps.Map(document.getElementById('map1'), options);
 
			//Listen for any clicks on the map.
			google.maps.event.addListener(map, 'click', function(event) {                
				//Get the location that the user clicked.
				var clickedLocation = event.latLng;
				//If the marker hasn't been added.
				if(marker === false){
						//Create the marker.
						marker = new google.maps.Marker({
								position: clickedLocation,
								map: map,
								draggable: true //make it draggable
							});
					//Listen for drag events!
					google.maps.event.addListener(marker, 'dragend', function(event){
					markerLocation();
            });
        } else{
            //Marker has already been added, so just change its location.
            marker.setPosition(clickedLocation);
        }
        //Get the marker's location.
        markerLocation();
    });

      }
	  function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    lat = currentLocation.lat(); //latitude
   lng = currentLocation.lng(); //longitude
   alert(lat);
   alert(lng);
   
 
}

	 
        
//Load the map when the page has finished loading.
//google.maps.event.addDomListener(window, 'load', initMap);
    </script>
     <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
	
    <script>
    
        $(document).ready(function(){
			fetchuser();
           
			function fetchuser()
			{
				var action="select";
				
				$.ajax({
					//alert("jdjd");
					url : "selecttrack.php",
					method:"POST",
					data:{action:action},
				    success:function(data){
						$('#result').html(data);
					}
				});
				
			}
            setInterval(function(){
    fetchuser() // this will run after every 5 seconds
}, 5000);

        });
        

		$(document).on('click', '#delete', function(){  
		
		function fetchuser()
			{
				var action="select";
				
				$.ajax({
					//alert("jdjd");
					url : "selecttrack.php",
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
                     url:"actiontrack.php",  
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
      $(document).on('click', '#v1', function(){ 
            $('#t').show();
        });
        $(document).on('click', '#v2', function(){ 
            $('#t').hide();
        });
		
		$(document).on('click', '#update', function(){  
            var timepicker = new TimePicker('time_format', {
			lang: 'en',
			theme: 'blue',
	});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});
		
			var id = $(this).attr("value");  
		    alert(id);
			$.ajax({
                    url:"fetchtrack.php",
                    method:"POST",
					data:{id:id},
					dataType:"json",
                    success:function(data)
                    {
						//$('#action).text("update");
						$('#id').val(id);
						$('#exampleModal1').modal('show'); 
						$('#name').val(data.name);
			            $('#date1').val(data.date);
                        $('#time_format').val(data.work_hour);

						$('input:radio[value="'+data.type+'"]').prop('checked',true);
                       var t=data.type;
                       
                        if(t=="permanent")
                        {
                                $('#t').hide();
                        }
                        else{
                            $('#t').show();
                        }
						lat=data.lat;
						lng=data.lng;
						console.log(data);
						k(lat,lng);
                        

						//$('#email1').val(data.email);
						
						
                        
						 
						
                        
                    }
			
		   
		  
           
                
				
            
            
			}); 
		});			
	
			$('#insert_form1').on("submit",function(){
                
			//	var phone = $('#phone1').val();
              //  var password = $('#pass21').val();
				
				var id=$('#id').val();
                var name = $('#name').val();
                var date="";
				var type = $('#type').val();
                var work_hour = $('#time_format').val();
                var type = insert_form1.radio_inline.value;
				var action = $('#action1').val();
                if(type=="permanent")
                {
                    date="N/A";
                    alert(date);
                }
                else{
                    date=$('#date1').val();
                }
				var dataTosend='&name='+name+'&lat='+lat+'&lng='+lng+'&type='+type+'&date='+date+'&action='+action+'&id='+id+'&work_hour='+work_hour;
				alert(dataTosend);
                if(name !='' &&  lat !='' && lng != '' && type!='' && date !='')
				{
	
                
                //alert(dataTosend);
                
                $.ajax({
                    url:"actiontrack.php",
                    method:"POST",
                    data:dataTosend,
                    success:function(data)
                    {
						
                        //alert(data);
						 
						fetchuser();
                        
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
	
	
	
	
	
	
	
	
	
    
</body>
 
</html>