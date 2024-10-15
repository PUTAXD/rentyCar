<x-layout>
    <div class="container">
        <h1>CRUD Form</h1>

        <!-- Form untuk create data -->
        <form action="{{ route('store') }}" method="POST">
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

            <button type="submit">Submit</button>
        </form>

    </div>

</x-layout>
