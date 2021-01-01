<?php
include('include/header.php'); 
$msg ='';

if(isset($_REQUEST['AddCourse']))
{
    $cname = $_REQUEST['cname'];
    $cyear = $_REQUEST['cyear'];

    if(($_REQUEST['cname'] == "") || ($_REQUEST['cyear'] == "") )
    {
        $msg = 'Fill all details';
        
    }
    else{
       $sql = "INSERT INTO `course`(`cname`, `cyear`) VALUES ('$cname','$cyear')";
        if($conn->query($sql)== TRUE)
        {
            $msg = 'course added succesfully';
        }
    
    }
}

?> 

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add New Hostel</h1>
</div>

<!-- add stud -->
<div class="text-center font-weight-bold">
    <p class="align-center text-danger"><?php echo $msg; ?></p>
    
</div>

<div class="card rounded shadow m-2">
    <form class="p-4" action="" method="post">
       <div class="form-group">
           <label for="name">Course Name</label>
           <input type="text"  class="form-control" name="cname" id="cname">
       </div>
       <div class="form-group">
           <label for="name">Course Year</label>
           <input type="number"  class="form-control" name="cyear" id="cyear">
       </div>
       
       <div class="text-center">
       <input class="btn align-center btn-success" type="submit" value="ADD HOSTEL" name="AddCourse"></input>
       <a href="course.php" class="btn align-center btn-danger">Close</a>
    </div>
    </form>
</div>


<?php include('include/footer.php') ?>