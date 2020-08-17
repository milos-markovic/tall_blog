@if ($errors->any())
    <div id="errors" class="bg-red-400 text-white text-center p-5 mr-5 mb-5 rounded w-full">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif