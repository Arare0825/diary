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
                  <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                  <input type="text" name="good">
                  <input type="text" name="bad">
                  <input type="text" name="goal">
                  <button type="submit" name="button">オッケー</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <form method="get" action="{{route('posts.show', auth()->user()->id) }}">
      <button type="submit">簿ターン</button>
    </form>


</x-app-layout>

  <div>
    <label>
      ニックネーム
      <input type="text" name="nickname">
    </label>
  </div>
  <div>
    <label>
      生年月日
      <input type="date" name="dob">
    </label>
  </div>
  <button type="submit">送信</button>
</form>
