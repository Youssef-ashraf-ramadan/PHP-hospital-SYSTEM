<?php include '../shared/head.php';
 include '../general/configdatabase.php';
 include '../shared/navbar.php';
 include '../general/function.php';
if(isset($_POST['send'])){ //insert
    $name = $_POST['name'];
    $fieldID = $_POST['fieldid'];
    $insert = "INSERT INTO `doctors` VALUES (NULL , '$name' , $fieldID)";
   mysqli_query($connect , $insert);
   header("Refresh:0; url=listDoctors.php");
}


/// select fields table

$select = "SELECT * FROM fields";
$add = mysqli_query($connect , $select);


// update
$name = "";
$update = false;
if(isset($_GET['edit'])){
    $update = true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `doctors` WHERE id = $id";
    $up=mysqli_query($connect , $select);
    $row=mysqli_fetch_assoc($up);
    $name = $row['name'];

    if(isset($_POST['update'])){ //insert
        $name = $_POST['name'];
        $fieldID = $_POST['fieldid'];
        $update = "UPDATE  `doctors` SET name = '$name' , fieldid = $fieldID WHERE id = $id " ;
       mysqli_query($connect , $update);
       header("Refresh:0; url=listDoctors.php");
    }
    
}
auth (0,1);

?>





<section>
    <?php if($update): ?>
    <h1 class="text-center text-info">edit doctors </h1>


    <?php else: ?>
        <h1 class="text-center text-info">Add doctors </h1>

<?php endif;?>
    <div class="container col-12 col-lg-6 my-3">
        <div class="card">
            <div class="card-body group1">
                <form method="POST">
                    <div class="form-group">
                        <label> Doctor name</label>
                        <input value="<?php echo $name ?>" name="name" type="text" class="form-control" placeholder="name">

                    </div>
                    <div class="form-group">
                        <label>Field ID</label>
                        <select name="fieldid" class="form-control" placeholder="Field id" >
                            <?php foreach($add as $field){?>
                            <option value="<?php echo $field['id']?>"> <?php echo $field['field'] ?></option>
                            <?php }?>
                        </select>
                           
                    </div>


<?php if($update) :?>

                    <button name="update" class="btn btn-danger form-control">update</button>
<?php else:?>
                    <button name="send" class="btn btn-primary form-control">Send</button>

                    <?php endif;?>

                


                </form>
            </div>
        </div>
    </div>
</section>


<?php include '../shared/script.php';?>