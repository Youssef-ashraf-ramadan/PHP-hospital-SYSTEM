<?php include '../shared/head.php';
 include '../general/configdatabase.php';
 include '../shared/navbar.php';
 include '../general/function.php';
//list fields
/// select fields table

$select = "SELECT * FROM fields";
$list = mysqli_query($connect , $select);


//delete fields 


if(isset($_GET['delete'])){
    $idd = $_GET['delete'];
    $delete = "DELETE FROM `fields` WHERE id = $idd";
   mysqli_query($connect , $delete);

 

}

auth (0,1);
 ?>;




<section>
    <div class="container col-12 col-lg-6 my-3">
        <h1 class="text-center text-info">List fields </h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                    <?php foreach($list as $field){?>
                    <tr>
                        <td> <?php echo $field['id'] ?> </td>
                        <td> <?php echo $field['field'] ?> </td>
                        <td> <a class="btn btn-danger" href="/hospital/fields/listfields.php?delete=<?php echo $field['id']?>"> delete </a> </td>
                        <td> <a class="btn btn-info" href="/hospital/fields/addfield.php?edit=<?php echo $field['id'] ?>"> update </a> </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>





</section>

<?php include '../shared/script.php';?>