<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-Filling Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex min-h-screen">

    <aside class="w-20 border-r bg-white flex flex-col items-center py-6 gap-8">
        <div class="p-2 border rounded-md cursor-pointer hover:bg-gray-100">
            <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
        </div>
        <div class="p-2 border rounded-md cursor-pointer hover:bg-gray-100">
            <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
        </div>
        <div class="mt-auto p-2 border rounded-full cursor-pointer hover:bg-gray-100">
            <svg class="w-8 h-8 text-gray-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
        </div>
    </aside>

    <main class="flex-1 p-8">
        
        <div class="grid grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm text-center">
                <p class="text-gray-500 text-sm font-medium mb-4">Total Dosen</p>
                <h2 class="text-4xl font-semibold">50</h2>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm text-center">
                <p class="text-gray-500 text-sm font-medium mb-4">Pengisian Selesai</p>
                <h2 class="text-4xl font-semibold">20</h2>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm text-center">
                <p class="text-gray-500 text-sm font-medium mb-4">Dalam Proses</p>
                <h2 class="text-4xl font-semibold">20</h2>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm text-center">
                <p class="text-gray-500 text-sm font-medium mb-4">Tertunda</p>
                <h2 class="text-4xl font-semibold">10</h2>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm mb-8">
            <h3 class="text-gray-700 font-medium mb-6">Proses Pengisian Formulir</h3>
            <div class="w-full bg-gray-100 rounded-full h-8 relative overflow-hidden">
                <div class="bg-green-500 h-full rounded-full flex items-center justify-center text-white font-bold text-sm" style="width: 80%">
                    80%
                </div>
            </div>
            <p class="mt-4 text-gray-600 text-sm">80% dosen telah menyelesaikan e-filling bulan ini</p>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
            <h3 class="text-gray-700 font-medium mb-6">Upload File</h3>
            
            <div class="border-2 border-dashed border-gray-300 rounded-xl p-12 bg-gray-50 text-center mb-6">
                <p class="text-gray-500">Drag & drop disini atau <span class="text-blue-500 cursor-pointer">klik untuk upload</span> (PDF, JPG, PNG maks. 3 MB)</p>
            </div>

            <div class="flex justify-center">
                <button class="px-10 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition font-medium">
                    Upload Sekarang
                </button>
            </div>
        </div>

    </main>

</body>
</html>