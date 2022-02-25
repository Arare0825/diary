<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{$user->name}}さん<br>
            昨日の日記を確認してみましょう！
        </h2>
    </x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Applicant Information</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="ml-12 text-sm font-medium text-gray-500">記入日</dt>
        <dd class="ml-12 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$posts['date']}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="ml-12 text-sm font-medium text-gray-500">一番よかった事</dt>
        <dd class="ml-12 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$posts['good']}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="ml-12 text-sm font-medium text-gray-500">一番悪かった事</dt>
        <dd class="ml-12 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$posts['bad']}}</dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="ml-12 text-sm font-medium text-gray-500">明日の目標</dt>
        <dd class="ml-12 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$posts['goal']}}</dd>
      </div>
          </ul>
        </dd>
      </div>
    </dl>
    <div class="px-8 py-12 text-right sm:px-6">
           <button type="button" class="mr-6 inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-400 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onClick="history.back()">戻る</button> 
            <a href="{{route('posts.edit',['post'=>$posts['id']]) }}" type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-400 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">編集する</a>
          </div>
          <input type="hidden" name="user_id" value="{{ $posts['user_id']}}">
<form method="post" id="delete_{{$posts['id']}}" action="{{ route('posts.destroy',['post'=>$posts['id']]) }}">
  @csrf
  @method('delete')
<div class="flex justify-center px-8 py-12 sm:px-6">
<a href="#" data-id="{{ $posts['id']}}" button onclick="deletePost(this)"  class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">削除</a>
</div>
</form>
</div>
</div>

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

