<?php 

require ('../dbconfig/config.php');
session_start();
error_reporting(0);

if(!isset($_SESSION['username']))
   {
       header("location:../index.php");
   }

?>
 
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Set Location</title>
    <!-- Bootstrap CSS -->
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
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> 
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />

    <!-- Bootstrap CSS -->
   

	
	<!-- ============================================================== -->
    <!-- map style  -->
    <!-- ============================================================== -->
	<style>
#map1{
	height:68%;
	width:100%;
	
}


   
</style>
	 
	
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php require ("navbar.php");?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <?php require ("leftbar.php");?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
		<div>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content" >
                <div class="row">
                    <div class="col-xl-12">
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title"> Set location</h3>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- select options  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card" style="margin-bottom: 1px;">
									<div style="display: inherit;">
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" style="margin-left: 0.5%;"><h5 style=" margin-top: 9px;margin-bottom: 1px;font-size: 15px;">Select employee :</h5></div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" ><h5 style="margin-top: 9px;margin-bottom: 1px;font-size: 15px;margin-left:7%">Select Type :</h5></div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" ><h5 style="margin-top: 9px;margin-bottom: 1px;font-size: 15px;">Radius :  <span  id="rad">100</span>   meter</div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" ><h5 style="margin-top: 9px;margin-bottom: 1px;font-size: 15px;">Time :  </div>

									</div>
									<form id="insert"  method="post">
										<div class="card-body" style="padding-top: 0.6rem;padding-right: 0.5rem;padding-bottom: 0rem;padding-left: 0.6rem;">
                                       
                                            <div class="form-row">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
											
                                                

                                                <select class="form-control" id="input_select" style="width:100%;margin-bottom: 9px;margin-left: 2.3%;">
                                                    
													<option> Select employee name </option>
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
								   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" style="margin-left: 3%;padding:0px;">
									
													
														
														<label  class="custom-control custom-radio custom-control-inline">
															<input type="radio" name="radio_inline" checked class="custom-control-input" value="permanent"><span class="custom-control-label">Permanent</span>
														</label>
														<label class="custom-control custom-radio custom-control-inline">
															<input type="radio" name="radio_inline" id="format" class="custom-control-input" value="visited"><span class="custom-control-label">Visited</span>
														</label></div>
														<p>
														
 

 
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-12" id="slider" style="margin-top: 0.9%;"></div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-12"   style="margin-top: 0.0%;margin-left: 7%;"><input type="text"  style=" width: 53%;" id="time_format"/></div>

														<div class="input-group date" id="datetimepicker4" data-target-input="nearest" style="width:49.5%;margin-left: 0.9%;">
                                            <input type="text" id="mydate" value="N/A" placeholder="Enter date " class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
													
                                </div>
									</div>
                        
                        
									</div>
		
                       
                        
							</div>
						</div>
							<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">										
								<div class="card-body" style="padding-left: 0%;">
									<div class="form-row" >
									<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12">
										<div id="map1" >
										</div></div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
											<div  style="  width: 100%;">
											<select class="form-control" id="select">
												<option > Select client name </option>
													 <?php
														if($stmt=$con->query("select * from client"))
														{
															while($r=$stmt->fetch_array(MYSQLI_ASSOC))
															{
															 ?>
												<option value="<?php echo $r['name'] ?>"><?php echo $r['name'] ?> </option>
										
													 <?php } } ?>  
											 </select> 
											 <div  style="  width:50%;margin-left: 2%;margin-top:5%;" >
											
											 
											 
											<input type="submit" class="btn btn-primary" id="submit"  value="INSERT"/ >
												 
											</div> </div> 											 
						 </form>	
										</div>
										
									</div>
			</div>
</div></div>
   
   
    

  <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
	<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

	
	<script >
	

	///////
      

		var map; //Will contain map object.
		var marker ="" ;
		var name1="";
		var lat="";
		var lng="";
		var currentLocation="";
		var date="";

		function j(){
			//alert(l1);
			//lat=l1;
		    //lng=l2;
			
			
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
		
		
		$('#select').change(function(){
			name1=$('#select').val();
			alert(name1);
			$.ajax({
				url:"emp.php"	,
				method:"POST",
				data:{name1:name1},
				dataType:"json",
				success:function(data)
				{
					lat=data.lat;
					lng=data.lng;
					marker=true;
					alert(marker);
					j(lat,lng);
					
					//console.log(data);
				}
				
				
			
			});
		});
			//for time picker only
			
	var timepicker = new TimePicker('time_format', {
			lang: 'en',
			theme: 'blue',
	});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});
	
		
		$('#insert').on("submit",function(event){
    
    var id=$('#input_select').val();
	//var radius=$('#slider').val(ui.value);
	
    var type= $("input[name='radio_inline']:checked").val();
	var radius=$( "#slider" ).slider( "value");
	var time=$('#time_format').val();

	if(type=="visited")
	{
		date = $('#mydate').val(); 
		alert(date);
		
							if(id=="Select employee name"){
								alert("select employee to allocate");
								event.preventDefault();
							}
							else if(marker==false)
							{//alert(lat);
								alert("please select specific location");
								event.preventDefault();
							}
							else if(date=='')
							{
								alert("please select date");
								event.preventDefault();
							}
							else{
							 
							
							
							
							
							
							
							$.ajax({
											
											url : "insertloc.php",
											method:"POST",
											data:{l:lat,l1:lng,id:id,type:type,date:date,radius:radius,time:time},
											success:function(data){
												alert(data);
												event.preventDefault();
											}
										});
										
										//initMap();
							}
								
	}
	else{
		date="N/A";
		//alert(date);
	
		//alert(radius);
	
	     
    
	
    if(id=="Select employee name"){
        alert("select employee to allocate");
        event.preventDefault();
    }
    else if(marker==false)
    {//alert(lat);
        alert("please select specific location");
        event.preventDefault();
    }
    else{
     
    
    
    
    
    //alert(id);
    //alert(time_);
    $.ajax({
					
					url : "insertloc.php",
					method:"POST",
					data:{l:lat,l1:lng,id:id,type:type,date:date,radius:radius,time:time},
				    success:function(data){
                        alert(data);
						//console.log();
						event.preventDefault();
					}
				});
				
                //initMap();
	}}
});

		$('input[name = radio_inline]').on('click init-post-format',function(){
			
			$('#datetimepicker4').toggle($('#format').prop('checked'));
		}).trigger('init-post-format');
			
		
		
		
		
		

		
        function initMap()
        {
            $('#datetimepicker4').hide();
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
    currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    lat = currentLocation.lat(); //latitude
   lng = currentLocation.lng(); //longitude
   alert(lat);
   alert(lng);
   
 
}

	 
        
//Load the map when the page has finished loading.
//google.maps.event.addDomListener(window, 'load', initMap);
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv8sqodU6JHTfTqACmD1Eg_ok2SuSfYks&libraries=places&callback=initMap"
    async defer></script>
	<script>
	
	</script>
 
	
	
	
	
	
	
	
	
	
 
		</div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
	<script src="assets/vendor/datepicker/datepicker.js"></script>
	 
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/datepicker/moment.js"></script>
    <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$(function() {
   
   $( "#slider" ).slider({
      value:100,
      min: 100,
      max: 1000,
      step: 10,
	  animate:true,
      slide: function( event, ui ) {
          //$( "#rad" ).val( ui.value );
		  $('#rad').html(ui.value);

          
      }
  });
  $( "#rad" ).val($( "#slider" ).slider( "value" ) );
  
  
});
</script>
</body>

 
</html>


				 
			
		   