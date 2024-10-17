<x-layout>
    <x-slot:tittle>
        All User Data
    </x-slot>
    welcome {{ Auth::user()->name }}
                <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New</a>
                <a href="{{ route('logout') }}" class="btn btn-danger mb-3">Logout</a>
                
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Image</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach ($contacts as $contact )
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->user->name }}</td>
                <td>{{ $contact->user->email }}</td>
                <td>{{ $contact->user->age }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->image }}</td>
                <td><a href="{{ route('contacts.show',$contact->id) }}" class="btn btn-primary">View</a></td>
                <td><a href="{{ route('contacts.edit',$contact->id) }}" class="btn btn-warning">Update</a></td>
                <form action="{{ route('contacts.destroy',$contact->id) }}">
                    @csrf
                    @method('DELETE')
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </form>
            </tr>
        @endforeach
    </table>
    <div>
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>
    <a href="{{ route('dashboard') }}" class="btn btn-danger">Back</a>
</x-layout>