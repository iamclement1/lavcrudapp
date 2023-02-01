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
            {{-- <div class="shadow-md text-green-500">
                <p>{{ $message }}</p>
            </div> --}}
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">Congratulations!</p>
                        <p class="text-sm">
                            {{ $message }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <table class="">
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
                                <a class="bg-blue-500 hover:bg-blue-700 px-6 py-2 rounded text-white" href="{{ route('companies.edit', $company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
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
