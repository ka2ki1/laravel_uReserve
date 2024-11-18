<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            過去のイベント一覧
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font" _msthidden="24">
  <div class="container px-5 py-4 mx-auto" _msthidden="24">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    <div class="w-full mx-auto overflow-auto" _msthidden="20">
      <table class="table-auto w-full text-left whitespace-no-wrap" _msthidden="20">
        <thead _msthidden="4">
          <tr _msthidden="4">
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl" _msttexthash="44161" _msthidden="1" _msthash="64">イベント名</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msttexthash="58448" _msthidden="1" _msthash="65">開始日時</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msttexthash="94432" _msthidden="1" _msthash="66">終了日時</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msttexthash="58734" _msthidden="1" _msthash="67">予約人数</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msttexthash="58734" _msthidden="1" _msthash="67">定員</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msttexthash="58734" _msthidden="1" _msthash="67">表示・非表示</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody _msthidden="16">
            @foreach ($events as $event)
          <tr _msthidden="4">
            <td class="text-blue-500 px-4 py-3" _msttexthash="62374" _msthidden="1" _msthash="68"><a href="{{ route('events.show', ['event' => $event->id]) }}">{{ $event->name }}</a></td>
            <td class="px-4 py-3" _msttexthash="62374" _msthidden="1" _msthash="68">{{ $event->start_date }}</td>
            <td class="px-4 py-3" _msttexthash="62374" _msthidden="1" _msthash="68">{{ $event->end_date }}</td>
            <td class="px-4 py-3" _msttexthash="62374" _msthidden="1" _msthash="68">
                @if(is_null($event->number_of_people))
                    0
                @else
                    {{$event->number_of_people}}
                @endif</td>
            <td class="px-4 py-3" _msttexthash="62374" _msthidden="1" _msthash="68">{{ $event->max_people}}</td>
            <td class="px-4 py-3" _msttexthash="62374" _msthidden="1" _msthash="68">{{ $event->is_visible }}</td>
          </tr>
          @endforeach


        </tbody>
      </table>
      {{ $events->links() }}
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto" _msthidden="2">


    </div>
  </div>
</section>
            </div>
        </div>
    </div>
</x-app-layout>
