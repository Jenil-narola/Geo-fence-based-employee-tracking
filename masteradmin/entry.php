<?php
    require ('../dbconfig/config.php');
    
        $phone =$_POST['phone'];
		$password =$_POST['password'];
        $name =$_POST['name'];
        $email =$_POST['email'];
		$gender =$_POST['gender'];
       
        

       
        $query ="INSERT INTO emp(mob_no,pass,name,email,gender) values('$phone','$password','$name','$email','$gender')";
        mysqli_query($con,$query);
        
            
           
        

    
?>
<div class="row" >
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" >
                                    <table class="table table-striped table-bordered first" >
                                        <thead>
    
                                            <tr>
                                                <th>ID</th>
                                                <th>Phone</th>
                                                <th>Password</th>
                                                <th>Name</th>
												<th>Email</th>
                                                <th>Gender</th>
												<th></th>
                                                <th></th>
                                                    
                                            </tr>
                                        </thead>
										
                                        <tbody class="card1">
                                                <?php   $query="select * from emp";
                                                        $res=mysqli_query($con,$query); 
                                                        while ($row = mysqli_fetch_assoc($res)){ ?>                              
                                                <tr> 
                                                    <td><?php echo $row['id'];?></td>
                                                    <td><?php echo $row['mob_no'];?></td>
                                                    <td><?php echo $row['pass'];?></td>
                                                    <td><?php echo $row['name'];?></td>
													<td><?php echo $row['email'];?></td>
													<td><?php echo $row['gender'];?></td>
													<td><a href="#" class="btn btn-rounded btn-success">Update</a></td>
													<td><a href="#" class="btn btn-rounded btn-danger">Delete</a></td>
                                                </tr><?php } ?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>

                            <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>