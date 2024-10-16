<x-layout>
    {{-- <div class="container">
        <h1>CRUD Form</h1>

        <!-- Form untuk create data -->
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="merk_id">Merk ID:</label>
            <input type="text" id="merk_id" name="merk_id" value="{{ old('merk_id') }}"><br><br>

            <label for="slug">Slug:</label>
            <input type="text" id="slug" name="slug" value="{{ old('slug') }}"><br><br>

            <label for="licensePlate">License Plate:</label>
            <input type="text" id="licensePlate" name="licensePlate" value="{{ old('licensePlate') }}"><br><br>

            <label for="initialCondition">Initial Condition:</label>
            <textarea id="initialCondition" name="initialCondition">{{ old('initialCondition') }}</textarea><br><br>

            <label for="body">Body:</label>
            <textarea id="body" name="body">{{ old('body') }}</textarea><br><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}"><br><br>

            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="{{ old('type') }}" required><br><br>

            <!-- Input untuk gambar -->
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image"><br><br>

            <button type="submit">Submit</button>
        </form> --}}

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="merk_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk ID</label>
                            <input type="text" id="merk_id" name="merk_id" value="{{ old('merk_id') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                            <input type="text" id="slug" name="slug" value="{{ old('slug') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="licensePlate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">License Plate</label>
                            <input type="text" id="licensePlate" name="licensePlate" value="{{ old('licensePlate') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="L 9999 RC" required="">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="initialCondition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Initial Condition</label>
                            <textarea id="initialCondition" name="initialCondition" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here">{{ old('initialCondition') }}</textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                            <textarea id="body" name="body" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here">{{ old('body') }}</textarea>
                        </div>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rp 1.000.000" required="">
                        </div>
                        <div class="w-full">
                            <label for="Type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                            <input type="text" id="type" name="type" value="{{ old('type') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                        </div>
                        <div>
                            <label for="image">Upload Image:</label>
                            <input type="file" id="image" name="image" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white"><br><br>
                        </div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Add Car
                    </button>
                </form>
            </div>
        </section>
    {{-- </div> --}}

</x-layout>
