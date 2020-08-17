        
        <label class="block text-gray-700 text-sm font-bold mb-2" for="genres">
            Genres
        </label>
        <select name="genre" id="" class="w-full shadow p-2 border text-gray-700">
            @foreach($genres as $genre)
                <option value="{{ $genre->name }}">{{ $genre->name }}</option>
            @endforeach
        </select>