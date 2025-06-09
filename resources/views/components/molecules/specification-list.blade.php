@props(['specifications' => []])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="min-w-full">
        <thead>
            <tr class="bg-palm-600 text-clay-50">
                <th class="py-3 px-4 text-left font-nohemi font-bold">Specification</th>
                <th class="py-3 px-4 text-left font-nohemi font-bold">Value</th>
                <th class="py-3 px-4 text-left font-nohemi font-bold">Notes</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-clay-100">
            @foreach($specifications as $spec)
                <tr class="hover:bg-clay-50">
                    <td class="py-3 px-4 font-poppins font-medium text-charcoal-700">{{ $spec['label'] }}</td>
                    <td class="py-3 px-4 font-poppins text-charcoal-600">
                        @if(is_array($spec['value']))
                            {{ implode(', ', $spec['value']) }}
                        @else
                            {{ $spec['value'] }}
                        @endif
                    </td>
                    <td class="py-3 px-4 font-poppins text-small text-ash-600">{{ $spec['notes'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 