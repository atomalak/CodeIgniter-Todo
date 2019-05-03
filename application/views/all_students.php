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
<div class="col col-md-10">
     <table class="table table-collapsable">
       <thead>
           <th>Öğrenci Adı</th>
           <th>Öğrenci Soyadı</th>
           <th>Öğrenci Numarası</th>
       </thead>
       <tbody> 
        <?php foreach($students AS $student):  ?>
         <tr>
           <td style="display:none"><?php echo $student->ID ; ?></td>
           <td><?php echo $student->NAME ; ?></td>
           <td><?php echo $student->SURNAME ; ?></td>
           <td><?php echo $student->TCKN ; ?></td>
           <td>
             <a href="<?php echo base_url(); ?>index.php/student/edit/<?php echo $student->ID ?>">
              <button class="btn btn-primary">Güncelle</button>
           </td>
           <td>
            <a href="<?php echo base_url(); ?>index.php/student/delete/<?php echo $student->ID ?>">
                 <button class="btn btn-danger">Sil</button>
            </a>
             
           </td>
         </tr>
        <?php  endforeach; ?>
       </tbody>
     </table>
</div>
</body>
</html>