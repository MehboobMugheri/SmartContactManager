<x-layout>
    <x-slot:tittle>
        Dashboard
    </x-slot>
    Welcome {{ Auth::user()->role }}
    <h2 class="bg-primary text-center"><a href="{{ route('contacts.index') }}" class="text-white">Admin</a></h2>
    <h2 class="bg-success text-center"><a href="{{ route('contacts.index') }}" class="text-white">User</a></h2>
    <a href="{{ route('logout') }}" class="btn btn-danger mb-3">Logout</a>

</x-layout>