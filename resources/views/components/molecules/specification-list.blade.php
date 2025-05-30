<?php
$specifications = $attributes->get('specifications', []);
?>

<div class="overflow-hidden border border-ash-200 rounded-lg">
    <table class="min-w-full divide-y divide-ash-200">
        <thead class="bg-clay-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-charcoal-500 uppercase tracking-wider">Specification</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-charcoal-500 uppercase tracking-wider">Value</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-ash-200">
            @foreach($specifications as $label => $value)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-charcoal-700">{{ $label }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-charcoal-600">{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 