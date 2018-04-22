<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <h3>input data</h3>
    <form action="<?php echo base_url(); ?>crud/action_add" method="post">
        <input type="text" name="nama" placeholder="masukan nama"><br>
        <input type="text" name="status" placeholder="masukan status"><br>
        <input type="text" name="jurusan" placeholder="masukan jurusan"><br><br>
        <input type="submit" value="simpan"><br>
    </form>
</body>
</html>