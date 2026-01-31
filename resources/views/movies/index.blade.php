<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md overflow-x-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Full Movie Records</h1>
        <a href="{{ route('movies.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add New Movie</a>
    </div>

    <table class="w-full text-sm text-left border-collapse border border-gray-200">
        <thead class="bg-gray-50 uppercase text-gray-600 font-semibold">
            <tr class="border-b">
                <th class="px-4 py-3 border">ID</th>
                <th class="px-4 py-3 border">Movie Name</th>
                <th class="px-4 py-3 border">Dir ID</th>
                <th class="px-4 py-3 border">Studio ID</th>
                <th class="px-4 py-3 border">Year</th>
                <th class="px-4 py-3 border">Category</th>
                <th class="px-4 py-3 border text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="px-4 py-3 border">{{ $movie->idMovie }}</td>
                <td class="px-4 py-3 border font-medium">{{ $movie->name_movie }}</td>
                <td class="px-4 py-3 border text-gray-500">{{ $movie->Director_idDirector }}</td>
                <td class="px-4 py-3 border text-gray-500">{{ $movie->Studio_idStudio }}</td>
                <td class="px-4 py-3 border">{{ $movie->year_of_release }}</td>
                <td class="px-4 py-3 border">{{ $movie->category }}</td>
                <td class="px-4 py-3 border flex justify-center gap-3">
                    <a href="{{ route('movies.edit', $movie->idMovie) }}" class="text-yellow-600 font-semibold">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->idMovie) }}" method="POST" id="delete-form-{{ $movie->idMovie }}">
                        @csrf @method('DELETE')
                        <button type="button" onclick="confirmDelete('{{ $movie->idMovie }}')" class="text-red-600 font-semibold">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    // Toast Configuration
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });

    // Success Toast
    @if(session('success'))
        Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}"
        });
    @endif

    // Delete Confirmation
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
</body>
</html>