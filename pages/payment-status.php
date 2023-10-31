<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <title>Payment Status</title>
</head>

  <body>
    <?php 
      require "../config.php";
      
      include_once '../src/components/general/layout.php';
      include_once '../src/components/general/container.php';  
    ?>

    <?php
      // display navigation bar 
      include_once '../src/components/navigation/navigation_bar.php';  
    ?>

    <?php LayoutContainerOpen() ?>
      <?php containerOpen() ?>

        <?php
          include_once '../src/components/invoice/invoice.php';  
        ?>

      <?php containerClose() ?>
    <?php LayoutContainerClose() ?>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
      });
      

    </script>


  </body>
</html>