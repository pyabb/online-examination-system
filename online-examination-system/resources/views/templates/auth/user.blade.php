<x-login-layout>

    <x-slot name="form_title">
        {{ __('Login') }}
    </x-slot>

    <x-slot name="form_action">
        {{ route('login') }}
    </x-slot>

</x-login-layout>
