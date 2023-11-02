<?php 
    include_once './src/components/general/container.php';  
    include 'payment_type_card.php';

    $BASE_URL = BASE_URL;
?>

<?php containerOpen() ?>
    <div class="w-full pt-10">
        <div class="w-full hidden md:block">
            <p class="font-medium text-xl mb-4 uppercase"> Payment Methods </p>
            
            <div class="gap-x-7 flex">    
                <div class="w-full">
                    <?php
                        
                        paymentTypeCard(
                            "Airtel Payment", 
                            "$BASE_URL/pages/mobile-money-payment.php?pid=1", 
                            "$BASE_URL/public/assets/airtel-logo.png",
                            "airtel logo"
                        );
                        paymentTypeCard(
                            "MTN Payment", 
                            "$BASE_URL/pages/mobile-money-payment.php?pid=2", 
                            "$BASE_URL/public/assets/mtn-money-logo.jpg",
                            "mtn logo"
                        );
                        paymentTypeCard(
                            "Zamtel Payment", 
                            "$BASE_URL/pages/mobile-money-payment.php?pid=3", 
                            "$BASE_URL/public/assets/zamtel-zambia-logo.png",
                            "zamtel logo"
                        );

                        paymentTypeCard2($BASE_URL);
                    ?>
                </div>

                <?php include './src/components/checkout_summary/details.php';  ?>

            </div>
        </div>

        <div class="block md:hidden">
            <?php 
                include './src/components/checkout_summary/details.php';  
            ?>

        </div>
        

    </div>
<?php containerClose() ?>

<script>

    document.addEventListener('DOMContentLoaded', function() {        });  

</script>