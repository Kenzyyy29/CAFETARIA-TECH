<?php
include "connect.php";
$name = (isset($_POST['nama'])) ? htmlentities(string: $_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities(string: $_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities(string: $_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities(string: $_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities(string: $_POST['alamat']) : "";
$password = md5('password');

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($conn, query: "INSERT INTO tb_user (nama,username,level,nohp,alamat,
    password) values ('$name','$username','$level','$nohp','$alamat','$password')");
    if(!$query){
        $message = '<script>alert("Data gagal dimasukkan")</script>';
    }else{
        $message = '<script>alert("Data berhasil dimasukkan");
                    window.location="../user"</script>
                    </script>';
    }
}echo $message;
?>