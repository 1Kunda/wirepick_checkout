<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <title>Card Payment</title>
</head>

  <body>
    <?php 
      include_once '../src/components/general/layout.php';
      include_once '../src/components/navigation/navigation_bar.php'; 
      include_once '../src/components/general/container.php';  
      include_once '../src/components/buttons/action_buttons.php'
    ?>

    <?php LayoutContainerOpen() ?>

      <?php containerOpen() ?>
        <div class="w-full pt-10">
            <div class="w-full">
                
                <div class="gap-x-7 flex">    
                  <div class="w-full">

                    <div class="block md:hidden">
                      <?php 
                        backButton("/pages/payment-types.php");
                      ?>
                    </div>

                    <div class="hidden md:block">
                      <?php 
                        backButton("/");
                      ?>
                    </div>

                    <p id="title-text" class="text-xl font-medium mb-4 uppercase"> Card Payment</p>

                    <?php
                      include_once '../src/forms/card_payment_form.php';
                    ?>

                  </div>

                  <div class="hidden md:block w-full md:max-w-sm">
                      <?php include '../src/components/checkout_summary/details.php';  ?>
                  </div>

                </div>
            </div>
            

        </div>
      <?php containerClose() ?>
    <?php LayoutContainerClose() ?>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
      });
      

    </script>


  </body>
</html>