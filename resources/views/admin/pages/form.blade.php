@props(['page' => null])

<form action="{{ $page ? route('admin.pages.update', $page) : route('admin.pages.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="space-y-6">
    @csrf
    @if($page)
        @method('PUT')
    @endif

    <div>
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title"
                     name="title"
                     type="text"
                     class="mt-1 block w-full"
                     :value="old('title', $page?->title)"
                     required
                     autofocus />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="template" :value="__('Template')" />
        <select id="template"
                name="template"
                class="mt-1 block w-full border-gray-300 focus:border-ember focus:ring-ember rounded-sm shadow-sm">
            @foreach(['default' => 'Default', 'about' => 'About', 'contact' => 'Contact', 'product' => 'Product'] as $value => $label)
                <option value="{{ $value }}"
                        {{ old('template', $page?->template) === $value ? 'selected' : '' }}>
                    {{ $label }}
                </option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('template')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="content" :value="__('Content')" />
        <textarea id="content"
                  name="content"
                  class="mt-1 block w-full border-gray-300 focus:border-ember focus:ring-ember rounded-sm shadow-sm"
                  rows="10"
                  required>{{ old('content', $page?->content) }}</textarea>
        <x-input-error :messages="$errors->get('content')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="featured_image" :value="__('Featured Image')" />
        <input type="file"
               id="featured_image"
               name="featured_image"
               accept="image/*"
               class="mt-1 block w-full text-sm text-gray-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-sm file:border-0
                      file:text-sm file:font-semibold
                      file:bg-charcoal file:text-white
                      hover:file:bg-charcoal/90" />
        <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
        @if($page && $page->featured_image)
            <div class="mt-2">
                <img src="{{ Storage::url($page->featured_image) }}"
                     alt="{{ $page->title }}"
                     class="h-32 w-32 object-cover rounded">
            </div>
        @endif
    </div>

    <div>
        <x-input-label for="meta_data" :value="__('Meta Data (JSON)')" />
        <textarea id="meta_data"
                  name="meta_data"
                  class="mt-1 block w-full border-gray-300 focus:border-ember focus:ring-ember rounded-sm shadow-sm"
                  rows="4"
                  placeholder="{&quot;description&quot;: &quot;Page description&quot;, &quot;keywords&quot;: &quot;key, words&quot;}">{{ old('meta_data', $page?->meta_data ? json_encode($page->meta_data, JSON_PRETTY_PRINT) : '') }}</textarea>
        <x-input-error :messages="$errors->get('meta_data')" class="mt-2" />
    </div>

    <div class="flex space-x-6">
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox"
                       name="is_published"
                       class="rounded border-gray-300 text-ember shadow-sm focus:border-ember focus:ring focus:ring-ember focus:ring-opacity-50"
                       value="1"
                       {{ old('is_published', $page?->is_published) ? 'checked' : '' }}>
                <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
            </label>
        </div>

        @if($page?->is_published)
            <div>
                <x-input-label for="published_at" :value="__('Published At')" />
                <x-text-input id="published_at"
                             name="published_at"
                             type="datetime-local"
                             class="mt-1 block"
                             :value="old('published_at', $page?->published_at?->format('Y-m-d\TH:i'))" />
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ $page ? __('Update Page') : __('Create Page') }}</x-primary-button>
        <a href="{{ route('admin.pages.index') }}" class="text-gray-600 hover:text-gray-900">{{ __('Cancel') }}</a>
    </div>
</form> 