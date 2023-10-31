<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <title>Mobile Money Payment</title>
</head>

  <body>
    <?php 
      require "../config.php";
      
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
                        backButton(BASE_URL."/pages/payment-types.php");
                      ?>
                    </div>

                    <div class="hidden md:block">
                      <?php 
                        backButton(BASE_URL."/pages");
                      ?>
                    </div>

                    <p id="title-text" class="text-xl font-medium mb-4 uppercase"></p>

                    <?php
                      include_once '../src/forms/single_payment_form.php';
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
        var titleElement =document.getElementById("title-text")
        var urlString = window.location.search;

        // Create a URLSearchParams object from the URL string
        var urlParams = new URLSearchParams(urlString);

        // Get specific query parameters
        var pid = urlParams.get('pid');   

        if(urlParams.has('pid')) {
          if(pid === "1"){
            titleElement.innerHTML = "Airtel Payment"
          }  

          else if(pid === "2"){
            titleElement.innerHTML = "MTN Payment"
          }

          else{
            titleElement.innerHTML = "Zamtel Payment"
          }
        } 
        else {
          titleElement.innerHTML = "Airtel Payment"
        }


      });
      

    </script>


  </body>
</html>