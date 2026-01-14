<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Dokumen | Admin E-Filling</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<style>
<style>
        body { font-family: 'Inter', sans-serif; }
        aside {
            transition: all 0.2s ease;
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
        aside:hover .close-btn {
            opacity: 1;
        }
        @media (max-width: 768px) {
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
    </style>
<body class="bg-gray-50 flex min-h-screen text-slate-800">

    <aside class="w-64 border-r bg-white flex flex-col py-6 shadow-sm relative" id="sidebar">
        
        <nav class="flex-1 px-4 space-y-4">
            <a href="{{ route('admin/dashboard') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Dashboard</span>
            </a>

            <a href="{{ route('admin/histori_e-filling_dosen') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Histori E-Filling Dosen</span>
            </a>

            <a href="{{ route('admin/verifikasi_file') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.133-.641-2.104-1.5-2.502A2.25 2.25 0 0 0 15.75 2.25H5.25A2.25 2.25 0 0 0 3 4.5v11.25m18 0-3-3m0 0-3 3m3 3V15" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Verifikasi Dokumen Dosen</span>
            </a>
            
        </nav>
        <div class="px-4 border-t pt-4">
            <a href="{{ route('admin/user_management') }}" class="flex items-center gap-3 p-3 rounded-xl bg-blue-600 text-white font-semibold shadow-lg shadow-blue-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <span class="text-sm font-semibold text-white">Kelola Pengguna</span>
            </a>
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

    <main class="flex-1 p-8 overflow-y-auto">
        <header class="mb-8 flex justify-between items-end">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Antrean Verifikasi</h1>
                <p class="text-slate-500 text-sm">Terdapat <span class="font-bold text-blue-600">24 dokumen</span> yang perlu Anda tinjau hari ini.</p>
            </div>
            
            <div class="flex gap-2">
                <select class="bg-white border border-gray-200 text-sm px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Semua Kategori</option>
                    <option>Jurnal</option>
                    <option>Sertifikasi</option>
                </select>
                <input type="text" placeholder="Cari Nama Dosen..." class="bg-white border border-gray-200 text-sm px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-blue-500 w-64">
            </div>
        </header>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest">Info Dosen</th>
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest">Detail Dokumen</th>
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">Berkas</th>
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">Aksi Verifikasi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-5">
                            <div class="font-bold text-slate-700 text-sm">Dr. Ahmad Faisal</div>
                            <div class="text-[11px] text-slate-400 font-medium">NIDN: 041208xxxx</div>
                            <div class="mt-1 text-[10px] bg-slate-100 inline-block px-2 py-0.5 rounded text-slate-500">Teknik Informatika</div>
                        </td>
                        <td class="px-6 py-5">
                            <span class="text-[10px] font-bold px-2 py-1 rounded bg-blue-100 text-blue-700 uppercase">Jurnal</span>
                            <div class="mt-2 font-semibold text-slate-700 text-sm">Optimasi CNN pada Klasifikasi Gambar</div>
                            <div class="text-[11px] text-slate-400 italic">Diunggah: 12 Jan 2026, 14:20</div>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <button class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-bold text-xs bg-blue-50 px-3 py-2 rounded-lg transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Pratinjau
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <button class="bg-green-500 hover:bg-green-600 text-white text-[11px] font-bold px-4 py-2 rounded-lg transition shadow-sm shadow-green-100">SETUJUI</button>
                                <button class="bg-white border border-red-200 text-red-600 hover:bg-red-50 text-[11px] font-bold px-4 py-2 rounded-lg transition">TOLAK</button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-5">
                            <div class="font-bold text-slate-700 text-sm">Siti Aminah, M.Kom.</div>
                            <div class="text-[11px] text-slate-400 font-medium">NIDN: 040510xxxx</div>
                            <div class="mt-1 text-[10px] bg-slate-100 inline-block px-2 py-0.5 rounded text-slate-500">Sistem Informasi</div>
                        </td>
                        <td class="px-6 py-5">
                            <span class="text-[10px] font-bold px-2 py-1 rounded bg-purple-100 text-purple-700 uppercase">Sertifikasi</span>
                            <div class="mt-2 font-semibold text-slate-700 text-sm">Google Cloud Professional Architect</div>
                            <div class="text-[11px] text-slate-400 italic">Diunggah: 13 Jan 2026, 09:15</div>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <button class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-bold text-xs bg-blue-50 px-3 py-2 rounded-lg transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Pratinjau
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <button class="bg-green-500 hover:bg-green-600 text-white text-[11px] font-bold px-4 py-2 rounded-lg transition shadow-sm shadow-green-100">SETUJUI</button>
                                <button class="bg-white border border-red-200 text-red-600 hover:bg-red-50 text-[11px] font-bold px-4 py-2 rounded-lg transition">TOLAK</button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-between items-center text-sm text-slate-500 font-medium px-2">
            <div>Menampilkan 1-2 dari 24 Antrean</div>
            <div class="flex gap-2">
                <button class="px-4 py-2 border rounded-lg bg-white hover:bg-gray-50 transition">Sebelumnya</button>
                <button class="px-4 py-2 border rounded-lg bg-white hover:bg-gray-50 transition">Selanjutnya</button>
            </div>
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