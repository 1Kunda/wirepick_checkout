<form 
    class="w-full"
    name="payment_form" 
    onsubmit="event.preventDefault(); submitForm();"
>
    
    <div class="form-control w-full mb-5">
        <label class="label">
            <span class="label-text">Phone Number</span>
        </label>
        <div class="flex items-center">
            <span class="absolute ml-2 flex justify-center w-10">
                <p>+260</p>
            </span>
            <input
                name="phone_number" 
                type="text" 
                placeholder="enter your phone number" 
                class="input input-bordered w-full pl-14" 
                autocomplete="off"
            />
        </div>
    </div>


    <div class="flex">
        <div class="grow"></div>
        <div>
            <button 
                class="btn bg-[#2f64a1] text-white w-36"
                type="submit"
            >
                <span id="spinner" class="loading loading-spinner bloc hidden"></span>
                pay
            </button>
        </div>
    </div>

</form >

<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Alert</h3>
        <p class="py-2">Please approve transaction on your mobile device.</p>
        <div class="modal-action">
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</dialog>


    
    


<script>
    var element =  document.getElementById("spinner");

    async function stall(stallTime = 3000) {
        await new Promise(resolve => setTimeout(resolve, stallTime));
    }

    function swapper(){
        if (element.classList.contains("hidden")) {
            element.classList.remove("hidden");
            element.classList.add("bloc");
        } 
        
        else if(element.classList.contains("bloc")) {
            element.classList.remove("bloc");
            element.classList.add("hidden");
        }
    }

    async function submitForm() {
        var x = document.forms["payment_form"]["phone_number"].value;

        if (x == "") {
            alert("phone number must be filled out");
            return false;
        }

        else{

            swapper()
            await stall()
            swapper()
            my_modal_1.showModal()

            return false
        }
    }
    

</script>