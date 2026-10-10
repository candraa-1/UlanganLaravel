@error('total_hadiah')
    <h1>ERRORRR</h1>    
    <h1>{{$message}}</h1>
@enderror
@error('jumlah_juara')
    <h1>ERRORRR</h1>    
    <h1>{{$message}}</h1>
@enderror

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Tournament Esport</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --font-sans: 'Rubik', sans-serif;
        }
    </style>
</head>
<body class="bg-sky-100 min-h-screen font-sans text-black flex items-center justify-center p-6">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-10">

        <h1 class="text-3xl font-semibold text-black mb-8 text-center">Edit Data</h1>

        <form method="POST" action="/esport/{{ $esport->id }}" class="flex flex-col gap-5">

            @csrf
            @method('PUT')

            <div>
                <label class="block font-medium mb-2">Nama Game</label>

                <select name="tournament_esport_id" class="w-full border border-sky-200 rounded-lg px-4 py-3 bg-white focus:outline-none focus:border-sky-500" required>
                    <option value="">Pilih Game</option>
                    @foreach ($tournament_esports as $d)
                        <option value="{{ $d->id }}"
                            {{ $esport->tournament_esport_id == $d->id ? 'selected' : '' }}>
                            {{ $d->nama_game }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium mb-2">Nama Tim</label>

                <input type="text"
                       name="nama_tim"
                       value="{{ $esport->nama_tim }}"
                       class="w-full border border-sky-200 rounded-lg px-4 py-3 focus:outline-none focus:border-sky-500"
                       placeholder="Masukkan Nama Tim" required>
            </div>

            <div>
                <label class="block font-medium mb-2">Jumlah Juara</label>

                <input type="texts"
                       name="jumlah_juara"
                       value="{{ $esport->jumlah_juara }}"
                       class="w-full border border-sky-200 rounded-lg px-4 py-3 focus:outline-none focus:border-sky-500"
                       placeholder="Masukkan Jumlah Juara" required>
            </div>
            <div>
                <label class="block font-medium mb-2">Total Hadiah  </label>

                <input type="text"
                       name="total_hadiah"
                       value="{{ $esport->total_hadiah }}"
                       class="w-full border border-sky-200 rounded-lg px-4 py-3 focus:outline-none focus:border-sky-500"
                       placeholder="Masukkan Total Hadiah" required>
            </div>

            <button type="submit" class="w-full bg-sky-500 text-white font-medium px-4 py-3 rounded-lg hover:bg-sky-600 cursor-pointer">
                Update
            </button>

            <a href="/esport" class="block w-full bg-sky-500 text-white text-center font-medium px-4 py-3 rounded-lg hover:bg-sky-600">
                Kembali
            </a>

        </form>

    </div>

</body>
</html>
