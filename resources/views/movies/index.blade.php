<script src="https://cdn.tailwindcss.com"></script>
<div class="p-6 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md overflow-x-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Full Movie List</h1>
            <a href="{{ route('movies.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add New Movie</a>
        </div>
        
        <table class="w-full text-sm text-left border-collapse">
            <thead class="bg-gray-50 uppercase text-gray-600">
                <tr class="border-b">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Dir ID</th>
                    <th class="px-4 py-3">Studio ID</th>
                    <th class="px-4 py-3">Country</th>
                    <th class="px-4 py-3">Year</th>
                    <th class="px-4 py-3">Lang</th>
                    <th class="px-4 py-3">Location</th>
                    <th class="px-4 py-3">Category</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-4 py-3">{{ $movie->idMovie }}</td>
                    <td class="px-4 py-3 font-medium">{{ $movie->name_movie }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $movie->Director_idDirector }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $movie->Studio_idStudio }}</td>
                    <td class="px-4 py-3">{{ $movie->country_of_release }}</td>
                    <td class="px-4 py-3">{{ $movie->year_of_release }}</td>
                    <td class="px-4 py-3">{{ $movie->language }}</td>
                    <td class="px-4 py-3">{{ $movie->filming_location }}</td>
                    <td class="px-4 py-3">{{ $movie->category }}</td>
                    <td class="px-4 py-3 flex justify-center gap-3">
                        <a href="{{ route('movies.edit', $movie->idMovie) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('movies.destroy', $movie->idMovie) }}" method="POST" onsubmit="return confirm('Delete this movie?')">
                            @csrf @method('DELETE')
                            <button class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>