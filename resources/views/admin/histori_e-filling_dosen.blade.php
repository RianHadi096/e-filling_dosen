<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori E-Filling Dosen | Admin E-Filling</title>
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

    <main class="flex-1 p-8">
        
        <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
            <h3 class="text-gray-700 font-medium mb-6">Histori E-Filling Dosen</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Dosen
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Bulan
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tahun
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                Dr. Ahmad Faisal, M.Kom
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Oktober
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Selesai
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:underline cursor-pointer">
                                <button onclick="openDetailModal()">Lihat Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
    </main>


    <div id="detailModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeDetailModal()"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white w-full max-w-4xl rounded-4xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
                
                <div class="flex-1 p-8 md:p-10 overflow-y-auto max-h-[85vh]">
                    <div class="mb-8">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Detail Arsip E-Filling</span>
                        <h2 class="text-2xl font-bold text-slate-800 mt-3" id="detJudul">Analisis Keamanan Jaringan IoT</h2>
                    </div>

                    <div class="grid grid-cols-2 gap-y-6 gap-x-8">
                        <div class="col-span-2 bg-gray-50 p-5 rounded-2xl flex items-center gap-4 border border-gray-100">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm">
                                <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase">Dosen Pengirim</p>
                                <p class="text-sm font-bold text-slate-700">Dr. Ahmad Faisal, M.Kom</p>
                                <p class="text-[11px] text-gray-500 italic">NIDN: 041208xxxx • Prodi Teknik Informatika</p>
                            </div>
                        </div>

                        <div>
                            <p class="text-[11px] text-gray-400 font-bold uppercase mb-1">Kategori Tridarma</p>
                            <p class="text-sm font-semibold text-slate-700">Penelitian (Jurnal Internasional)</p>
                        </div>
                        <div>
                            <p class="text-[11px] text-gray-400 font-bold uppercase mb-1">Tanggal Terbit</p>
                            <p class="text-sm font-semibold text-slate-700">12 Oktober 2025</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-[11px] text-gray-400 font-bold uppercase mb-1">Keterangan Tambahan</p>
                            <p class="text-sm text-slate-600 leading-relaxed">Penelitian ini didanai oleh Hibah Internal Universitas tahun anggaran 2025/2026. Fokus pada optimasi keamanan layer transport.</p>
                        </div>

                        <div class="col-span-2">
                            <p class="text-[11px] text-gray-400 font-bold uppercase mb-3">Lampiran Berkas</p>
                            <div class="flex items-center justify-between p-4 border border-blue-100 rounded-2xl bg-blue-50/30 group hover:bg-blue-50 transition cursor-pointer">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 bg-white rounded-lg text-red-500 shadow-sm">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A1 1 0 0111 2.414l4.586 4.586V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-700">jurnal_publikasi_final.pdf</p>
                                        <p class="text-[10px] text-gray-400 uppercase">Berkas PDF • 2.4 MB</p>
                                    </div>
                                </div>
                                <button class="text-blue-600 font-bold text-xs group-hover:underline">Buka Berkas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[320px] bg-slate-50 border-l border-gray-100 p-8 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-6">Alur Verifikasi</h4>
                        
                        <div class="space-y-6 relative before:absolute before:inset-0 before:left-2 before:border-l-2 before:border-dashed before:border-gray-200">
                            <div class="relative pl-8">
                                <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-green-500 border-4 border-white shadow-sm"></div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase">Diupload</p>
                                <p class="text-xs font-bold text-slate-700">12 Jan 2026</p>
                            </div>
                            <div class="relative pl-8">
                                <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-blue-500 border-4 border-white shadow-sm"></div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase">Review Selesai</p>
                                <p class="text-xs font-bold text-slate-700">13 Jan 2026</p>
                                <div class="mt-2 bg-blue-100 text-blue-700 p-3 rounded-xl">
                                    <p class="text-[10px] font-bold uppercase italic opacity-70">Hasil KUM:</p>
                                    <p class="text-lg font-black italic">40.00</p>
                                    <p class="text-[10px] mt-1 leading-tight">"Substansi sesuai, data valid."</p>
                                </div>
                            </div>
                            <div class="relative pl-8">
                                <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-gray-300 border-4 border-white shadow-sm"></div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase">Finalisasi Admin</p>
                                <p class="text-xs font-medium text-gray-400 italic">Menunggu konfirmasi Anda...</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 space-y-3">
                        <button class="w-full py-3 bg-slate-800 text-white rounded-xl text-sm font-bold shadow-lg shadow-slate-200 hover:bg-slate-900 transition">Konfirmasi Final</button>
                        <button onclick="closeDetailModal()" class="w-full py-3 bg-white text-slate-400 rounded-xl text-sm font-bold border border-gray-100 hover:bg-gray-50 transition">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;

        //modal detail
        function openDetailModal(judul) {
            document.getElementById('detJudul').innerText = judul;
            document.getElementById('detailModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeDetailModal() {
            document.getElementById('detailModal').classList.add('hidden');
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
