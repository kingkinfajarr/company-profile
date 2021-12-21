<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Data Blog') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
              <div class="p-5">
                  <a href="{{ route('blog.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Blog</a>
                  <table class="table-auto w-full mt-5">
                      <tr>
                          <th class="border px-4 py-2" width="15%">Image Blog</th>
                          <th class="border px-4 py-2" width="10%">Author</th>
                          <th class="border px-4 py-2" width="10%">Date</th>
                          <th class="border px-4 py-2" width="10%">Title</th>
                          <th class="border px-4 py-2" width="10%">Slug</th>
                          <th class="border px-4 py-2" width="30%">Content</th>
                          <th class="border px-4 py-2" width="15%">Aksi</th>
                        </tr>
                        @forelse ($blog as $item)
                          <tr>
                            <td class="border px-4 py-2">
                              <img src="{{ asset('storage/' . $item->image_blog) }}" alt="Image Blog" class="w-36">
                            </td>
                              <td class="border px-4 py-2">
                                {{ $item->author }}
                              </td>
                              <td class="border px-4 py-2">
                                {{ $item->date }}
                              </td>
                              <td class="border px-4 py-2">
                                {{ $item->title }}
                              </td>
                              <td class="border px-4 py-2">
                                {{ $item->slug }}
                              </td>
                              <td class="border px-4 py-2">
                                {{ $item->content }}
                              </td>
                              <td class="border px-4 py-2 justify-between">
                                  <a href="{{ route('blog.edit', $item->id) }}" class="py-1 px-4 rounded-md bg-yellow-400">Edit</a>
                                  <form action="{{ route('blog.destroy', $item->id) }}" method="POST" class="inline-block">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="py-1 px-2 rounded-md bg-red-500">Hapus</button>
                                  </form>
                              </td>
                          </tr>
                        @empty
                          <tr >
                              <td class="border px-4 py-2 text-center" colspan="7">Tidak ada data</td>
                          </tr>
                        @endforelse
                  </table>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
