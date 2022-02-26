<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$user->name}} さん、こんにちは<br>
            今日の日記を追加しましょう！
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                  <div class="text-right">
                <a href="{{ route('posts.create')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">今日の日記を作成</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-400 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-300">
            <tr>
              <th scope="col-4" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">日付</th>
              <th scope="col-4" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">明日の目標</th>
              <th scope="col-4" class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">詳細</th>
                <!-- <span class="sr-only">Edit</span> -->
              </th>
            </tr>
          </thead>
          @foreach($posts as $post)
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">{{$post->date}}</div>
                  </div>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-sm font-medium text-gray-900"> {{$post->goal}} </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="{{route('posts.show',$post['id'])}}" class="text-indigo-600 hover:text-indigo-900">詳細</a>
              </td>
            </tr>
            @endforeach
            {{ $posts->links() }}

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>

