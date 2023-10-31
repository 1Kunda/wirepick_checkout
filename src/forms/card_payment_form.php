<form 
    class="w-full mb-10"
    name="payment_form" 
    onsubmit="event.preventDefault(); submitForm();"
>
    <!-- Billing information form -->
    <div class="flex flex-col gap-y-2 mb-10">
        <p class="font-medium text-base">Billing Information</p>
        <div class="flex w-full gap-x-7">
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">First Name</span>
                </label>
                <input
                    name="first_name" 
                    type="text" 
                    placeholder="first name example Grace" 
                    class="input input-bordered w-full" 
                />
            </div>

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">Last Name</span>
                </label>
                <input
                    name="last_name" 
                    type="text" 
                    placeholder="first name example Doe" 
                    class="input input-bordered w-full" 
                />
            </div>
        </div>

        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Address Line</span>
            </label>
            <input
                name="address_line" 
                type="text" 
                placeholder="enter your address" 
                class="input input-bordered w-full" 
            />
        </div>

        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Email</span>
            </label>
            <input
                name="email" 
                type="email" 
                placeholder="enter your email" 
                class="input input-bordered w-full" 
            />
        </div>

        <div class="form-control w-full ">
            <label class="label">
                <span class="label-text">Phone Number</span>
            </label>
            <input
                name="phone_number" 
                type="text" 
                placeholder="enter your phone number" 
                class="input input-bordered w-full" 
            />
        </div>
    </div>

     <!-- Card Details Form -->
    <div class="flex flex-col gap-y-2 mb-5">
        <p class="font-medium text-base">Payment Information</p>

        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Name On Card</span>
            </label>
            <input
                name="name_on_card" 
                type="text" 
                placeholder="" 
                class="input input-bordered w-full" 
            />
        </div>

        <div class="form-control w-full">
            <label class="label">
                <span class="label-text">Card Number</span>
            </label>
            <input
                name="card_number" 
                type="text" 
                placeholder="" 
                class="input input-bordered w-full" 
            />
        </div>

        <div class="flex w-full gap-x-7">
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">Expiry Date</span>
                </label>
                <input
                    name="expiry_date" 
                    type="date" 
                    placeholder="" 
                    class="input input-bordered w-full" 
                />
            </div>

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text">CVV</span>
                </label>
                <input
                    name="cvv" 
                    type="text" 
                    placeholder="" 
                    class="input input-bordered w-full" 
                />
            </div>
        </div>

    </div>

    <div class="flex">
        <div class="grow"></div>
        <div>
            <button 
                class="btn bg-[#2f64a1] text-white w-36"
                type="submit"
            >
                <span id="spinner" class="loading loading-spinner hidden"></span>
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
        element.classList.add("block");
    } 
    
    else if(element.classList.contains("block")) {
        element.classList.remove("block");
        element.classList.add("hidden");
    }
}

async function submitForm() {
    swapper()
    await stall()
    swapper()
}
     

</script>