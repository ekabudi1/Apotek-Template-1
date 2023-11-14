<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>REGISTER</h1>
        <form action="proses_register_enkripsi.php" method="POST">
            <table>
                <tr>
                    <td>Nama Karyawan</td>
                    <td>
                        <select name="id_karyawan" id="">
                            <?php
                            include "../koneksi.php";
                            $query = "SELECT * FROM tb_karyawan WHERE idkaryawan NOT IN (SELECT idkaryawan FROM tb_login);";
                            $data = mysqli_query($koneksi, $query);
                            $cek = mysqli_num_rows($data);
                            if($cek > 0){
                                while($baris = mysqli_fetch_assoc($data)){
                                ?>
                            <option value="<?= $baris['idkaryawan']; ?>"><?= $baris['namakaryawan'];?></option>
                            <?php
                                }
                            }else{
                                echo "<option>Semua Karyawan Sudah Register</option>";
                            }                         
                            
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Level User</td>
                    <td>
                        <select name="level" id="">
                            <option value="admin">admin</option>
                            <option value="karyawan">karyawan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Register"></td>
                </tr>
            </table>
        </form>

    </center>
</body>

</html>