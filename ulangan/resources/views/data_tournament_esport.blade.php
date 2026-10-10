    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laporan Pegawai</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Rubik', 'sans-serif'],
                        },
                    },
                },
            }
        </script>
    </head>
    <body class="bg-sky-100 min-h-screen font-sans text-black">

        <div class="max-w-3xl mx-auto p-6">

            <div class="bg-white rounded-lg shadow p-6">

                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h1 class="text-2xl font-semibold text-black">Laporan Data Tournament Esport</h1>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">

                        <thead>
                            <tr class="bg-sky-500 text-white">
                                <th class="p-3 border border-sky-200 w-16 text-center">No</th>
                                <th class="p-3 border border-sky-200 text-center">Nama Game</th>
                                <th class="p-3 border border-sky-200 text-center">Nama Tim</th>
                                <th class="p-3 border border-sky-200 text-center">Jumlah Juara</th>
                                <th class="p-3 border border-sky-200 text-center">Total Hadiah</th>
                            </tr>
                        </thead>

                        <tbody class="text-black">
                            @foreach ($tournament_esports as $d)
                                <tr class="hover:bg-sky-50">
                                    <td class="p-3 border border-sky-200 text-center">{{ $loop->iteration }}</td>
                                    <td class="p-3 border border-sky-200 text-center">{{ $d->nama_game }}</td>
                                    <td class="p-3 border border-sky-200 text-center">{{ $d->nama_tim }}</td>
                                    <td class="p-3 border border-sky-200 text-center">{{ $d->jumlah_juara }}</td>
                                    <td class="p-3 border border-sky-200 text-center">{{ $d->total_hadiah }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="mt-6">
                    <a href="/esport" class="inline-block bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-600">Kembali ke Beranda