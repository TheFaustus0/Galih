<!DOCTYPE html>
<html>
<head>
  <title>edit</title>
  <!-- Bootstrap -->
  <style>
     form{
          left: 33%;
          top: 20%;
          position: absolute;
    }
  </style>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php foreach ($tampil as $u){?>
    <form action="<?php echo base_url().'index.php/Crud/update' ?>"  enctype="multipart/form-data" method="post">
    <table style="margin:50px auto;">
      <tr>
        <td>Merk Sepatu</td>
        <td><input type="text" class="form-control" name="merk_sepatu" value="<?php echo $u->merk_sepatu ?>"></td>
        <input type="hidden" name="id" value="<?php echo $u->id ?>">
      </tr>
      <tr>
        <td>No Sepatu</td>
        <td><input type="text" class="form-control" name="no_sepatu" value="<?php echo $u->no_sepatu ?>"></td>
      </tr>
      <tr>
        <td>Jenis</td>
        <td><input type="text" class="form-control" name="jenis" value="<?php echo $u->jenis ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><img src="<?php echo base_url().'image/'.$u->gambar ?>" height="80" widht="100"></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td><input type="file" name="gambar" value="<?php echo $u->gambar ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-outline-primary btn-block" value="submit" >
        </td>
      </tr>
      <tr>
        <td><tr>
        <td></td>
        <td><a class="btn btn-outline-danger btn-block" href="<?php echo base_url().'index.php/Crud/index' ?>" onclick="return confirm('Apakah Anda Yakin ?')">Kembali</a></td>
      </tr></td>
      </tr>
    </table>
    </form>
  <?php } ?>
   

</body>
</html>