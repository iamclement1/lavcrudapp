<x-app-layout>
    <div class="shadow-md w-3/5 bg-white mt-4 p-3 mx-auto">
        <div class="">
            <div class="">
                <div class="pull-left">
                    <h2 class="text-4xl font-mono font-bold text-center">CRUD APPLICATION</h2>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table-fixed">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('companies.edit', $company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-end mt-4">
            <div class="mb-2">
                <a href="{{ route('companies.create') }}">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" ">
                        Create Company
                    </button>
                </a>
            </div>
        </div>
        ​
        {!! $companies->links() !!}
    </div>
</x-app-layout>
