


@if ($isowner == 1)
        @if ($paycheck == 1 )



                @if ($blockedflag == 1)
                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                <div>
                    <h2 class="text-gray-800 text-3xl font-semibold">You Don't Pay Yet, Your Monthly Bills</h2>
                    <!-- <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
                -->
                    <button class='relative bg-blue-500 text-white p-6 rounded text-2xl font-bold overflow-visible'>
                    Pay
                    </button>
                
                </div>
                
                </div>
                @else

                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                <div>
                    <h2 class="text-gray-800 text-3xl font-semibold">You Don't Have People in Your Group Yet</h2>
                    <p class="mt-2 text-gray-600"> You can't pay something else</p>
                    <a href="{{ route('dashboard') }}">
                    <button class='relative bg-blue-500 text-white p-6 rounded text-2xl font-bold overflow-visible'>
                    Go back
                    </button>
                    </a>
                
                </div>
                
                </div>

                @endif


        @else
                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                <div>
                    <h2 class="text-gray-800 text-3xl font-semibold">It's Alright!! Nothing to Pay this Mounth</h2>
                    
                    <br>
                    <br>
                    <a href="{{ route('dashboard') }}">
                    <button class='relative bg-blue-500 text-white p-6 rounded text-2xl font-bold overflow-visible'>
                    Go back
                    </button>
                    </a>        
                </div>
                
                </div>
        @endif
@else
<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-gray-800 text-3xl font-semibold">You're not the owner Team </h2>
            
            <br>
            <br>
            <a href="{{ route('dashboard') }}">
            <button class='relative bg-blue-500 text-white p-6 rounded text-2xl font-bold overflow-visible'>
            Go back
            </button>
            </a>        
        </div>
        
        </div>
@endif