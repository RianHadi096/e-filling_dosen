<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peninjauan Dokumen | E-Filling</title>
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
        
        <header class="mb-8">
            <div class="flex justify-between items-end mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">Tinjauan Dokumen</h1>
                    <p class="text-slate-500 text-sm italic">Program Studi: <span class="font-bold text-blue-600">Teknik Informatika</span></p>
                </div>
                <div class="flex gap-2">
                    <button class="bg-blue-600 text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-lg shadow-blue-100 hover:bg-blue-700 transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        Review Masal
                    </button>
                </div>
            </div>

            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex bg-gray-100 p-1 rounded-xl w-full md:w-auto">
                    <button class="flex-1 md:flex-none px-6 py-2 rounded-lg text-xs font-bold bg-white text-blue-600 shadow-sm">Perlu Ditinjau (12)</button>
                    <button class="flex-1 md:flex-none px-6 py-2 rounded-lg text-xs font-bold text-slate-500 hover:text-slate-700 transition">Dalam Proses (3)</button>
                    <button class="flex-1 md:flex-none px-6 py-2 rounded-lg text-xs font-bold text-slate-500 hover:text-slate-700 transition">Selesai (148)</button>
                </div>
                <div class="relative w-full md:w-72">
                    <svg class="w-4 h-4 absolute left-3 top-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Cari nama dosen atau dokumen..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-100 bg-gray-50 text-xs focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>
            </div>
        </header>

        <div class="bg-white rounded-4xl border border-gray-200 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-slate-50 border-b border-gray-100">
                    <tr class="text-[10px] font-extrabold text-slate-400 uppercase tracking-[0.2em]">
                        <th class="px-8 py-5">Info Dosen</th>
                        <th class="px-8 py-5">Judul & Berkas</th>
                        <th class="px-8 py-5">Tridarma</th>
                        <th class="px-8 py-5">Tgl Masuk</th>
                        <th class="px-8 py-5 text-right">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-blue-50/30 transition group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-xs">AF</div>
                                <div>
                                    <p class="text-sm font-bold text-slate-700 leading-tight">Dr. Ahmad Faisal</p>
                                    <p class="text-[10px] text-slate-400 mt-0.5">NIDN: 041208xxxx</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="max-w-xs">
                                <p class="text-sm font-semibold text-slate-700 truncate" title="Analisis Keamanan Jaringan IoT Berbasis Protokol MQTT">Analisis Keamanan Jaringan IoT Berbasis Protokol MQTT</p>
                                <button onclick="openPreviewPDFModal('Analisis Keamanan Jaringan IoT Berbasis Protokol MQTT', 'Penelitian', '14 Jan 2026')" class="text-[10px] font-bold text-blue-600 mt-1 flex items-center gap-1 hover:underline">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    Pratinjau PDF
                                </button>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-2.5 py-1 bg-purple-50 text-purple-600 rounded-lg text-[10px] font-black uppercase tracking-tighter border border-purple-100">Penelitian</span>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-xs font-bold text-slate-600">14 Jan 2026</p>
                            <p class="text-[10px] text-slate-400">15:30 WIB</p>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <button onclick="openReviewModal('Dr. Ahmad Faisal')" class="bg-slate-800 text-white px-5 py-2 rounded-xl text-xs font-bold hover:bg-blue-600 transition shadow-md shadow-slate-100">
                                Tinjau
                            </button>
                        </td>
                    </tr>

                    <tr class="hover:bg-blue-50/30 transition group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold text-xs">SA</div>
                                <div>
                                    <p class="text-sm font-bold text-slate-700 leading-tight">Siti Aminah, M.Kom</p>
                                    <p class="text-[10px] text-slate-400 mt-0.5">NIDN: 041502xxxx</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="max-w-xs">
                                <p class="text-sm font-semibold text-slate-700 truncate">Modul Praktikum Pemrograman Web</p>
                                <button onclick="openPreviewPDFModal('Modul Praktikum Pemrograman Web', 'Pendidikan', '12 Jan 2026')" class="text-[10px] font-bold text-blue-600 mt-1 flex items-center gap-1 hover:underline">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    Pratinjau PDF
                                </button>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-2.5 py-1 bg-blue-50 text-blue-600 rounded-lg text-[10px] font-black uppercase tracking-tighter border border-blue-100">Pendidikan</span>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-xs font-bold text-slate-600">12 Jan 2026</p>
                            <p class="text-[10px] text-slate-400">09:12 WIB</p>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <button onclick="openReviewModal('Siti Aminah, M.Kom')" class="bg-slate-800 text-white px-5 py-2 rounded-xl text-xs font-bold hover:bg-blue-600 transition shadow-md shadow-slate-100">
                                Tinjau
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="p-6 bg-slate-50/50 flex justify-between items-center">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Halaman 1 dari 4</p>
                <div class="flex gap-2">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-400 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white font-bold text-xs shadow-md shadow-blue-100">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-600 font-bold text-xs hover:bg-gray-50 transition">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-slate-400 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Review Modal -->
    <div id="reviewModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeReviewModal()"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white w-full max-w-3xl rounded-4xl shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-200">
                
                <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <div>
                        <h3 class="text-xl font-bold text-slate-800">Form Penilaian Berkas</h3>
                        <p class="text-xs text-slate-500 mt-1">Dosen: <span id="reviewerDosenName" class="font-bold text-blue-600">---</span></p>
                    </div>
                    <button onclick="closeReviewModal()" class="text-slate-400 hover:text-slate-600 p-2 rounded-full hover:bg-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <form action="#" method="POST" class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Dokumen Terlampir</label>
                                <div class="group relative flex items-center p-4 bg-slate-50 border border-slate-200 rounded-2xl hover:border-blue-300 transition-all">
                                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-red-500 shadow-sm border border-gray-100">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A1 1 0 0111 2.414l4.586 4.586V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                                    </div>
                                    <div class="ml-3 overflow-hidden">
                                        <p class="text-xs font-bold text-slate-700 truncate">jurnal_publikasi_2026.pdf</p>
                                        <p class="text-[10px] text-blue-600 font-medium">Klik untuk buka pratinjau</p>
                                    </div>
                                    <a href="#" target="_blank" class="absolute inset-0"></a>
                                </div>
                            </div>

                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Pesan dari Dosen</label>
                                <div class="p-4 bg-blue-50/50 rounded-2xl border border-blue-100/50 text-xs text-slate-600 leading-relaxed italic">
                                    "Mohon tinjauan untuk pengajuan angka kredit jabatan Lektor. Dokumen sudah disesuaikan dengan standar Scopus."
                                </div>
                            </div>
                        </div>

                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Nilai Angka Kredit (KUM)</label>
                                <div class="relative">
                                    <input type="number" step="0.1" placeholder="0.00" class="w-full pl-4 pr-12 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition font-bold text-lg text-blue-600">
                                    <span class="absolute right-4 top-3.5 text-xs font-bold text-slate-400 uppercase">Pts</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Hasil Keputusan</label>
                                <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none bg-white transition text-sm">
                                    <option value="approve">Setujui (Sesuai Kriteria)</option>
                                    <option value="revision">Kembalikan (Perlu Revisi)</option>
                                    <option value="reject">Tolak (Tidak Layak)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Catatan Tinjauan</label>
                                <textarea rows="3" placeholder="Tulis catatan atau saran perbaikan..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition text-xs"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex gap-3">
                        <button type="button" onclick="closeReviewModal()" class="flex-1 py-3 text-sm font-bold text-slate-400 hover:bg-gray-50 rounded-xl transition">Batal</button>
                        <button type="submit" class="flex-1 py-3 bg-slate-800 text-white rounded-xl text-sm font-bold shadow-xl shadow-slate-200 hover:bg-slate-900 transition">Kirim Penilaian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Review PDF Modal -->
    <div id="previewModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative w-full max-w-5xl rounded-3xl bg-white shadow-2xl transition-all overflow-hidden">
                
                <div class="flex items-center justify-between border-b border-gray-100 px-8 py-5 bg-gray-50/50">
                    <div>
                        <h3 class="text-lg font-bold text-slate-800" id="modalTitle">Pratinjau Dokumen</h3>
                        <p class="text-xs text-slate-500" id="modalSubTitle">Kategori: Publikasi • Diunggah 12 Jan 2026</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="flex items-center gap-2 bg-white border border-gray-200 text-slate-600 px-4 py-2 rounded-xl text-xs font-bold hover:bg-gray-50 transition shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Unduh PDF
                        </button>
                        <button onclick="closePreviewPDFModal()" class="text-slate-400 hover:text-slate-600 p-2 rounded-full hover:bg-gray-100 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="bg-slate-100 p-4 min-h-[600px] flex items-center justify-center">
                    <div id="fileContainer" class="w-full h-[600px] bg-white rounded-xl shadow-inner border border-gray-200 flex items-center justify-center overflow-hidden">
                        <div class="text-center">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <p class="text-gray-400 font-medium">Memuat pratinjau dokumen...</p>
                        </div>
                    </div>
                </div>

                <div class="px-8 py-4 border-t border-gray-100 flex justify-end bg-white">
                    <button onclick="closePreviewPDFModal()" class="px-6 py-2 bg-slate-800 text-white rounded-xl text-sm font-bold hover:bg-slate-900 transition">Tutup Pratinjau</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;

        function openReviewModal(dosenName) {
            document.getElementById('reviewerDosenName').innerText = dosenName;
            document.getElementById('reviewModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeReviewModal() {
            document.getElementById('reviewModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        //modal preview file
        function openPreviewPDFModal(title, category, date) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalSubTitle').innerText = `Kategori: ${category.toUpperCase()} • Diunggah pada ${date}`;
            document.getElementById('previewModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closePreviewPDFModal() {
            document.getElementById('previewModal').classList.add('hidden');
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