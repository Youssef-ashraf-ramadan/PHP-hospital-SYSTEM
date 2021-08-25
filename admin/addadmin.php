
<?php include '../shared/head.php';
 include '../general/configdatabase.php';
 include '../shared/navbar.php';
 include '../general/function.php';

if(isset($_POST['regist'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $insert = "INSERT INTO `admin` VALUES (NULL , '$name' , '$password')";
    mysqli_query($connect , $insert);
    header("Refresh:0; url=login.php");
}

auth(0)
?>




<section>

    <div class="container col-12 col-lg-6 my-3">
        <div class="card">
            <div class="card-body group1">
                <form method="POST">
                    <div class="form-group">
                        <label> admin name</label>
                        <input  name="name" type="text" class="form-control"
                            placeholder="name">

                    </div>

                    <div class="form-group">
                        <label> admin password</label>
                        <input  name="password" type="text" class="form-control"
                            placeholder="password">

                    </div>

                    <button name="regist" class="btn btn-primary form-control">Registration Page</button>

              



                </form>
            </div>
        </div>
    </div>
</section>















<?php include '../shared/script.php';?>