<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Movie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-lg mx-auto bg-white shadow-lg rounded-xl p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Edit Movie</h1>
        <a href="{{ route('movies.index') }}" class="text-blue-500 hover:underline">Back to List</a>
    </div>

    <form action="{{ route('movies.update', $movie->idMovie) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block text-sm font-medium text-gray-700">Movie ID (Read Only)</label>
            <input type="number" value="{{ $movie->idMovie }}" class="w-full border p-2 rounded bg-gray-100 cursor-not-allowed" readonly>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Director</label>
            <select name="Director_idDirector" class="w-full border p-2 rounded">
                @foreach($directors as $director)
                    <option value="{{ $director->idDirector }}" {{ $movie->Director_idDirector == $director->idDirector ? 'selected' : '' }}>
                        {{ $director->name_director }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Studio</label>
            <select name="Studio_idStudio" class="w-full border p-2 rounded">
                @foreach($studios as $studio)
                    <option value="{{ $studio->idStudio }}" {{ $movie->Studio_idStudio == $studio->idStudio ? 'selected' : '' }}>
                        {{ $studio->company_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <input type="text" name="name_movie" value="{{ old('name_movie', $movie->name_movie) }}" placeholder="Movie Name" class="w-full border p-2 rounded">
        <input type="number" name="year_of_release" value="{{ old('year_of_release', $movie->year_of_release) }}" placeholder="Year" class="w-full border p-2 rounded">
        <input type="text" name="country_of_release" value="{{ old('country_of_release', $movie->country_of_release) }}" placeholder="Country" class="w-full border p-2 rounded">
        <input type="text" name="language" value="{{ old('language', $movie->language) }}" placeholder="Language" class="w-full border p-2 rounded">
        <input type="text" name="filming_location" value="{{ old('filming_location', $movie->filming_location) }}" placeholder="Location" class="w-full border p-2 rounded">
        <input type="text" name="category" value="{{ old('category', $movie->category) }}" placeholder="Category" class="w-full border p-2 rounded">
        
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded transition">
            Update Movie
        </button>
    </form>
</div>

<script>
    // Error Toast for validation failures during update
    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Update Failed',
            html: '{!! implode("<br>", $errors->all()) !!}',
            confirmButtonColor: '#ef4444'
        });
    @endif
</script>
</body>
</html>