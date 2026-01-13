<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori E-Filling Dosen</title>
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
            <a href="{{ route('dosen/dashboard') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Dashboard</span>
            </a>

            <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                    </svg>
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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Profil</span>
            </a>
        </div>

    </aside>

    <main class="flex-1 p-8 overflow-y-auto">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Halo, Pak Budi!</h1>
                <p class="text-gray-500">Berikut progres pengisian e-filling Anda bulan ini.</p>
            </div>
            <button class="bg-blue-600 text-white px-5 py-2.5 rounded-xl font-semibold text-sm shadow-lg shadow-blue-100">+ Tambah Dokumen</button>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="p-2 bg-green-50 text-green-600 rounded-lg uppercase text-[10px] font-bold tracking-wider">Tervalidasi</span>
                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800">12</h3>
                <p class="text-gray-500 text-sm">Dokumen disetujui</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="p-2 bg-yellow-50 text-yellow-600 rounded-lg uppercase text-[10px] font-bold tracking-wider">Menunggu</span>
                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800">04</h3>
                <p class="text-gray-500 text-sm">Sedang direview</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="p-2 bg-red-50 text-red-600 rounded-lg uppercase text-[10px] font-bold tracking-wider">Perlu Revisi</span>
                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-800">01</h3>
                <p class="text-gray-500 text-sm">Dokumen ditolak</p>
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm mb-8">
            <div class="flex justify-between items-end mb-4">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">Kelengkapan Tridarma</h3>
                    <p class="text-sm text-gray-500">Target penyelesaian: 20 Januari 2026</p>
                </div>
                <span class="text-2xl font-bold text-blue-600">75%</span>
            </div>
            <div class="w-full bg-gray-100 rounded-full h-4">
                <div class="bg-blue-600 h-4 rounded-full transition-all duration-500" style="width: 75%"></div>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Riwayat Unggahan Terakhir</h3>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Lihat Semua</a>
            </div>
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-[11px] uppercase text-gray-400 font-bold tracking-widest">
                    <tr>
                        <th class="px-6 py-4">Nama Dokumen</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-4">
                            <p class="text-sm font-semibold text-gray-800">Sertifikat Oracle Java Professional</p>
                            <p class="text-[11px] text-gray-400 font-mono italic">Sertif_Java_2025.pdf</p>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">Sertifikasi</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">Verified</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-gray-400 hover:text-blue-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

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
</html>
