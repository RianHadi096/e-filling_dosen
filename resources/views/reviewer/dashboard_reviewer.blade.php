<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor Reviewer | E-Filling</title>
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
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Selamat Datang, Prof. Sumitro</h1>
                <p class="text-slate-500 text-sm italic">"Ada <span class="font-bold text-blue-600">12 dokumen baru</span> yang menunggu tinjauan Anda."</p>
            </div>
        </header>

        <div class="grid grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-6 rounded-[24px] border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Antrean</p>
                <p class="text-2xl font-bold text-slate-800">12</p>
            </div>
            <div class="bg-white p-6 rounded-[24px] border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Selesai</p>
                <p class="text-2xl font-bold text-slate-800">148</p>
            </div>
            <div class="bg-white p-6 rounded-[24px] border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Butuh Revisi</p>
                <p class="text-2xl font-bold text-slate-800">3</p>
            </div>
            <div class="bg-blue-600 p-6 rounded-[24px] shadow-lg shadow-blue-100">
                <div class="w-10 h-10 bg-white/20 text-white rounded-xl flex items-center justify-center mb-4 border border-white/30">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <p class="text-xs font-bold text-white/70 uppercase tracking-widest">Total KUM Prodi</p>
                <p class="text-2xl font-bold text-white">1,240.5</p>
            </div>
        </div>

        <div class="bg-white rounded-[32px] border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-8 border-b border-gray-50 flex justify-between items-center">
                <h3 class="text-lg font-bold text-slate-800">Antrean Tinjauan Terbaru</h3>
                <div class="flex gap-2">
                    <button class="p-2 border rounded-lg hover:bg-gray-50 transition"><svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg></button>
                    <input type="text" placeholder="Cari dosen..." class="text-sm px-4 py-2 border rounded-xl outline-none focus:ring-2 focus:ring-blue-500 w-64 transition">
                </div>
            </div>
            <table class="w-full text-left">
                <thead class="bg-slate-50 text-[11px] font-bold text-slate-400 uppercase tracking-widest">
                    <tr>
                        <th class="px-8 py-4">Dosen</th>
                        <th class="px-8 py-4">Dokumen</th>
                        <th class="px-8 py-4">Kategori</th>
                        <th class="px-8 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="px-8 py-5">
                            <div class="font-bold text-slate-700 text-sm">Dr. Ahmad Faisal</div>
                            <div class="text-[10px] text-slate-400">Teknik Informatika</div>
                        </td>
                        <td class="px-8 py-5">
                            <div class="font-semibold text-slate-600 text-sm">Optimasi Algoritma C4.5</div>
                            <div class="text-[10px] text-blue-500 font-bold mt-1 uppercase italic">Jurnal Internasional</div>
                        </td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-lg text-[10px] font-extrabold uppercase tracking-tighter">Penelitian</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button onclick="openReviewModal('Dr. Ahmad Faisal', 'Optimasi Algoritma C4.5', '40.0')" class="bg-white border border-blue-600 text-blue-600 px-5 py-2 rounded-xl text-xs font-bold hover:bg-blue-600 hover:text-white transition shadow-sm">
                                Tinjau
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition group">
                        <td class="px-8 py-5">
                            <div class="font-bold text-slate-700 text-sm">Siti Aminah, M.Kom</div>
                            <div class="text-[10px] text-slate-400">Sistem Informasi</div>
                        </td>
                        <td class="px-8 py-5">
                            <div class="font-semibold text-slate-600 text-sm">Sertifikat Oracle Cloud</div>
                            <div class="text-[10px] text-blue-500 font-bold mt-1 uppercase italic">Sertifikasi Industri</div>
                        </td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-orange-50 text-orange-600 rounded-lg text-[10px] font-extrabold uppercase tracking-tighter">Penunjang</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button onclick="openReviewModal('Siti Aminah, M.Kom', 'Sertifikat Oracle Cloud', '20.0')" class="bg-white border border-blue-600 text-blue-600 px-5 py-2 rounded-xl text-xs font-bold hover:bg-blue-600 hover:text-white transition shadow-sm">
                                Tinjau
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="p-6 bg-slate-50/50 border-t border-gray-50 text-center">
                <a href="#" class="text-xs font-bold text-blue-600 hover:underline tracking-widest uppercase italic">Lihat Semua Antrean</a>
            </div>
        </div>
    </main>

    <div id="quickReviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeReviewModal()"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white w-full max-w-2xl rounded-[32px] shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-200">
                
                <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold text-slate-800">Tinjauan Cepat Berkas</h3>
                        <p class="text-[11px] text-slate-400 font-bold uppercase tracking-wider mt-1">Antrean Prioritas Prodi</p>
                    </div>
                    <button onclick="closeReviewModal()" class="text-slate-400 hover:text-slate-600 transition p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <form action="#" class="p-8">
                    <div class="mb-8 p-4 bg-blue-50 rounded-2xl border border-blue-100 flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-blue-600 shadow-sm font-bold">
                            PDF
                        </div>
                        <div>
                            <p class="text-xs text-blue-400 font-bold uppercase leading-none">Dokumen</p>
                            <h4 id="modalDocTitle" class="text-sm font-bold text-slate-700">Optimasi Algoritma C4.5</h4>
                            <p id="modalLecturerName" class="text-[10px] text-slate-500 font-medium mt-0.5 italic">Dr. Ahmad Faisal</p>
                        </div>
                        <button type="button" class="ml-auto bg-blue-600 text-white px-4 py-2 rounded-lg text-[10px] font-bold hover:bg-blue-700 transition">
                            Buka File
                        </button>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="col-span-2 md:col-span-1">
                            <label class="block text-xs font-bold text-slate-500 uppercase mb-2 tracking-widest">Rekomendasi KUM</label>
                            <div class="relative">
                                <input type="number" id="modalKumTarget" step="0.1" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition font-bold text-slate-700" placeholder="0.0">
                                <span class="absolute right-4 top-3.5 text-[10px] font-bold text-slate-300">MAX</span>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-1">
                            <label class="block text-xs font-bold text-slate-500 uppercase mb-2 tracking-widest">Keputusan Akhir</label>
                            <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none bg-white transition text-sm font-semibold text-slate-700">
                                <option value="approve">Layak / Setujui</option>
                                <option value="revision">Perlu Revisi</option>
                                <option value="reject">Tolak Berkas</option>
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs font-bold text-slate-500 uppercase mb-2 tracking-widest">Catatan Reviewer (Opsional)</label>
                            <textarea rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition text-sm" placeholder="Tuliskan alasan penilaian atau saran perbaikan..."></textarea>
                        </div>
                    </div>

                    <div class="mt-8 flex gap-3">
                        <button type="button" onclick="closeReviewModal()" class="flex-1 py-3 text-sm font-bold text-slate-400 hover:bg-gray-50 rounded-xl transition">Batal</button>
                        <button type="submit" class="flex-1 py-3 bg-blue-600 text-white rounded-xl text-sm font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition">Simpan & Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;


        function openReviewModal(name, doc, kum) {
            document.getElementById('modalLecturerName').innerText = "Dosen: " + name;
            document.getElementById('modalDocTitle').innerText = doc;
            document.getElementById('modalKumTarget').value = kum;
            document.getElementById('quickReviewModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeReviewModal() {
            document.getElementById('quickReviewModal').classList.add('hidden');
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