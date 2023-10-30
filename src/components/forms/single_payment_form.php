<form 
    class="w-full"
    name="payment_form" 
    onsubmit="event.preventDefault(); submitForm();"
>
    
    <div class="form-control w-full mb-5">
        <label class="label">
            <span class="label-text">Phone Number</span>
        </label>
        <input
            name="phone_number" 
            type="text" 
            placeholder="enter your phone number" 
            class="input input-bordered w-full" 
            autocomplete="off"
        />
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

<script>
    var element =  document.getElementById("spinner");

    async function stall(stallTime = 7000) {
        await new Promise(resolve => setTimeout(resolve, stallTime));
    }

    function swapper(){
        if (element.classList.contains("hidden")) {
            element.classList.remove("hidden");
            element.classList.add("bloc");
            console.log("it does hidden")
        } 
        
        else if(element.classList.contains("bloc")) {
            element.classList.remove("bloc");
            element.classList.add("hidden");
            console.log("it does bloc")
        }
    }

    async function submitForm() {
        var x = document.forms["payment_form"]["phone_number"].value;

        if (x == "") {
            alert("phone number must be filled out");
            return false;
        }

        else{
            console.log("hello")

            swapper()
            await stall()
            swapper()

            return false
        }
    }
    

</script>