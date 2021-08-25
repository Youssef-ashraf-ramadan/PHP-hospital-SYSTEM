
<?php include '../shared/head.php';
 include '../general/configdatabase.php';
 include '../shared/navbar.php';




 if(isset($_POST['login'])){
   $name=  $_POST['name'];
   $password=  $_POST['password'];
   $select = "SELECT * FROM `admin` WHERE name = '$name' AND password = '$password' ";
   $a = mysqli_query($connect , $select);
   $row = mysqli_fetch_assoc($a);
  $num= mysqli_num_rows($a);

  if($num > 0){
  echo '<h1 class="text-center">Welcome</h1>';
  $_SESSION['admin'] = $name;
  $_SESSION['role'] = $row['role'];
  header("Refresh:0; url=/hospital/index.php");
  }else{
      
    echo '<h1 class="text-center">try again</h1>';
  }
 }



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

                    <button name="login" class="btn btn-primary form-control">login</button>
               
              



                </form>
            </div>
        </div>
    </div>
</section>















<?php include '../shared/script.php';?>