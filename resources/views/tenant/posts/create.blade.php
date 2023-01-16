@extends('layouts.tenant', ['title' => __('New post')])

@section('content')

<form method="POST" action="{{ route('tenant.posts.store') }}">
    @csrf
    <div>
        <div>
            <div class="grid grid-cols-1 sm:grid-cols-6 gap-6">
                <div class="sm:col-span-3">
                    <x-form.label for="title" value="Title"/>

                    <div class="mt-1 flex rounded-md shadow-sm">
                        <x-form.input id="title" name="title" type="text" value="{{ old('title') }}" />
                    </div>

                    <x-form.input-error for="title" />
                </div>

                <div class="sm:col-span-6">
                    <x-form.label for="body" value="Body"/>
                    <div class="mt-1 rounded-md shadow-sm">
                        <textarea id="body" name="body" rows="5" class="placeholder-gray-500 leading-none text-gray-800 rounded w-full py-2 px-2 border border-gray-600 active:border-[#213969] transition ease-in-out focus:outline-none focus:border-[#023DB0] focus:ring-0 mt-1 block w-full @error('body') border-red-500 @enderror">{{ old('body') }}</textarea>
                    </div>
                    <x-form.input-error for="body" />
                </div>

            </div>
        </div>

    </div>
    <div class="mt-8 border-t border-gray-200 pt-5">
        <div class="flex justify-end">
            <span class="inline-flex rounded-md shadow-sm">
                <x-button as="a" href="{{ route('tenant.posts.index') }}">Cancel</x-button>
            </span>
            <span class="ml-3 inline-flex rounded-md shadow-sm">
                <x-button type="submit">Post</x-button>
            </span>
        </div>
    </div>
</form>

@endsection

