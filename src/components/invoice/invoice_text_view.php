<?php 
    /**
     * Displays styled text
     *
     * @param string $value
     * @return void
     */
?>
<?php function invoiceTitleText($value){ ?>
    
    <div class="flex flex-col h-10 justify-center">
        <div>
            <p class="font-medium ">
                <?php echo $value; ?>
            </p>
        </div>

    </div>

<?php } ?>

<?php 

/**
 * Displays data in row and column formarts
 *
 * @param string $value
 * @param string $description
 * @return void
 */
function invoiceDataText($value, $description){ ?>
    
    <div class="flex flex-col justify-center h-20 md:flex-row md:items-center md:h-16 border-b-[1px] border-gray-200">
        <div class="md:flex md:grow">
            <p class="font-medium">
                <?php echo $value; ?>
            </p>
        </div>
        <div>
            <p class="break-words">
                <?php echo $description; ?>
            </p>
        </div>

    </div>
<?php } ?>


