<?php 
    include_once "invoice_text_view.php"
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
        },
        {
            "description":"Price ",
            "value":"ZMW 1"
        },
        {
            "description":"Charges ",
            "value":"ZMW 0.02"
        },
        {
            "description":"Order Total ",
            "value":"ZMW 1.02"
        }
    ]';
    
    // Convert JSON data to PHP array
    $data = json_decode($jsonData, true);
    
    
    
?>

<div class="w-full flex flex-col items-center mb-20">

    <div class="alert alert-info w-full max-w-2xl mb-5 mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>Download a copy of your receipt for your records.</span>
    </div>

    <div id="content" class="w-full max-w-2xl h-full flex flex-col items-center gap-y-5 mb-16 border border-[#2F65A1] overflow-hidden rounded-md pb-5">

        <div class="w-full py-5  bg-[#2F65A1] ">
            <p class="font-normal text-xl w-full text-center uppercase text-white">receipt</p>
        </div>

        <div class="w-full">
            <div class="flex flex-col w-full justify-center items-center gap-x-1 h-20">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="stroke-current shrink-0 h-6 w-6 text-green-900" 
                        fill="none" 
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <span class="uppercase font-bold text-green-900">status:success</span>
            </div>

        </div>

        <div class="w-full px-7">
            <?php 
                invoiceTitleText("Wankunda Simuchimba");
                invoiceTitleText("260978130250");
                invoiceTitleText("wankundasimuchimba@yahoo.com");
            ?>
        </div>

        <div class="w-full px-7">

            <?php 
                // Accessing values from the PHP array
                foreach ($data as $item) {
                    invoiceDataText($item['description'], $item['value']);
                }
            ?>
            
        </div>

        <div class="mb-5" id="qrcode"></div>

        <div>
            <img src=<?php echo BASE_URL."/public/assets/wirepick_logo.png"; ?> width="200px"/>
        </div>

    </div>

    <div class="mb-3">
        <button
        onclick="generatePDF()" 
        class="btn btn-outline uppercase">
            download receipt
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>

        </button>
    </div>
    <div>
        <a href=<?php echo BASE_URL."/"; ?>>
            <button 
                class="btn bg-[#2f64a1] text-white uppercase w-36"
                type="submit"
            >
                finish
            </button>
        </a>
    </div>

    <!-- put buttons -->
</div>


<script src="../src/scripts/qrcode.min.js"></script>
<script src="../node_modules/html2canvas/dist/html2canvas.min.js"></script>
<script src="../node_modules/jspdf/dist/jspdf.umd.min.js"></script>

<script type="text/javascript">
    
    window.onload = function() {
        window.jsPDF = window.jspdf.jsPDF;
    }

    
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "http://jindo.dev.naver.com/collie",
        width: 194,
        height: 194,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });

    async function generatePDF() {
        const element =document.getElementById("content")
        // Wait for the component to render and capture it as an image
        const canvas = await html2canvas(element);

        // Calculate PDF dimensions based on the captured canvas
        const imgData = canvas.toDataURL('image/png');
        const imgProps = canvas;

        var pdfWidth;
        var pdfHeight;  
        pdfWidth = imgProps.width * 0.25;
        pdfHeight = imgProps.height * 0.25;

        // Create PDF using jsPDF library
        const pdf = new jsPDF({
            orientation: 'p',
            unit: 'mm',
            format: [pdfWidth, pdfHeight],
        });

        // Add captured image to the PDF
        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight, '', 'FAST');

        // Save the PDF
        pdf.save('receipt.pdf');
    }
</script>
