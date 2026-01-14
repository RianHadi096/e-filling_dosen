<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya | E-Filling Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
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

            <a href="{{ route('dosen/histori_e-filling') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Histori E-Filling</span>
            </a>

            <a href="{{ route('dosen/upload_file') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Upload File</span>
            </a>
        </nav>

        <div class="px-4 border-t pt-4">
            <a href="{{ route('dosen/profil') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-full bg-white text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Profil</span>
            </a>
        </div>

    </aside>

    <main class="flex-1 p-10 overflow-y-auto">
        <header class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Profil Akademik</h1>
            <p class="text-gray-500 text-sm">Informasi ini akan muncul pada setiap dokumen yang Anda unggah.</p>
        </header>

        <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm text-center">
                    <div class="relative inline-block group">
                        <div class="w-28 h-28 rounded-full border-4 border-blue-50 overflow-hidden mx-auto bg-gray-100">
                            <svg class="w-full h-full text-gray-300 p-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        </div>
                        <button class="absolute bottom-1 right-1 bg-blue-600 text-white p-2 rounded-full border-2 border-white hover:bg-blue-700 transition">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                        </button>
                    </div>
                    
                    <h2 class="mt-4 text-lg font-bold text-gray-800">Budi Santoso, M.T.</h2>
                    <p class="text-sm text-gray-400">NIDN: 0412038xxx</p>
                    
                    <div class="mt-6 pt-6 border-t border-gray-50 space-y-3">
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-400 font-medium">Fakultas</span>
                            <span class="text-gray-700 font-bold">Teknik Informatika</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-gray-400 font-medium">Jabatan</span>
                            <span class="text-gray-700 font-bold">Lektor</span>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-600 p-6 rounded-3xl text-white shadow-lg shadow-blue-100">
                    <h4 class="text-xs font-bold uppercase tracking-widest opacity-80 mb-4">Status Pengisian</h4>
                    <div class="flex items-center gap-4">
                        <div class="text-2xl font-bold">85%</div>
                        <div class="flex-1 h-1.5 bg-blue-400 rounded-full overflow-hidden">
                            <div class="bg-white h-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <p class="text-[10px] mt-4 opacity-70 leading-relaxed italic">"Dokumen Anda hampir lengkap untuk periode semester ini."</p>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm">
                    <h3 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        Identitas Akademik
                    </h3>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm">
                        <div class="md:col-span-2">
                            <label class="block text-gray-500 mb-1.5">Nama Lengkap & Gelar</label>
                            <input type="text" value="Budi Santoso, M.T." class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">NIDN</label>
                            <input type="text" value="0412038xxx" disabled class="w-full px-4 py-2.5 rounded-xl border border-gray-100 bg-gray-50 text-gray-400 cursor-not-allowed">
                        </div>
                        <div>
                            <label class="block text-gray-500 mb-1.5">Jabatan Fungsional</label>
                            <select class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-500 outline-none transition bg-white">
                                <option>Asisten Ahli</option>
                                <option selected>Lektor</option>
                                <option>Lektor Kepala</option>
                                <option>Guru Besar</option>
                            </select>
                        </div>
                        <div class="md:col-span-2 pt-2">
                            <button type="submit" class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-blue-700 transition text-sm">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm">
                    <h3 class="text-md font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                        Ganti Password
                    </h3>
                    <form class="space-y-4 text-sm">
                        <div>
                            <label class="block text-gray-500 mb-1.5">Password Lama</label>
                            <input type="password" placeholder="••••••••" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-500 outline-none transition">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-500 mb-1.5">Password Baru</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-500 outline-none transition">
                            </div>
                            <div>
                                <label class="block text-gray-500 mb-1.5">Konfirmasi Password Baru</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-500 outline-none transition">
                            </div>
                        </div>
                        <div class="pt-2 text-right">
                            <button type="submit" class="text-blue-600 font-bold hover:underline">Update Password</button>
                        </div>
                    </form>
                </div>

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