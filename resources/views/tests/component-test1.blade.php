<x-tests.app>
  <x-slot name="header">ヘッダー1</x-slot>
コンポーネントテスト１

  <x-tests.card title="タイトル1" content="コンテンツ" :message="$message"></x-tests.card>
  <x-tests.card title="タイトル2" ></x-tests.card>
</x-tests.app>