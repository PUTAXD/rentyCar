<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
</head>
<body>
    <h1>Edit Car</h1>

    <!-- Tampilkan pesan error jika ada -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form edit data -->
    <form action="{{ route('rentcar.update', $car->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Menggunakan method PUT untuk update -->

        <label for="merk_id">Merk ID:</label>
        <input type="text" id="merk_id" name="merk_id" value="{{ old('merk_id', $car->merk_id) }}"><br><br>

        <label for="slug">Slug:</label>
        <input type="text" id="slug" name="slug" value="{{ old('slug', $car->slug) }}"><br><br>

        <label for="licensePlate">License Plate:</label>
        <input type="text" id="licensePlate" name="licensePlate" value="{{ old('licensePlate', $car->licensePlate) }}"><br><br>

        <label for="initialCondition">Initial Condition:</label>
        <textarea id="initialCondition" name="initialCondition">{{ old('initialCondition', $car->initialCondition) }}</textarea><br><br>

        <label for="body">Body:</label>
        <textarea id="body" name="body">{{ old('body', $car->body) }}</textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ old('price', $car->price) }}"><br><br>

        <label for="image">Renew New Image:</label>
        <input type="file" id="image" name="image"><br><br>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Update
        </button>
    </form>
</body>
</html>
