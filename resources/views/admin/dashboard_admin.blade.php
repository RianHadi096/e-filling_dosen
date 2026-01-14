<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor E-Filling Dosen | Admin E-Filling</title>
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

    <main class="flex-1 p-10">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-2xl font-bold text-slate-800">Ringkasan Aktivitas</h2>
            <div class="flex items-center gap-4">
                <span class="text-sm text-slate-500 italic">Terakhir diperbarui: {{ now()->format('d M Y') }}</span>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <p class="text-slate-400 text-xs font-bold uppercase mb-2">Total Submisi</p>
                <p class="text-3xl font-black text-slate-800">1,240</p>
                <div class="mt-2 text-[11px] text-green-500 font-bold"></div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <p class="text-slate-400 text-xs font-bold uppercase mb-2">Perlu Review</p>
                <p class="text-3xl font-black text-amber-500">84</p>
                <div class="mt-2 text-[11px] text-slate-400 font-medium italic">Segera verifikasi</div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <p class="text-slate-400 text-xs font-bold uppercase mb-2">Dosen Aktif</p>
                <p class="text-3xl font-black text-slate-800">412</p>
                <div class="mt-2 text-[11px] text-blue-500 font-medium"></div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <p class="text-slate-400 text-xs font-bold uppercase mb-2">Ditolak</p>
                <p class="text-3xl font-black text-rose-500">12</p>
                <div class="mt-2 text-[11px] text-rose-400 font-medium italic">Butuh tindak lanjut</div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200">
            <div class="p-6 border-b border-slate-50 flex justify-between items-center bg-slate-50/50 rounded-t-3xl">
                <h3 class="font-bold text-slate-700">Antrean Verifikasi Dokumen</h3>
                <div class="flex gap-2">
                    <input type="text" placeholder="Cari NIDN..." class="text-xs px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                    <button class="bg-slate-800 text-white px-4 py-2 rounded-xl text-xs font-bold">Filter</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-[10px] text-slate-400 uppercase tracking-widest border-b border-slate-50">
                            <th class="px-8 py-5">Nama Dosen</th>
                            <th class="px-8 py-5">Jenis Dokumen</th>
                            <th class="px-8 py-5">Berkas</th>
                            <th class="px-8 py-5 text-center">Status</th>
                            <th class="px-8 py-5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-8 py-5">
                                <div class="font-bold text-slate-700">Dr. Ir. Heru Prasetyo</div>
                                <div class="text-[11px] text-slate-400">Teknik Elektro | NIDN: 041122xxx</div>
                            </td>
                            <td class="px-8 py-5 text-sm text-slate-600">Jurnal Internasional Q1</td>
                            <td class="px-8 py-5">
                                <button onclick="openReviewPdfModal()" class="text-blue-600 font-bold text-sm hover:underline">Pratinjau berkas</button>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex justify-center">
                                    <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-black uppercase italic">Menunggu</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-center">
                                <div class="flex justify-center gap-2">
                                    <button class="bg-green-100 text-green-700 p-2 rounded-lg hover:bg-green-200 transition" title="Terima">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                                    </button>
                                    <button class="bg-rose-100 text-rose-700 p-2 rounded-lg hover:bg-rose-200 transition" title="Tolak">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    

    <!--modal review pdf-->
    <div id="reviewPdfModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-md transition-opacity"></div>

        <div class="flex min-h-full items-center justify-center p-6">
            <div class="relative w-full max-w-7xl h-[90vh] rounded-3xl bg-white shadow-2xl flex flex-col overflow-hidden">
                
                <div class="flex items-center justify-between px-8 py-5 border-b border-gray-100 bg-white">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-red-50 text-red-600 rounded-2xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 leading-tight">Jurnal_AI_Optimation.pdf</h3>
                            <p class="text-xs text-slate-500 font-medium">Pengirim: Dr. Ir. Heru Prasetyo • <span class="text-blue-600 uppercase font-bold tracking-tighter">Penelitian</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="px-4 py-2 border border-gray-200 rounded-xl text-xs font-bold text-slate-600 hover:bg-gray-50 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Unduh Berkas Asli
                        </button>
                        <button onclick="closeReviewPdfModal()" class="p-2 text-slate-400 hover:text-slate-600">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="flex-1 flex overflow-hidden">
                    <div class="flex-1 bg-slate-200 p-6 overflow-y-auto">
                        <div class="w-full h-full bg-white rounded-xl shadow-lg border border-slate-300 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-20 h-20 text-slate-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A1 1 0 0111 2.414l4.586 4.586V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                                <p class="text-slate-400 font-bold uppercase tracking-widest text-sm">PDF Viewer Active</p>
                                <p class="text-xs text-slate-400 mt-1 italic">Di sistem nyata, tampilkan PDF menggunakan &lt;iframe&gt;</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-96 border-l border-gray-100 p-8 overflow-y-auto bg-gray-50/50">
                        <div class="space-y-8">
                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4 italic">Hasil Penilaian Reviewer</h4>
                                <div class="bg-blue-600 p-5 rounded-2xl text-white shadow-lg shadow-blue-100">
                                    <p class="text-[10px] opacity-80 uppercase font-bold mb-1">Total KUM Rekomendasi</p>
                                    <p class="text-3xl font-black">40.00</p>
                                    <hr class="my-3 opacity-20">
                                    <p class="text-[10px] opacity-80 font-bold mb-1 italic">Catatan Reviewer:</p>
                                    <p class="text-xs font-medium leading-relaxed">"Metodologi sangat kuat, jurnal terindeks Scopus Q1. Layak diproses untuk kenaikan jabatan."</p>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Finalisasi Admin</h4>
                                <div class="space-y-4 text-sm">
                                    <div>
                                        <label class="block font-bold text-slate-700 mb-2">Konfirmasi Status Akhir</label>
                                        <select class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                                            <option value="verified">Validasi (Sesuai Review)</option>
                                            <option value="rejected">Tolak (Perlu Perbaikan)</option>
                                            <option value="re-review">Kembalikan ke Reviewer</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block font-bold text-slate-700 mb-2">Pesan ke Dosen (Opsional)</label>
                                        <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Tuliskan pesan jika ada revisi..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-8 py-5 border-t border-gray-100 flex justify-end gap-3 bg-white">
                    <button onclick="closeReviewPdfModal()" class="px-6 py-2.5 rounded-xl text-sm font-bold text-slate-500 hover:bg-gray-100 transition">Simpan Draft</button>
                    <button class="px-8 py-2.5 bg-slate-800 text-white rounded-xl text-sm font-bold shadow-lg shadow-slate-200 hover:bg-slate-900 transition">Konfirmasi & Kunci Data</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;

        //modal
        function openPreviewModal(title, category, date) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalSubTitle').innerText = `Kategori: ${category.toUpperCase()} • Diunggah pada ${date}`;
            document.getElementById('previewModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closePreviewModal() {
            document.getElementById('previewModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        function openReviewPdfModal() {
            document.getElementById('reviewPdfModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeReviewPdfModal() {
            document.getElementById('reviewPdfModal').classList.add('hidden');
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