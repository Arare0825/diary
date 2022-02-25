<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            使い方
        </h2>
    </x-slot>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">効果と使い方</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">たったの３行で穏やかに</p>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">寝る前にたった３行の日記を書いてあなたの自律神経を整えましょう</p>
    </div>

    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/globe-alt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">一番よかった事</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">今日の一番よかった事を書き出してみましょう。どんなに些細なことでも構いません。あなたがその日に感じた一番よかったことを自由に書きましょう。</dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/scale -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">一番悪かった事</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">今日一番悪かった事、嫌だったこと、失敗したことなどを書き出してみましょう。書くことによりストレスを吐き出してください。</dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">明日の目標</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">明日の目標を書いてみましょう。どんなに小さなことでもいいです。その目標を達成して少しずつなりたい自分に近づいていきましょう！</dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/annotation -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">簡潔に、そして寝る前に記入しましょう。</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">１日の振り返りをなるべく簡潔に考えて書きましょう。そして寝る前、1日の最後に記入することにより明日の目標を意識でき、ポジティブな気持ちで就寝できるでしょう。</dd>
        </div>
      </dl>
    </div>
  </div>
</div></x-app-layout>
