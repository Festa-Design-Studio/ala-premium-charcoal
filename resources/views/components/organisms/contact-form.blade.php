<div class="bg-clay-50 rounded-xl p-8">
    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
        @csrf
        
        <!-- Name Fields -->
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="first_name" class="block text-sm font-medium text-charcoal-700 mb-1">First Name</label>
                <x-atoms.input 
                    type="text" 
                    id="first_name" 
                    name="first_name" 
                    required 
                    value="{{ old('first_name') }}"
                    class="@error('first_name') border-ember-500 @enderror"
                />
                @error('first_name')
                    <p class="mt-1 text-sm text-ember-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-charcoal-700 mb-1">Last Name</label>
                <x-atoms.input 
                    type="text" 
                    id="last_name" 
                    name="last_name" 
                    required 
                    value="{{ old('last_name') }}"
                    class="@error('last_name') border-ember-500 @enderror"
                />
                @error('last_name')
                    <p class="mt-1 text-sm text-ember-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-charcoal-700 mb-1">Email Address</label>
            <x-atoms.input 
                type="email" 
                id="email" 
                name="email" 
                required 
                value="{{ old('email') }}"
                class="@error('email') border-ember-500 @enderror"
            />
            @error('email')
                <p class="mt-1 text-sm text-ember-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-medium text-charcoal-700 mb-1">Phone Number</label>
            <x-atoms.input 
                type="tel" 
                id="phone" 
                name="phone" 
                value="{{ old('phone') }}"
                class="@error('phone') border-ember-500 @enderror"
            />
            @error('phone')
                <p class="mt-1 text-sm text-ember-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Subject -->
        <div>
            <label for="subject" class="block text-sm font-medium text-charcoal-700 mb-1">Subject</label>
            <x-atoms.input 
                type="text" 
                id="subject" 
                name="subject" 
                required 
                value="{{ old('subject') }}"
                class="@error('subject') border-ember-500 @enderror"
            />
            @error('subject')
                <p class="mt-1 text-sm text-ember-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-medium text-charcoal-700 mb-1">Message</label>
            <textarea 
                id="message" 
                name="message" 
                rows="4" 
                class="border border-ash-300 focus:border-palm-500 rounded-md px-4 py-2 w-full focus:outline-none transition-all duration-300 @error('message') border-ember-500 @enderror"
                required
            >{{ old('message') }}</textarea>
            @error('message')
                <p class="mt-1 text-sm text-ember-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <x-atoms.button type="submit" variant="primary">
                Send Message
            </x-atoms.button>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mt-4 p-4 bg-palm-50 text-palm-700 rounded-md">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div> 