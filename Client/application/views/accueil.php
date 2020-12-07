<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="fr">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url();?>assets/css/materialize/materialize.min.css>
  <link rel="stylesheet" type="text/css" href=<?php echo base_url();?>assets/css/style.css>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <head>
    <link rel="icon" href="img/favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Client</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <body>
    <br>
    <div class="container">
      <table class="responsive-table highlight">
        <thead>
          <tr>
            <th>Title</th>
            <th>Download</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($data as $value): ?>
            <tr>
              <td><?php echo $value['title'];?></td>
              <td><a href="<?php echo $value['latest'];?>" class="btn-floating pulse"><i class="material-icons">file_download</i></a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>

    <!--JS-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>