<html>

<head>
    <Title>Crud dengan CodeIgniter</Title>
</head>
<center>
    <h1>Crud degang CodeIgniter</h1>
    <h3>Form Edit Data</h3>
</center>
<?php foreach($user as $u) { ?>
    <form action="<?php echo base_url() . 'crud/update' ?>" method="post">
        <table style="margin: 20px auto;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <input type="hidden" name="id" value="<?php echo $u->id ?>">
                <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="" value="<?php echo $u->alamat ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan" id="" value="<?php echo $u->pekerjaan ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
<?php } ?>

</html>