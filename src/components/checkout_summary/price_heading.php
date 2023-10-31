
<?php 
/**
 * Undocumented function
 *
 * @param string $value // 
 * @param string $description
 * @return void
 */
function priceHeading($value, $description){ ?>
    
    <div class="flex flex-col h-20 justify-center border-b-[1px] border-gray-200">
        <div>
            <p class="font-bold w-36 text-[#224881]">
                <?php echo $value; ?>
            </p>
        </div>
        <div>
            <p class="">
                <?php echo $description; ?>
            </p>
        </div>

    </div>

<?php } ?>

<?php 
/**
 * Undocumented function
 *
 * @param string $value 
 * @param string $description
 * @return void
 */
function detailsData($value, $description){ ?>
    <div class="flex flex-col h-20 justify-center border-b-[1px] border-gray-200">
        <div>
            <p class="font-medium w-36 ">
                <?php echo $value; ?>
            </p>
        </div>
        <div>
            <p class="">
                <?php echo $description; ?>
            </p>
        </div>

    </div>
<?php } ?>


