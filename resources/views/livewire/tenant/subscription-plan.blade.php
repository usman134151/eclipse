<div class="mt-8">
   
    <h3 class="text-lg font-medium text-gray-900">Change subscription plan</h3>
    <div class="mt-2 shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            @foreach(config('saas.plans') as $code => $name)
            <div class="
            @if(! $loop->first)
            mt-4
            @endif
            flex items-center">
            <input wire:model="plan" id="opt_{{ $code }}" name="subscription-plan" value="{{ $code }}" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
            <label for="opt_{{ $code }}" class="ml-3">
                <span class="block text-sm leading-5 font-medium text-gray-700">{{ $name }}
                </span>
            </label>
        </div>
        @endforeach
        
        @error('plan')
        <p class="text-sm mt-4 text-red-500">
            {{ $message }}
        </p>
        @enderror
        
        @if($success)
        <p class="text-sm mt-4 text-green-500">
            {{ $success }}
        </p>
        @endif
        
        @if($error)
        <p class="text-sm mt-4 text-red-500">
            {{ $error }}
        </p>
        @endif
    </div>
    <div class="px-4 sm:px-6 py-2 bg-gray-50 flex justify-end">
        @if(tenant()->on_active_subscription)
        <button id="cancelSub" name="cancelSub" type="button" wire:click="cancel" class="mr-2 items-center py-1 px-4 border border-gray-300 text-sm font-medium rounded-md text-red-700 bg-white hover:text-red-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
            Cancel subscription
        </button>
        @elseif(tenant()->subscribed('default') && tenant()->subscription('default')->cancelled())
        <button id="resumeSub" name="resumeSub" type="button" wire:click="resume" class="mr-2 items-center py-1 px-4 border border-gray-300 text-sm font-medium rounded-md text-green-700 bg-white hover:text-green-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
            Resume subscription ({{ tenant()->plan_name }})
        </button>
        @endif
        <button type="button" wire:click="update" class="py-1 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
            Change plan
        </button>
    </div>
</div>
</div>