<?php include '../shared/head.php';
 include '../general/configdatabase.php';
 include '../shared/navbar.php';
 include '../general/function.php';
//list doctors

$select = " SELECT fields.field  , doctors.id, doctors.name  FROM doctors JOIN  fields on doctors.fieldID = fields.id";
$list = mysqli_query($connect , $select);



//delete doctors 

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `doctors` Where id = $id ";
    mysqli_query($connect , $delete);
    header("Refresh:0; url=listDoctors.php");
}


auth(0,1);

 ?>;




<section>
    <div class="container col-12 col-lg-6 my-3">
        <h1 class="text-center text-info">List Doctors </h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>FieldID</th>
                        <th>Action</th>

                    </tr>
                    <?php foreach($list as $doctorslist){?>
                    <tr>
                        <td> <?php echo $doctorslist['id'] ?> </td>
                        <td> <?php echo $doctorslist['name'] ?> </td>
                        <td> <?php echo $doctorslist['field'] ?> </td>
                        <td> <a class="btn btn-danger" href="listDoctors.php?delete=<?php echo $doctorslist['id']  ?>"> delete </a> </td>
                        <td> <a class="btn btn-info" href="/hospital/doctors/addDoctors.php?edit=<?php echo $doctorslist['id']  ?>"> update </a> </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>





</section>




























<?php include '../shared/script.php';?>