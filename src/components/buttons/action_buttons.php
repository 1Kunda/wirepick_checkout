<?php 
/**
 * Undocumented function
 *
 * @param string $url 
 * @return void
 */
function backButton($url){ ?>
    <div class="flex items-center mb-8 gap-x-2">
        <div class="">
            <a href="<?php echo $url; ?>">
                <button class="btn btn-sm btn-circle btn-outline ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>
                </button>
            </a>
        </div>
        <div class="font-medium">
            back
        </div>
    </div>
<?php } ?>