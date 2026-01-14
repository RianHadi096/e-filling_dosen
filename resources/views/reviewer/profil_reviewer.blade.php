<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Reviewer | E-Filling</title>
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
</head>
<body class="bg-gray-50 flex min-h-screen">

    <aside class="w-64 border-r bg-white flex flex-col py-6 shadow-sm relative" id="sidebar">
        
        <nav class="flex-1 px-4 space-y-4">
            <a href="{{ route('reviewer/dashboard') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Dasbor</span>
            </a>

            <a href="{{ route('reviewer/histori_review') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Histori Tinjauan</span>
            </a>

            <a href="{{ route('reviewer/review_dokumen') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Tinjauan Dokumen</span>
            </a>
            
        </nav>
        <div class="px-4 border-t pt-4">

            <a href="{{ route('reviewer/profil') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
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
        <header class="mb-10">
            <h1 class="text-2xl font-bold text-slate-800">Profil Pengguna</h1>
            <p class="text-slate-500 text-sm">Kelola informasi identitas dan keahlian peninjauan Anda.</p>
        </header>

        <div class="max-w-6xl mx-auto grid grid-cols-12 gap-8">
            
            <div class="col-span-12 lg:col-span-4 space-y-6">
                <div class="bg-white rounded-[32px] border border-gray-100 shadow-sm p-8 text-center">
                    <div class="relative inline-block mb-6">
                        <img src="https://ui-avatars.com/api/?name=Prof+Sumitro&background=0D8ABC&color=fff&size=128" 
                             class="w-32 h-32 rounded-full border-4 border-blue-50 shadow-md object-cover" alt="Reviewer">
                        <div class="absolute bottom-0 right-0 bg-green-500 w-6 h-6 border-4 border-white rounded-full" title="Status: Aktif"></div>
                    </div>
                    <h2 class="text-xl font-bold text-slate-800">Prof. Dr. Sumitro, M.Sc</h2>
                    <p class="text-xs font-bold text-blue-600 uppercase tracking-widest mt-1">Reviewer Utama Prodi</p>
                    
                    <div class="mt-8 grid grid-cols-2 gap-4 border-t border-gray-50 pt-8">
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Total Review</p>
                            <p class="text-lg font-bold text-slate-800">154</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Kepuasan</p>
                            <p class="text-lg font-bold text-slate-800">4.9/5</p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-900 rounded-[32px] p-8 text-white shadow-xl">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4 italic">Bidang Kepakaran</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-white/10 px-3 py-1 rounded-lg text-[10px] font-bold border border-white/20">Cyber Security</span>
                        <span class="bg-white/10 px-3 py-1 rounded-lg text-[10px] font-bold border border-white/20">Machine Learning</span>
                        <span class="bg-white/10 px-3 py-1 rounded-lg text-[10px] font-bold border border-white/20">Software Quality Assurance</span>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-8 space-y-6">
                
                <div class="bg-white rounded-[32px] border border-gray-100 shadow-sm p-8">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Informasi Identitas
                    </h3>
                    <form class="grid grid-cols-2 gap-6">
                        <div class="col-span-2 md:col-span-1">
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Nama Lengkap & Gelar</label>
                            <input type="text" value="Prof. Dr. Sumitro, M.Sc" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm font-medium transition">
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">NIP / NIDN</label>
                            <input type="text" value="19780512XXXXXXXX" disabled class="w-full px-4 py-3 rounded-xl border border-gray-100 bg-gray-50 text-slate-400 text-sm font-medium cursor-not-allowed">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-xs font-bold text-slate-400 uppercase mb-2">Email Institusi</label>
                            <input type="email" value="sumitro@univ.ac.id" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm font-medium transition">
                        </div>
                        <div class="col-span-2 pt-2">
                            <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl text-sm font-bold shadow-lg shadow-blue-100 hover:bg-blue-700 transition">Update Profil</button>
                        </div>
                    </form>
                </div>

                <div class="bg-white rounded-[32px] border border-gray-100 shadow-sm p-8">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        Autentikasi & Keamanan
                    </h3>
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