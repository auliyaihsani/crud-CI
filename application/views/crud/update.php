<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
    <h3>Edit data</h3>
    
    <?php foreach($content->result() as $key): ?>
    <form action="<?php echo base_url(); ?>crud/action_update/<?php echo $key->id ?>" method="post">
    <input type="text" name="nama" placeholder="masukan nama" value="<?php echo $key->nama ?>" ><br>
    <input type="text" name="status" placeholder="masukan status" value="<?php echo $key->status ?>"><br>
    <input type="text" name="jurusan" placeholder="masukan jurusan" value="<?php echo $key->jurusan ?> "> <br> <br>
    <input type="submit" value="simpan">
    </form>
    <?php endforeach ?>
</body>
</html>