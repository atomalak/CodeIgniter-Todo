<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js" type="text/javascript"></script>
</head>
<body>

<div class="container-fluid">
<div class="col col-sm-6">
<h1>Yeni Öğrenci Ekle</h1>
<form action="" method="POST">
<div class="form-group">
<label>Ogrenci Adı</label>
<input type="text" class="form-control" name="firstname"/>

</div>

<div class="form-group">
<label>Ogrenci Soyadı</label>
<input type="text" class="form-control" name="lastname"/>

</div>
    

<div class="form-group">
<label>Tckn Bilgisi</label>
<input type="text" class="form-control" name="tckn"/>

</div>
<button class="btn btn-success" name="new_btn" > Ekle</button>
</form>

</div>

</div>


    
    
</body>
</html>