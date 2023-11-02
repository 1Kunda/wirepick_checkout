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
            <div class="flex items-center">
                <span class="absolute ml-2 flex justify-center w-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </span>
                <input
                    name="email" 
                    type="email" 
                    placeholder="enter your email" 
                    class="input input-bordered w-full pl-14" 
                    autocomplete="off"
                />
            </div>
            
        </div>

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
            <div class="flex items-center">
                <span class="absolute ml-2 flex justify-center w-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                    </svg>
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