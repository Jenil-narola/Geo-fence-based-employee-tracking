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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

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
                   
                        
                        
                <div class="row" >
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                        <h5 class="card-header">client List</h5>
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
                                                        <label for="user" class="col-3 col-lg-2 col-form-label text-right">name</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="user" type="text" required=""  placeholder="username" class="form-control">
                                                        </div>
                                                    </div>
													<div class="form-group row">
														<label for="map1" class="col-3 col-lg-2 col-form-label text-right">Select location :</label>
													</div>	
                                                   <div class="form-group row" id="map1">
                                                       
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
                                    <div class="modal fade" id="exampleModal2"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <label for="user" class="col-3 col-lg-2 col-form-label text-right">name</label>
                                                        <div class="col-9 col-lg-10">
                                                            <input id="name"  required=""  placeholder="username" class="form-control">
                                                        </div>
                                                    </div>
													 <div class="form-group row">
														<label for="map1" class="col-3 col-lg-2 col-form-label text-right">Select location :</label>
													</div>	
                                                   <div class="form-group row" id="map2">
                                                       
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
					map=new google.maps.Map(document.getElementById("map2"),mapProp);
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
    
    <script>
	
        $(document).ready(function(){
			fetchuser();
			function fetchuser()
			{
				var action="select";
				
				$.ajax({
					//alert("jdjd");
					url : "selectclient.php",
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
					url : "selectclient.php",
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
                     url:"actionclient.php",  
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
		    alert(id);
			$.ajax({
                    url:"fetchclient.php",
                    method:"POST",
					data:{id:id},
					dataType:"json",
                    success:function(data)
                    {
						//alert(data);
						$('#id').val(id);
						$('#exampleModal2').modal('show'); 
						$('#name').val(data.name);
						lat=data.lat;
						lng=data.lng;
						console.log(data);
						k(lat,lng);
			  
                    }
			
		   
		  
           
                
				
            
            
			}); 
		});			
		$('#insert_form').on("submit",function(e){
                
				var name = $('#user').val();
                //var lat = $('#lat').val();
				//var lng = $('#lng').val();
				//alert(name);
				
               // var name = $('#user').val();
                //var email = $('#email').val();
                //var gender = $("input[name='radio_inline']:checked").val();
				alert(lat);
				var action = $('#action').val();
				var dataTosend='&name='+name+'&lat='+lat+'&lng='+lng+'&action='+action;
                if(name !='' && lat != ''&& lng !='' )
				{
	
                
                alert(dataTosend);
                
                $.ajax({
                    url:"actionclient.php",
                    method:"POST",
                    data:dataTosend,
                    success:function(data)
                    {
						
                        alert(data);
						
                    }

                });
				}
            });
			$('#insert_form1').on("submit",function(e){
                
				var name = $('#name').val();
               
				 var id = $('#id').val();
				//console.log(lat);
				//alert(lat);
				var action = $('#action1').val();
				var dataTosend='&name='+name+'&lat='+lat+'&lng='+lng+'&action='+action+'&id='+id;
				alert(dataTosend);
                if(name !='' &&  lat !='' && lng != '')
				{
	
                
                //alert(dataTosend);
                
                $.ajax({
                    url:"actionclient.php",
                    method:"POST",
                    data:dataTosend,
                    success:function(data)
                    {
						
                       
						 
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
	
	
	
	
	
	
	
	
    
</body>
 
</html>