<!-- resources/views/gatos/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUTE CATS</title>
    <!-- Agrega la biblioteca Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="font-sans bg-gray-100">
    <div class="max-w-screen-lg mx-auto p-4 text-center">
        <h1 class="text-3xl font-semibold mb-6">CUTE CATS</h1>

        <!-- Agrega el formulario de filtro de tags -->
        <form action="{{ route('gatos.index') }}" method="GET" class="mb-4">
            <label for="tagFilter" class="text-sm font-semibold">Filtrar por tag:</label>
            <select id="tagFilter" name="tag" class="px-2 py-1 border rounded-md" onchange="this.form.submit()">
                <option value="">Todos</option>
                @foreach ($allTags as $tag)
                    <option value="{{ $tag }}" {{ $tag == $selectedTag ? 'selected' : '' }}>{{ $tag }}
                    </option>
                @endforeach
            </select>
        </form>

        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($catImages as $catImage)
                <div class="bg-gray-100 rounded-md overflow-hidden shadow-lg">
                    <!-- Agrega la imagen directamente desde la URL -->
                    <img src="https://cataas.com/cat/{{ $catImage->_id }}" alt="Cat Image"
                        class="object-cover w-full h-64 md:h-96">
                    <div class="p-4">
                        <!-- Muestra los tags debajo de la imagen -->
                        <div class="flex flex-wrap justify-center gap-2">
                            @foreach (json_decode($catImage->tags) as $tag)
                                <span class="bg-green-500 text-white px-2 py-1 rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Agrega el paginador de Laravel -->
        {{ $catImages->links() }}
    </div>

    <script>
        // Función para aplicar el filtro de tags
        function applyTagFilter(selectElement) {
            const selectedTag = selectElement.value;
            window.location.href = selectedTag ? `?tag=${selectedTag}` : '/';
        }
    </script>
</body>

</html>
