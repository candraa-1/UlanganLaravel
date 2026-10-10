<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Tournament Esports</title>
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
<body class="bg-sky-100 min-h-screen font-sans text-black">
    <div class="max-w-6xl mx-auto p-6">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-black">Data Tournament Esports</h1>
        </div>

        <!-- Menampilkan Pesan Sukses Jika Ada -->
        @if(session('success') || session('sukses'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6 shadow">
                {{ session('success') ?? session('sukses') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow p-5">

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">

                    <thead>
                        <tr class="bg-sky-500 text-white">
                            <th class="p-3 border border-sky-200 w-16 text-center">No</th>
                            <th class="p-3 border border-sky-200">Nama Game</th>
                            <th class="p-3 border border-sky-200">Nama Tim</th>
                            <th class="p-3 border border-sky-200">Jumlah Juara</th>
                            <th class="p-3 border border-sky-200">Total Hadiah</th>
                            <th class="p-3 border border-sky-200">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-black">
                        @foreach ($esports as $p)
                            <tr class="hover:bg-sky-50">
                                <td class="p-3 border border-sky-200 text-center">{{ $loop->iteration }}</td>
                                <td class="p-3 border border-sky-200 font-medium">{{ $p->nama_game }}</td>  
                                <td class="p-3 border border-sky-200">{{ $p->nama_tim }}</td>
                                <td class="p-3 border border-sky-200">{{ $p->jumlah_juara }}</td>
                                <td class="p-3 border border-sky-200">{{ $p->total_hadiah }}</td>

                                <td class="p-3 border border-sky-200">
                                    <div class="flex gap-2">
                                        <a href="/esport/{{ $p->id }}" class="bg-green-600 text-white px-3 py-1.5 rounded-lg hover:bg-green-700 text-sm font-medium">Detail</a>
                                        <a href="/esport/{{ $p->id }}/edit" class="bg-blue-600 text-white px-3 py-1.5 rounded-lg hover:bg-blue-700 text-sm font-medium">Edit</a>
                                        <form action="/esport/{{ $p->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-600 text-white px-3 py-1.5 rounded-lg hover:bg-red-700 text-sm font-medium cursor-pointer">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="mt-6 flex gap-3">
                <a href="/esport/create" class="inline-block bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-600 font-medium">Tambah Data</a>
            </div>

        </div>
    </div>

</body>
</html>
