<div class="mt-8">
    <h3 class="text-lg font-medium text-gray-900">Add a custom domain</h3>
    <div class="mt-2">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div>
                    <label for="domain" class="block text-sm font-medium leading-5 text-gray-700">Domain
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="domain" autocomplete="off" wire:model="domain" value="" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="www.mydomain.com" />
                    </div>
                </div>
                
                @error('domain')
                <p class="text-red-500 text-xs mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="button" wire:click="save" class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>