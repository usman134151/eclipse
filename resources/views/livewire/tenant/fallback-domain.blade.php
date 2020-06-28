<div class="mt-8">
    <h3 class="text-lg font-medium text-gray-900">Change fallback subdomain</h3>
    <div class="shadow overflow-hidden sm:rounded-md mt-2">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div>
                <label for="fallback_domain" class="block text-sm font-medium leading-5 text-gray-700">Domain
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input id="fallback_domain" wire:model="domain" class="form-input flex-1 block w-full rounded-none rounded-l-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    <span class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                        {{ config('tenancy.central_domains')[0] }}
                    </span>
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