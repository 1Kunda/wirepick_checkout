<?php  
    include_once 'price_heading.php';
?>

<?php 
    $jsonData = '[
        {
            "description":"Code",
            "value":"TF589"
        },
        {
            "description":"Name",
            "value":"Test Ticket"
        },
        {
            "description":"Description",
            "value":"Test Ticket Purchase"
        },
        {
            "description":"Reference",
            "value":"653d0a0068ca7"
        },
        {
            "description":"Names",
            "value":"Wankunda Simuchimba"
        },
        {
            "description":"Email",
            "value":"wankundasimuchimba@yahoo.com"
        },
        {
            "description":"Phone ",
            "value":"260978130250"
        },
        {
            "description":"Address ",
            "value":"11A Mwaleshi Road, Olympia Park, Lusaka, Zambia"
        }
    ]';
    
    // Convert JSON data to PHP array
    $data = json_decode($jsonData, true);
    
?>

<div class="w-full md:max-w-sm px-2 static md:sticky md:top-5">
    <div class="w-full bg-gray-100 rounded-md px-3 pt-3 pb-5 ">

        <p class="font-semibold text-center">Checkout Summary</p>

        <div class="w-full h-full max-h-[400px] overflow-y-auto grow mb-5">

            <?php priceHeading('Price', "ZMW 2"); ?>
            <?php priceHeading('Charges', "ZMW 0.02"); ?>
            <?php priceHeading('Order Total', "ZMW 1.02"); ?>
            <?php
                // Accessing values from the PHP array
                foreach ($data as $item) {
                    detailsData($item['description'], $item['value']);
                } 
            ?>

        </div>

        <a href="/pages/payment-types.php">
            <button 
            class="btn w-full bg-[#2f64a1] text-white block md:hidden">
                continue
            </button>
        </a>

    </div>
    
</div>