@props(['product' => null])

<form action="{{ $product ? route('admin.products.update', $product) : route('admin.products.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="space-y-6">
    @csrf
    @if($product)
        @method('PUT')
    @endif

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name"
                     name="name"
                     type="text"
                     class="mt-1 block w-full"
                     :value="old('name', $product?->name)"
                     required
                     autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea id="description"
                  name="description"
                  class="mt-1 block w-full border-gray-300 focus:border-ember focus:ring-ember rounded-sm shadow-sm"
                  rows="4"
                  required>{{ old('description', $product?->description) }}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="specifications" :value="__('Specifications')" />
        <textarea id="specifications"
                  name="specifications"
                  class="mt-1 block w-full border-gray-300 focus:border-ember focus:ring-ember rounded-sm shadow-sm"
                  rows="4">{{ old('specifications', $product?->specifications) }}</textarea>
        <x-input-error :messages="$errors->get('specifications')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="image" :value="__('Product Image')" />
        <input type="file"
               id="image"
               name="image"
               accept="image/*"
               class="mt-1 block w-full text-sm text-gray-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-sm file:border-0
                      file:text-sm file:font-semibold
                      file:bg-charcoal file:text-white
                      hover:file:bg-charcoal/90" />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
        @if($product && $product->image_path)
            <div class="mt-2">
                <img src="{{ Storage::url($product->image_path) }}"
                     alt="{{ $product->name }}"
                     class="h-32 w-32 object-cover rounded">
            </div>
        @endif
    </div>

    <div class="flex space-x-6">
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox"
                       name="is_featured"
                       class="rounded border-gray-300 text-ember shadow-sm focus:border-ember focus:ring focus:ring-ember focus:ring-opacity-50"
                       value="1"
                       {{ old('is_featured', $product?->is_featured) ? 'checked' : '' }}>
                <span class="ml-2 text-sm text-gray-600">{{ __('Featured Product') }}</span>
            </label>
        </div>

        <div>
            <label class="inline-flex items-center">
                <input type="checkbox"
                       name="is_active"
                       class="rounded border-gray-300 text-ember shadow-sm focus:border-ember focus:ring focus:ring-ember focus:ring-opacity-50"
                       value="1"
                       {{ old('is_active', $product?->is_active ?? true) ? 'checked' : '' }}>
                <span class="ml-2 text-sm text-gray-600">{{ __('Active') }}</span>
            </label>
        </div>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ $product ? __('Update Product') : __('Create Product') }}</x-primary-button>
        <a href="{{ route('admin.products.index') }}" class="text-gray-600 hover:text-gray-900">{{ __('Cancel') }}</a>
    </div>
</form> 