
<?php
    /**
     * Display Mobile Money Pyament Information.
     *
     * @param string $name The name of mobile money payment.
     * @param string $link The url to the mobile money payment form.
     * @param string $imgsrc The path to the image.
     * @param string $alt The image alternative text.
     * 
    */
?>
<?php function paymentTypeCard($name, $link, $imgsrc, $alt) { ?>
    <a href="<?php echo $link; ?>">
        <div class="flex items-center h-28 hover:cursor-pointer hover:bg-gray-100 border-b-[1px] border-gray-200 px-3 rounded ">
            <div class=" w-[120px]">
                <img
                    src="<?php echo $imgsrc; ?>"
                    width="60px"
                    alt="<?php echo $alt; ?>"
                />
            </div>
            <div class="w-full">
                <p class="font-medium text-lg"><?php echo $name; ?></p>
                <p class="lowercase">instant <?php echo $name; ?>.</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </a>
<?php } ?>


<?php
    /**
     * Display Visa Card, Master Card and American Express Images. 
    */
?>
<?php function paymentTypeCard2($base_url) { ?>
    <a href="<?php echo $base_url; ?>/pages/card-payment.php" class="w-full h-full">
        <div class="flex items-center min-h-[112px]  hover:cursor-pointer hover:bg-gray-100 border-b-[1px] border-gray-200 px-3 rounded">
            <div class="w-[120px]">
                <img
                    id="image"
                    src="<?php echo $base_url; ?>/public/assets/Mastercard-logo.png"
                    width="60px"
                    alt="card payment logos"
                />
                
            </div>
            <div class="w-full">
                <p class="font-medium text-lg break-words">Debit and Credit Cards</p>
                <p class="break-words">visa card, mastercard and american express payment</p>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </a>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            var imgElement = document.getElementById('image');

            let count = 1;

            const intervalId = setInterval(() => {

                if (count === 1) {
                    imgElement.src="<?php echo $base_url; ?>/public/assets/Mastercard-logo.png"
                    count++;
                }
                else if (count === 2) {
                    imgElement.src="<?php echo $base_url; ?>/public/assets/american_express.png"
                    count++;
                }
                else if (count === 3) {
                    imgElement.src="<?php echo $base_url; ?>/public/assets/visa-card-logo.png"
                    count = 1
                }
                
                
            }, 1000);
        });
    </script>
<?php } ?>