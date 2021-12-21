<x-app-layout>
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
  </head>

  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Blog') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="w-full">
                  <p>Image Blog</p>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="image_blog">

                  <p>Author</p>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="author" value="{{ $blog->author }}">

                  <p>Date</p>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="date" value="{{ $blog->date }}">

                  <p>Title</p>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="title" value="{{ $blog->title }}">

                  <p>Slug</p>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="slug" value="{{ $blog->slug }}">

                  <p>Content</p>
                  <input id="content" type="hidden" name="content">
                  <trix-editor input="content" class="mb-3 h-56">{{ $blog->content }}</trix-editor>


                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                  Update
                </button>
              </div>
            </form>
          </div>
      </div>
  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>
</x-app-layout>
