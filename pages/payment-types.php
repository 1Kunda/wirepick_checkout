<!-- ROUTE TO THIS PAGE ON SMALL SCREENS -->

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <title>Payment Methods</title>
</head>

  <body>
    <?php 
      include_once '../src/components/general/layout.php';
      include_once '../src/components/navigation/navigation_bar.php'; 
      include_once '../src/components/general/container.php';  
      include_once '../src/components/payments/payment_type_card.php';
      include_once '../src/components/buttons/action_buttons.php'
    ?>

    <?php LayoutContainerOpen() ?>
      <?php containerOpen() ?>
        <div class="w-full pt-10">
          <div id="payment-methods" class="w-full block md:hidden">
              <?php 
                backButton()
              ?>
              <p class="font-medium text-xl mb-4 uppercase"> Payment Methods </p>
              <div class="w-full">
                  <?php
                      paymentTypeCard(
                          "Airtel Payment", 
                          "/pages/mobile-money-payment.php?pid=1", 
                          "/public/assets/airtel-logo.png",
                          "airtel logo"
                      );
                      paymentTypeCard(
                          "MTN Payment", 
                          "/pages/mobile-money-payment.php?pid=2", 
                          "/public/assets/mtn-money-logo.jpg",
                          "mtn logo"
                      );
                      paymentTypeCard(
                          "Zamtel Payment", 
                          "/pages/mobile-money-payment.php?pid=3", 
                          "/public/assets/zamtel-zambia-logo.png",
                          "zamtel logo"
                      );

                      paymentTypeCard2();
                  ?>
              </div>
          </div>
        </div>
        
      <?php containerClose() ?>
    <?php LayoutContainerClose() ?>

    <script>


      

    </script>


  </body>
</html>