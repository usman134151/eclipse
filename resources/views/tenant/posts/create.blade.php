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
                <?php /*
                <div class="sm:col-span-3">
                    <x-form.label for="title" value="Title"/>

                    <div class="mt-1 flex rounded-md shadow-sm">
                        <x-form.select>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </x-form.select>
                    </div>

                    <x-form.input-error for="title" />
                </div>
                */ ?>

                <div class="sm:col-span-6">
                    <x-form.label for="body" value="Body"/>
                    <div class="mt-1 rounded-md shadow-sm">
                        <x-form-textarea id="body" name="body" rows="5">{{ old('body') }}</x-form-textarea>
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

