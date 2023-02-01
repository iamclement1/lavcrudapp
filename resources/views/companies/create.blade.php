<x-app-layout>
    <div class="shadow-md w-1/3 bg-white mt-4 p-8 mx-auto">
        <div>
            <div>
                <div class="pull-left mb-2">
                    <h2 class="text-center text-4xl font-mono font-bold">
                        Add Company
                    </h2>
                </div>
                {{-- <a href="{{ route('companies.index') }}">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" ">
                        Back
                    </button>
                </a> --}}

            </div>
        </div>
         @if (session('status'))
                        <div class="shadow-md text-green-600 mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Company Name:</strong>
                                        <input type="text" name="name"
                                            class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                            placeholder="Company Name">
                                        @error('name')
                                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Company Email:</strong>
                                        <input type="email" name="email"
                                            class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                            placeholder="Company Email">
                                        @error('email')
                                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Company Address:</strong>
                                        <input type="text" name="address"
                                            class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                            placeholder="Company Address">
                                        @error('address')
                                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex space-x-5">

                                    <button type="submit"
                                        class="bg-green-500 px-4 py-2 text-white rounded">Submit</button>
                                </div>
                            </div>
                        </form>
            </div>
</x-app-layout>
