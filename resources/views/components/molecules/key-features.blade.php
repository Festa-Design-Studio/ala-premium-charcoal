@props([
    'title' => 'Key Features',
    'features' => [],
    'titleClass' => 'font-poppins font-medium text-small text-charcoal-700 mb-2'
])

<div class="mb-8 mt-10">
    <h3 class="{{ $titleClass }}">
        {{ $title }}
    </h3>
    <ul class="space-y-2">
        @foreach($features as $feature)
            <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-palm-500 mt-0.5 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <span class="font-poppins text-body text-charcoal-600">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>
</div> 