<div x-data="{ cancelModalOpen: false }" class="mt-8">
    <div x-show="cancelModalOpen" class="hidden fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center z-50">
        <div x-show="cancelModalOpen" x-description="Background overlay, show/hide based on modal state." x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <div x-show="cancelModalOpen" x-description="Modal panel, show/hide based on modal state." x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button @click="cancelModalOpen = false" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150" aria-label="Close">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="sm:flex sm:items-start">
                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        Cancel subscription
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm leading-5 text-gray-500">
                            Are you sure you want to cancel your subscription? After your paid-for period expires, you won't be able to use the application anymore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                    <button @click="@this.call('cancel'); cancelModalOpen = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel subscription
                    </button>
                </span>
                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                    <button @click="cancelModalOpen = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel
                    </button>
                </span>
            </div>
        </div>
    </div>
    
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
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        @if(tenant()->on_active_subscription)
        <button id="cancelSub" name="cancelSub" type="button" @click="cancelModalOpen = true;" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-red-700 bg-white hover:text-red-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
            Cancel subscription
        </button>
        @elseif(tenant()->subscribed('default') && tenant()->subscription('default')->cancelled())
        <button id="resumeSub" name="resumeSub" type="button" wire:click="resume" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-green-700 bg-white hover:text-green-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
            Resume subscription ({{ tenant()->plan_name }})
        </button>
        @endif
        <button type="button" wire:click="update" class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
            Change plan
        </button>
    </div>
</div>
</div>