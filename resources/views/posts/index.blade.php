<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form method="get" action="{{ route('posts.create') }}">
                  <button type="submit" name="button">オッケー</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <form method="get" action="{{route('posts.show', auth()->user()->id) }}">
      <button type="submit">簿ターン</button> -->
    <!-- </form> -->
    @foreach($posts as $post)
    {{$post['good']}}
    <br>
    @endforeach
</x-app-layout>

