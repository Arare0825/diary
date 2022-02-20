<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             さん、こんにちは<br>
            今日の日記を追加しましょう！
        </h2>
    </x-slot>

    <form action="{{route('posts.update',['post'=>$posts['id']]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">今日の良かったこと</label>
                <input type="text" name="good" value="{{$posts['good']}}" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>



              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">今日の嫌だったこと</label>
                <input type="text" name="bad" value="{{$posts['bad']}}" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">明日の目標</label>
                <input type="text" name="goal" value="{{$posts['goal']}}" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="px-8 py-12 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">保存</button>
          </div>

<input type="hidden" name="user_id" value="{{ $posts['user_id']}}">
</form>
<form method="post" id="delete_{{$posts['id']}}" action="{{ route('posts.destroy',['post'=>$posts['id']]) }}">
  @csrf
  @method('delete')
<div class="flex justify-center px-8 py-12 sm:px-6">
<a href="#" data-id="{{ $posts['id']}}" button onclick="deletePost(this)"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">削除</a>
</div>
</form>
</div>
</div>
<script>
function deletePost(e){
  'use strict';
  if(confirm('本当に削除してもいいですか？')){
    document.getElementById('delete_' + e.dataset.id).submit();
  }
}
  </script>

</x-app-layout>
