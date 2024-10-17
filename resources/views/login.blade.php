<x-layout>
    <x-slot:tittle>
        Login Form
    </x-slot>
    <form action="{{ route('login') }}" method="POST">
        @csrf
       <div>
        <label for="">Email : </label>
        <input type="email" name="email" class="form-control">
        <span class="text-danger">
            @error('email')
                    {{ $message }}
            @enderror
        </span>
       </div>
        <div>
            <label for="" class="mt-3">Password : </label>
        <input type="password" name="password" class="form-control">
        <span class="text-danger">
            @error('password')
                    {{ $message }}
            @enderror
        </span>
        </div>
        {{-- <p>If you have not Account please <a href="{{ route('register') }}">Signup</a>here</p> --}}
        <button class="btn btn-info mt-3">Login</button>
    </form>
</x-layout>