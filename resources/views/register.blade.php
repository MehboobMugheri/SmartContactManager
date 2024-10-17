<x-layout>
    <x-slot:tittle>
        Register Form
    </x-slot>
    <form action="{{ route('register') }}" method="POST">
        @csrf
       <div>
        <label for="" class="mt-3">Name : </label>
        <input type="text" name="name" class="form-control">
        <span class="text-danger">
            @error('name')
                {{ $message }}
            @enderror
        </span>
       </div>
        <div>
            <label for="" class="mt-3">Email : </label>
            <input type="email" name="email" class="form-control">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label for="" class="mt-3">Age : </label>
            <input type="number" name="age" class="form-control">
            <span class="text-danger">
                @error('age')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label for="" class="mt-3">Role : </label>
            <input type="text" name="role" class="form-control">
            <span class="text-danger">
                @error('role')
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
        <div>
            <label for="" class="mt-3">Confirm Password : </label>
            <input type="password" name="password_confirmation" class="form-control">
            <span class="text-danger">
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </span>
        </div>
        <button class="btn btn-info mt-3">Register</button>
    </form>
</x-layout>