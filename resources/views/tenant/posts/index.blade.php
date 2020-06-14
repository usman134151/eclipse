@extends('layouts.tenant')

@section('content')

<div class="relative pt-12 pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
  <div class="relative max-w-7xl mx-auto">
    <div class="text-center">
      <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
        From the blog
      </h2>
      <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
      </p>
      <span class="mt-5 inline-flex rounded-md shadow-sm">
        <a href="{{ route('tenant.posts.create') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
            New post
        </a>
        </span>
    </div>
    <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
      @foreach($posts as $post)
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
              <a href="{{ route('tenant.posts.show', $post) }}" class="block">
              <h3 class="text-xl leading-7 font-semibold text-gray-900">
                {{ $post->title }} 
              </h3>
              <p class="mt-3 text-base leading-6 text-gray-500">
                {{ $post->body }}
              </p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <img class="h-10 w-10 rounded-full" src="{{ $post->author->gravatar_url }}" alt="{{ $post->author->name }}" />
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm leading-5 font-medium text-gray-900">
                <a href="#" class="">
                  {{ $post->author->name }}
                </a>
              </p>
              <div class="flex text-sm leading-5 text-gray-500">
                <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                  {{ $post->created_at->format('M d, Y') }}
                </time>
                <span class="mx-1">
                  &middot;
                </span>
                <span>
                  {{ count(explode(' ', $post->body)) }} words
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection