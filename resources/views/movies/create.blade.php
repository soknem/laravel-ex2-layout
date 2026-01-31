<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Movie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-lg mx-auto bg-white shadow-lg rounded-xl p-8">
    <h1 class="text-2xl font-bold mb-6">Add Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST" class="space-y-4">
        @csrf
        
        <input type="number" name="idMovie" value="{{ old('idMovie') }}" placeholder="Movie ID" class="w-full border p-2 rounded">
        
        <select name="Director_idDirector" class="w-full border p-2 rounded">
            <option value="">Select Director</option>
            @foreach($directors as $director)
                <option value="{{ $director->idDirector }}" {{ old('Director_idDirector') == $director->idDirector ? 'selected' : '' }}>{{ $director->name_director }}</option>
            @endforeach
        </select>

        <select name="Studio_idStudio" class="w-full border p-2 rounded">
            <option value="">Select Studio</option>
            @foreach($studios as $studio)
                <option value="{{ $studio->idStudio }}" {{ old('Studio_idStudio') == $studio->idStudio ? 'selected' : '' }}>{{ $studio->company_name }}</option>
            @endforeach
        </select>

        <input type="text" name="name_movie" value="{{ old('name_movie') }}" placeholder="Movie Name" class="w-full border p-2 rounded">
        <input type="number" name="year_of_release" value="{{ old('year_of_release') }}" placeholder="Year" class="w-full border p-2 rounded">
        <input type="text" name="country_of_release" value="{{ old('country_of_release') }}" placeholder="Country" class="w-full border p-2 rounded">
        <input type="text" name="language" value="{{ old('language') }}" placeholder="Language" class="w-full border p-2 rounded">
        <input type="text" name="filming_location" value="{{ old('filming_location') }}" placeholder="Location" class="w-full border p-2 rounded">
        <input type="text" name="category" value="{{ old('category') }}" placeholder="Category" class="w-full border p-2 rounded">
        
        <button type="submit" class="w-full bg-green-500 text-white font-bold py-2 rounded">Save Movie</button>
    </form>
</div>

<script>
    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: '{!! implode("<br>", $errors->all()) !!}',
            confirmButtonColor: '#ef4444'
        });
    @endif
</script>
</body>
</html>