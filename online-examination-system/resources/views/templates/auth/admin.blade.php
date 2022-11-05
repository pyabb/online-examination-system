<x-login-layout>

    <x-slot name="form_title">
        {{ __('Administrators') }}
    </x-slot>

    <x-slot name="form_action">
        {{ route('admin.login') }}
    </x-slot>

</x-login-layout>
