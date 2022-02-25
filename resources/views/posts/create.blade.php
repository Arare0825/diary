<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            日記を追加しましょう！<br>
        </h2>
    </x-slot>


          <form action="{{ route('posts.store') }}" method="POST">
            @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
          <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">日付</label>
                <input type="date" name="date" value="{{old('date')}}" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">今日の良かったこと</label>
                <input type="text" name="good" value="{{old('good')}}" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>



              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">今日の嫌だったこと</label>
                <input type="text" name="bad" value="{{old('bad')}}" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">明日の目標</label>
                <input type="text" name="goal" value="{{ old('goal') }}" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <input type="hidden" name="user_id" value="{{ $user}}">
              <div class="px-8 py-12 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-400 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          </div>
</div>

</div>
</form>
              </x-app-layout>
