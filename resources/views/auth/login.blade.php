@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-clay-50">
    <div class="max-w-md w-full space-y-8 p-8 bg-white rounded-xl shadow-lg">
        <div class="text-center">
            <x-atoms.logo class="mx-auto h-12 w-auto" />
            <x-atoms.heading level="1" class="mt-6 text-3xl font-nohemi text-charcoal-900">
                Sign in to your account
            </x-atoms.heading>
            <x-atoms.text class="mt-2 text-sm text-clay-600">
                Or
                <x-atoms.link href="{{ route('register') }}" class="font-medium text-ember-600 hover:text-ember-500">
                    create a new account
                </x-atoms.link>
            </x-atoms.text>
        </div>

        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="rounded-md shadow-sm space-y-4">
                <div>
                    <x-atoms.label for="email" value="Email address" />
                    <x-atoms.input 
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="mt-1 block w-full"
                    />
                    <x-atoms.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <x-atoms.label for="password" value="Password" />
                    <x-atoms.input 
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="mt-1 block w-full"
                    />
                    <x-atoms.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <x-atoms.checkbox 
                        id="remember_me"
                        name="remember"
                        class="rounded border-clay-300 text-ember-600 focus:ring-ember-500"
                    />
                    <x-atoms.label for="remember_me" class="ml-2">
                        Remember me
                    </x-atoms.label>
                </div>

                @if (Route::has('password.request'))
                    <x-atoms.link href="{{ route('password.request') }}" class="text-sm text-ember-600 hover:text-ember-500">
                        Forgot your password?
                    </x-atoms.link>
                @endif
            </div>

            <div>
                <x-atoms.button type="submit" class="w-full justify-center">
                    Sign in
                </x-atoms.button>
            </div>
        </form>
    </div>
</div>
@endsection
