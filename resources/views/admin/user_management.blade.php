<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengguna | Admin E-Filling</title>
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
            <a href="{{ route('admin/dashboard') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
                <div class="p-1 border rounded-md bg-white">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-800">Dasbor</span>
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
            <a href="{{ route('admin/profil') }}" class="flex items-center gap-4 p-3 rounded-lg hover:bg-gray-100 transition group">
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
        <header class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Manajemen Pengguna</h1>
                <p class="text-slate-500 text-sm">Kelola akses akun dosen dan staf administrasi.</p>
            </div>
            <button onclick="openModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl font-bold text-sm transition flex items-center gap-2 shadow-lg shadow-blue-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Tambah User Baru
            </button>
        </header>

        <div class="grid grid-cols-3 gap-6 mb-8 text-center">
            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Total User</p>
                <p class="text-2xl font-bold text-gray-800">452</p>
            </div>
            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">User Aktif</p>
                <p class="text-2xl font-bold text-green-500">448</p>
            </div>
            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest">Akun Ditangguhkan</p>
                <p class="text-2xl font-bold text-red-500">4</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-50 flex justify-between items-center bg-gray-50/30">
                <h3 class="font-bold text-slate-700">Daftar Pengguna Sistem</h3>
                <div class="relative">
                    <input type="text" placeholder="Cari nama atau NIDN..." class="pl-10 pr-4 py-2 border rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none w-72 transition">
                    <svg class="w-4 h-4 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>
            <table class="w-full text-left">
                <thead>
                    <tr class="text-[11px] font-bold text-gray-400 uppercase tracking-widest border-b border-gray-50">
                        <th class="px-6 py-4">User / Dosen</th>
                        <th class="px-6 py-4">Role</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">BS</div>
                                <div>
                                    <div class="font-bold text-slate-700 text-sm">Budi Santoso, M.T.</div>
                                    <div class="text-[11px] text-slate-400 italic font-mono">budi.santoso@univ.ac.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-lg bg-blue-50 text-blue-600 text-[10px] font-bold uppercase">Dosen Tetap</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-green-500 font-bold text-[10px] flex items-center justify-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> AKTIF
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-3">
                                <button onclick="openRoleModal('Budi Santoso, M.T.','Dosen Tetap')" class="text-gray-400 hover:text-blue-600 transition" title="Ubah Peran">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <button onclick="openSuspendModal('Budi Santoso, M.T.')" class="text-gray-400 hover:text-red-600 transition" title="Suspend Akun">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-xs">SA</div>
                                <div>
                                    <div class="font-bold text-slate-700 text-sm">Siti Aminah, M.Kom.</div>
                                    <div class="text-[11px] text-slate-400 italic font-mono">siti.aminah@univ.ac.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-lg bg-purple-50 text-purple-600 text-[10px] font-bold uppercase">Admin Fakultas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-green-500 font-bold text-[10px] flex items-center justify-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> AKTIF
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-3">
                                <button onclick="openRoleModal('Siti Aminah, M.Kom.','Admin Fakultas')" class="text-gray-400 hover:text-blue-600 transition" title="Ubah Peran">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <button onclick="openSuspendModal('Siti Aminah, M.Kom.')" class="text-gray-400 hover:text-red-600 transition" title="Suspend Akun">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center font-bold text-xs">K</div>
                                <div>
                                    <div class="font-bold text-slate-700 text-sm">Kurniawan, S.T</div>
                                    <div class="text-[11px] text-slate-400 italic font-mono">kurniawan@univ.ac.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-lg bg-cyan-50 text-cyan-600 text-[10px] font-bold uppercase">Admin E-Filling</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-green-500 font-bold text-[10px] flex items-center justify-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> AKTIF
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-3">
                                <button onclick="openRoleModal('Kurniawan, S.T','Admin E-Filling')" class="text-gray-400 hover:text-blue-600 transition" title="Ubah Peran">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <button onclick="openSuspendModal('Kurniawan, S.T')" class="text-gray-400 hover:text-red-600 transition" title="Suspend Akun">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-xs">RA</div>
                                <div>
                                    <div class="font-bold text-slate-700 text-sm">Rina Agustina, S.Si</div>
                                    <div class="text-[11px] text-slate-400 italic font-mono">rina.agustina@univ.ac.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-lg bg-cyan-50 text-cyan-600 text-[10px] font-bold uppercase">Reviewer</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-green-500 font-bold text-[10px] flex items-center justify-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> AKTIF
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-3">
                                <button onclick="openRoleModal('Rina Agustina, S.Si','Reviewer')" class="text-gray-400 hover:text-blue-600 transition" title="Ubah Peran">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                                <button onclick="openSuspendModal('Rina Agustina, S.Si')" class="text-gray-400 hover:text-red-600 transition" title="Suspend Akun">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    <div id="userModal" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    
        <div class="bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden transform transition-all">
            <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                <div>
                    <h3 class="text-xl font-bold text-slate-800">Tambah User Baru</h3>
                    <p class="text-xs text-slate-500">Daftarkan akun dosen atau admin ke dalam sistem.</p>
                </div>
                <button onclick="closeModal()" class="text-gray-400 hover:text-slate-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <form action="#" method="POST" class="p-8 space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap & Gelar</label>
                    <input type="text" placeholder="Contoh: Dr. Budi Santoso, M.T." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">NIDN / NIP</label>
                        <input type="text" placeholder="041208xxxx" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Role Akses</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition text-sm bg-white">
                            <option>Dosen Tetap</option>
                            <option>Dosen LB</option>
                            <option>Admin Fakultas</option>
                            <option>Admin Universitas</option>
                            <option>Admin E-Filling</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Institusi</label>
                    <input type="email" placeholder="nama@univ.ac.id" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Password Default</label>
                    <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">
                    <p class="text-[10px] text-gray-400 mt-1 italic">*User diwajibkan mengganti password saat login pertama kali.</p>
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="button" onclick="closeModal()" class="flex-1 py-3 rounded-xl text-sm font-bold text-gray-500 hover:bg-gray-100 transition">
                        Batalkan
                    </button>
                    <button type="submit" class="flex-1 py-3 bg-blue-600 text-white rounded-xl text-sm font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition">
                        Simpan User
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="roleModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeRoleModal()"></div>
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white w-full max-w-md rounded-4xl shadow-2xl p-8 animate-in zoom-in duration-200">
                <h3 class="text-xl font-bold text-slate-800 mb-2">Ubah Peran Pengguna</h3>
                <p class="text-sm text-slate-500 mb-6">Mengubah peran <span id="roleTargetName" class="font-bold text-slate-700"></span> akan menyesuaikan hak akses dashboard mereka.</p>
                
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Pilih Peran Baru</label>
                        <select class="w-full px-4 py-3 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition font-medium text-slate-700">
                            <option>Dosen Tetap</option>
                            <option>Dosen LB</option>
                            <option>Admin Fakultas</option>
                            <option>Admin Universitas</option>
                            <option>Admin E-Filling</option>
                        </select>
                    </div>
                    <div class="pt-4 flex gap-3">
                        <button type="button" onclick="closeRoleModal()" class="flex-1 py-3 text-sm font-bold text-slate-400 hover:bg-gray-50 rounded-2xl transition">Batal</button>
                        <button type="submit" class="flex-1 py-3 bg-blue-600 text-white rounded-2xl text-sm font-bold shadow-lg shadow-blue-100 hover:bg-blue-700 transition">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="suspendModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeSuspendModal()"></div>
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white w-full max-w-md rounded-4xl shadow-2xl p-8 text-center animate-in zoom-in duration-200 border-t-8 border-rose-500">
                <div class="w-16 h-16 bg-rose-100 text-rose-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Suspend Akun?</h3>
                <p class="text-sm text-slate-500 mb-8">Anda akan menangguhkan akses untuk <span id="suspendTargetName" class="font-bold text-slate-800"></span>. Pengguna ini tidak akan bisa login sampai status dikembalikan.</p>
                
                <div class="flex flex-col gap-2">
                    <button type="submit" class="w-full py-3 bg-rose-600 text-white rounded-2xl text-sm font-bold shadow-lg shadow-rose-100 hover:bg-rose-700 transition">Ya, Suspend Pengguna</button>
                    <button type="button" onclick="closeSuspendModal()" class="w-full py-3 text-sm font-bold text-slate-400 hover:bg-gray-50 rounded-2xl transition">Batalkan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;

        //modal
        function openModal() {
            document.getElementById('userModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scrolling saat modal buka
        }

        function closeModal() {
            document.getElementById('userModal').classList.add('hidden');
            document.body.style.overflow = 'auto'; // Mengembalikan scrolling
        }

        // Menutup modal jika user klik di luar area form
        window.onclick = function(event) {
            let modal = document.getElementById('userModal');
            if (event.target == modal) {
                closeModal();
            }
        }

        function openRoleModal(name, currentRole) {
            document.getElementById('roleTargetName').innerText = name;
            document.getElementById('roleModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeRoleModal() {
            document.getElementById('roleModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openSuspendModal(name) {
            document.getElementById('suspendTargetName').innerText = name;
            document.getElementById('suspendModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeSuspendModal() {
            document.getElementById('suspendModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

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