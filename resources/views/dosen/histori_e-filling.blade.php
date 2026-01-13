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
        aside {
            transition: all 0.3s ease;
        }
        aside.collapsed {
            width: 0;
            overflow: hidden;
        }
        aside.icon-only {
            width: 80px;
        }
        aside.icon-only span {
            display: none;
        }
        aside.icon-only .px-4 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .close-btn {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        aside:hover .close-btn {
            opacity: 1;
        }
        .hamburger-btn {
            display: none;
        }
        @media (max-width: 768px) {
            .hamburger-btn {
                display: block;
            }
            aside {
                position: fixed;
                left: 0;
                top: 0;
                height: 100vh;
                z-index: 40;
                width: 256px;
            }
            aside.collapsed {
                width: 0;
            }
            body {
                flex-wrap: wrap;
            }
            main {
                width: 100%;
            }
        }
        .extend-btn {
            display: none;
        }
        aside.icon-only .extend-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            margin-bottom: 4px;
        }
    </style>
</head>
<body class="bg-gray-50 flex min-h-screen">

    <aside class="w-64 border-r bg-white flex flex-col py-6 shadow-sm relative" id="sidebar">
        
        <nav class="flex-1 px-4 space-y-4">
            <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Dashboard</span>
            </a>

            <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Histori E-Filling</span>
            </a>
            
            <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Upload File</span>
            </a>
        </nav>

        <div class="px-4 border-t pt-4">
            <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-full bg-white text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Profil</span>
            </a>
        </div>

    </aside>

    <main class="flex-1 p-8">
        <header class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Monitoring Dokumen Akademik</h1>
            <p class="text-gray-500 text-sm">Kelola jurnal, publikasi, dan sertifikasi Anda di sini.</p>
        </header>

        <div class="flex gap-4 mb-6">
            <button class="px-5 py-2 bg-blue-600 text-white rounded-full text-xs font-semibold shadow-sm">Semua Dokumen</button>
            <button class="px-5 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:bg-gray-50">Jurnal & Publikasi</button>
            <button class="px-5 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:bg-gray-50">Sertifikasi Kompetensi</button>
            <button class="px-5 py-2 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:bg-gray-50">Pengabdian Masyarakat</button>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Dokumen / Judul</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Kategori</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal Unggah</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status Verifikasi</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4">
                            <div class="font-medium text-gray-800 text-sm">Analisis Algoritma Optimasi pada AI</div>
                            <div class="text-xs text-gray-400">Jurnal Internasional Scopus Q1</div>
                        </td>
                        <td class="p-4 text-sm text-gray-600">Publikasi Ilmiah</td>
                        <td class="p-4 text-sm text-gray-600">12 Jan 2026</td>
                        <td class="p-4">
                            <span class="px-3 py-1 text-[10px] font-bold uppercase bg-green-100 text-green-700 rounded-full">Selesai</span>
                        </td>
                        <td class="p-4 text-center text-blue-500 hover:underline text-sm cursor-pointer">Lihat File</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 text-sm font-medium text-gray-800">Sertifikasi Cloud Architecture (AWS)</td>
                        <td class="p-4 text-sm text-gray-600">Sertifikasi</td>
                        <td class="p-4 text-sm text-gray-600">10 Jan 2026</td>
                        <td class="p-4">
                            <span class="px-3 py-1 text-[10px] font-bold uppercase bg-yellow-100 text-yellow-700 rounded-full">Dalam Proses</span>
                        </td>
                        <td class="p-4 text-center text-blue-500 hover:underline text-sm cursor-pointer">Lihat File</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 text-sm font-medium text-gray-800">Pelatihan IT bagi UMKM Desa Sukamaju</td>
                        <td class="p-4 text-sm text-gray-600">Pengabdian</td>
                        <td class="p-4 text-sm text-gray-600">05 Jan 2026</td>
                        <td class="p-4">
                            <span class="px-3 py-1 text-[10px] font-bold uppercase bg-red-100 text-red-700 rounded-full">Tertunda</span>
                        </td>
                        <td class="p-4 text-center text-blue-500 hover:underline text-sm cursor-pointer">Re-Upload</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script>
        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;


        // Hide span from aside with cursor if cursor outside aside (Desktop Only)
        document.addEventListener('mousemove', (e) => {

            // Jika cursor di x=0, buka/extend sidebar penuh
            if (e.clientX === 0 || e.clientX <= 10) {
                if (!sidebarVisible) {
                    sidebar.classList.remove('collapsed');
                    sidebarVisible = true;
                }
                if (isIconOnly) {
                    sidebar.classList.remove('icon-only');
                    isIconOnly = false;
                }
            }

            // Jika cursor di area sidebar, collapse span tetapi ikon tetap tampil (icon-only mode)
            if (e.clientX >= 200 && sidebarVisible) {
                if (!isIconOnly) {
                    sidebar.classList.add('icon-only');
                    isIconOnly = true;
                }
            } else if (isIconOnly && sidebarVisible && !(e.clientX >= 200)) {
                // Tampilkan span kembali jika cursor keluar dari area tersebut
                sidebar.classList.remove('icon-only');
                isIconOnly = false;
            }
        });

    </script>
</body>
</html>
