<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Tournament Esport</title>
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

    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-8">

        <h1 class="text-2xl font-semibold text-black mb-6 text-center">Detail Data Esport</h1>

        <div class="flex flex-col gap-4">

            <div class="border border-sky-200 rounded-lg px-4 py-3 bg-sky-50/30">
                <p class="text-gray-500 text-xs font-medium uppercase tracking-wider mb-0.5">Nama Game</p>
                <p class="text-black font-medium text-base">
                    {{ $esport->nama_game}}
                </p>
            </div>
            
            <div class="border border-sky-200 rounded-lg px-4 py-3 bg-sky-50/30">
                <p class="text-gray-500 text-xs font-medium uppercase tracking-wider mb-0.5">Nama Tim</p>
                <p class="text-black font-medium text-base">
                    {{ $esport->nama_tim }}
                </p>
            </div>
            
            <div class="border border-sky-200 rounded-lg px-4 py-3 bg-sky-50/30">
                <p class="text-gray-500 text-xs font-medium uppercase tracking-wider mb-0.5">Jumlah Juara</p>
                <p class="text-black font-medium text-base">
                    {{ $esport->jumlah_juara }}
                </p>
            </div>
            <div class="border border-sky-200 rounded-lg px-4 py-3 bg-sky-50/30">
                <p class="text-gray-500 text-xs font-medium uppercase tracking-wider mb-0.5">Total Hadiah</p>
                <p class="text-black font-medium text-base">
                    {{ $esport->total_hadiah }}
                </p>
            </div>

            <a href="/esport" class="block w-full bg-sky-500 text-white text-center font-medium px-4 py-3 rounded-lg hover:bg-sky-600 mt-2 transition-colors">
                Kembali
            </a>

        </div>

    </div>

</body>
</html>
