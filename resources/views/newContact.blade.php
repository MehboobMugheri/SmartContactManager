<x-layout>
    <x-slot:tittle>
        Add New Contact
    </x-slot>
    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
       <div>
        <label for="" class="mt-3">Contact : </label>
        <input type="text" name="contact" class="form-control">
        <span class="text-danger">
            @error('contact')
                {{ $message }}
            @enderror
        </span>
       </div>
        <div>
            <label for="" class="mt-3">Address : </label>
            <input type="text" name="address" class="form-control">
            <span class="text-danger">
                @error('address')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label for="" class="mt-3">Image : </label>
            <input type="file" name="image" class="form-control">
            <span class="text-danger">
                @error('image')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label for="" class="mt-3">User Id : </label>
            <input type="number" name="user_id" class="form-control">
            <span class="text-danger">
                @error('user_id')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button class="btn btn-info mt-3">Add</button>
    </form>
</x-layout>