<?php
if(isset($_POST["btn-login"])){
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    $data = mysqli_query($koneksi,"SELECT username, sandi_user from t_user where username='$uname' and sandi_user='$psw'");
    
    $t_user = mysqli_query($koneksi,"SELECT * FROM t_user where username='$uname'");
    $row = mysqli_fetch_assoc($t_user);
    $nama = $row["nama_user"];
    $alamat_admin = $row['alamat_user'];
    
    if($uname and $psw){
        if($data){
            if($uname == "ADMIN-BENGKELO-KIDUL" or "ADMIN-PLOSO" or "ADMIN-GLURAN" or "ADMIN-LEPIT"){
                $_SESSION["username"] = $uname;
                 echo "<script>location.href = 'admin/page_admin.php?admin=$uname&alamat_user=$alamat_admin'</script>";
                //header("location: ../admin/page_admin.php?admin=$uname&alamat_admin=$alamat_admin ");
            }else{
                $_SESSION["username"] = $uname;
                echo "<script>location.href = 'index.php'</script>";
                //header("location: ../user/home.php");
               // header("location: index.php");
            }
        }else{?>   
            <div style="color: red;"><i><?= "username dan password Tidak Sesuai";?></i></div>
        <?php }
    }else{?>
        <div style="color: red;"><i><?= "Isi kolom username dan password ";?></i></div> 
    <?php }
}?>