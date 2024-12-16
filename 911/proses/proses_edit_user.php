<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities(string: $_POST['id']) : "";
$name = (isset($_POST['nama'])) ? htmlentities(string: $_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities(string: $_POST['username']) : "";
$level = (isset($_POST['level'])) ? htmlentities(string: $_POST['level']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities(string: $_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities(string: $_POST['alamat']) : "";
$password = md5('password');

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($conn, query: "UPDATE tb_user SET nama='$name', username='$username', level='$level', nohp='$nohp',
    alamat='$alamat' WHERE id='$id'");
    if($query){
        $message = '<script>alert("Data berhasil diubah");
                    window.location="../user"</script>
                    </script>';
    }else{
        $message = '<script>alert("Data gagal diubah")</script>';
    }
}echo $message;
?>