<script src="https://cdn.tailwindcss.com"></script>
<div class="p-8 max-w-lg mx-auto bg-white shadow-lg rounded-xl mt-10">
    <h1 class="text-2xl font-bold mb-6">Add Movie</h1>
    <form action="{{ route('movies.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="number" name="idMovie" placeholder="Movie ID" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-400">
        
        <select name="Director_idDirector" class="w-full border p-2 rounded">
            <option value="">Select Director</option>
            @foreach($directors as $director)
                <option value="{{ $director->idDirector }}">{{ $director->name_director }}</option>
            @endforeach
        </select>

        <select name="Studio_idStudio" class="w-full border p-2 rounded">
            <option value="">Select Studio</option>
            @foreach($studios as $studio)
                <option value="{{ $studio->idStudio }}">{{ $studio->company_name}}</option>
            @endforeach
        </select>

        <input type="text" name="name_movie" placeholder="Movie Name" class="w-full border p-2 rounded">
        <input type="number" name="year_of_release" placeholder="Year" class="w-full border p-2 rounded">
        <input type="text" name="country_of_release" placeholder="Country" class="w-full border p-2 rounded">
        <input type="text" name="language" placeholder="Language" class="w-full border p-2 rounded">
        <input type="text" name="filming_location" placeholder="Location" class="w-full border p-2 rounded">
        <input type="text" name="category" placeholder="Category" class="w-full border p-2 rounded">
        
        <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded transition">
            Save Movie
        </button>
    </form>
</div>