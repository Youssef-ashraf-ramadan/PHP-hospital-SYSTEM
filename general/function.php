<?php 

function auth ($role , $role2 = 0){
    if($_SESSION['admin']){
        if($_SESSION['role']==$role || $_SESSION['role']==0 ||$_SESSION['role'] == $role2 ){
        }else{
            header("Refresh:0; url=/hospital/admin/login.php");
        }        
    }else{
        header("Refresh:0; url=/hospital/admin/login.php");
    }
    
}

?>


