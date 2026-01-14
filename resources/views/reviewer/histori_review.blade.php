<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Review | E-Filling</title>
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
                <span class="text-sm font-semibold text-gray-800">Histori Tinjau</span>
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
        <header class="mb-10 flex justify-between items-end">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Riwayat Penilaian</h1>
                <p class="text-slate-500 text-sm">Daftar dokumen yang telah Anda tinjau dan beri angka kredit.</p>
            </div>
            <div class="flex gap-3">
                <select class="px-4 py-2 rounded-xl border border-gray-200 bg-white text-sm font-medium outline-none focus:ring-2 focus:ring-blue-500 transition">
                    <option>Semester Ganjil 2025/2026</option>
                    <option>Semester Genap 2024/2025</option>
                </select>
                <button class="bg-white border border-gray-200 text-slate-600 px-4 py-2 rounded-xl text-sm font-bold hover:bg-gray-50 transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Rekam Log
                </button>
            </div>
        </header>

        <div class="grid grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-5 rounded-2xl border border-gray-100 flex items-center gap-4">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Disetujui</p>
                    <p class="text-xl font-bold text-slate-800">142</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 flex items-center gap-4">
                <div class="w-12 h-12 bg-red-50 text-red-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Ditolak/Revisi</p>
                    <p class="text-xl font-bold text-slate-800">6</p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Total Kontribusi KUM</p>
                    <p class="text-xl font-bold text-slate-800">845.5</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b border-gray-100">
                    <tr class="text-[11px] font-extrabold text-slate-400 uppercase tracking-widest">
                        <th class="px-8 py-5">Tanggal Review</th>
                        <th class="px-8 py-5">Informasi Berkas</th>
                        <th class="px-8 py-5 text-center">Skor KUM</th>
                        <th class="px-8 py-5">Status Akhir</th>
                        <th class="px-8 py-5 text-right">Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="px-8 py-6">
                            <div class="text-sm font-bold text-slate-700">14 Jan 2026</div>
                            <div class="text-[10px] text-slate-400 font-mono">14:20 WIB</div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="font-bold text-slate-700 text-sm">Penerapan Machine Learning pada IoT</div>
                            <div class="text-xs text-slate-500 mt-0.5">Dosen: Dr. Heru Prasetyo</div>
                        </td>
                        <td class="px-8 py-6 text-center font-black text-blue-600 text-lg">
                            40.0
                        </td>
                        <td class="px-8 py-6">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-bold uppercase">
                                <span class="w-1 h-1 bg-green-600 rounded-full"></span> Approved
                            </span>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <button onclick="openHistoryDetailModal('Dr. Heru Prasetyo', 'Penerapan Machine Learning pada IoT', '40.0', 'Approved')" class="text-slate-400 hover:text-blue-600 transition">
                                <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </button>
                        </td>
                    </tr>
                    
                    <tr class="hover:bg-gray-50/50 transition bg-red-50/10">
                        <td class="px-8 py-6">
                            <div class="text-sm font-bold text-slate-700">12 Jan 2026</div>
                            <div class="text-[10px] text-slate-400 font-mono">09:15 WIB</div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="font-bold text-slate-700 text-sm">Modul Praktikum Jaringan Komputer</div>
                            <div class="text-xs text-slate-500 mt-0.5">Dosen: Siti Aminah, M.Kom</div>
                        </td>
                        <td class="px-8 py-6 text-center font-black text-slate-300 text-lg">
                            0.0
                        </td>
                        <td class="px-8 py-6">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-100 text-red-700 text-[10px] font-bold uppercase">
                                <span class="w-1 h-1 bg-red-600 rounded-full"></span> Rejected
                            </span>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <button onclick="openHistoryDetailModal('Siti Aminah, M.Kom', 'Modul Praktikum Jaringan Komputer', '0.0', 'Rejected')" class="text-slate-400 hover:text-blue-600 transition">
                                <svg class="w-5 h-5 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="p-6 bg-white border-t border-gray-100 flex justify-between items-center">
                <p class="text-xs text-slate-500 font-medium">Menampilkan 1-10 dari 148 hasil review</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1 border rounded text-xs font-bold text-slate-400 hover:bg-gray-50 transition">Prev</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded text-xs font-bold shadow-md shadow-blue-100">1</button>
                    <button class="px-3 py-1 border rounded text-xs font-bold text-slate-400 hover:bg-gray-50 transition">2</button>
                    <button class="px-3 py-1 border rounded text-xs font-bold text-slate-400 hover:bg-gray-50 transition">Next</button>
                </div>
            </div>
        </div>
    </main>

    <div id="historyDetailModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeHistoryDetailModal()"></div>

        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white w-full max-w-xl rounded-[32px] shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-200">
                
                <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <div>
                        <h3 class="text-lg font-bold text-slate-800">Detail Penilaian Selesai</h3>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">ID Review: #RF-2026-001</p>
                    </div>
                    <button onclick="closeHistoryDetailModal()" class="text-slate-400 hover:text-slate-600 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <div class="p-8">
                    <div class="flex items-center justify-between mb-8 p-6 bg-slate-900 rounded-3xl text-white shadow-xl shadow-slate-200">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Status Validasi Admin</p>
                            <div id="histStatusBadge" class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase">
                                Verified
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Skor KUM Diberikan</p>
                            <p id="histSkorDisplay" class="text-3xl font-black italic">40.0</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Dosen Pengirim</p>
                            <p id="histDosenName" class="text-sm font-bold text-slate-800">---</p>
                        </div>

                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Judul Dokumen</p>
                            <p id="histDocTitle" class="text-sm font-medium text-slate-600 leading-relaxed">---</p>
                        </div>

                        <hr class="border-gray-100">

                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 italic text-blue-600">Catatan Review Anda</p>
                            <div class="p-4 bg-gray-50 rounded-2xl border border-gray-100 text-xs text-slate-600 leading-relaxed">
                                "Materi jurnal sangat relevan dengan perkembangan IoT saat ini. Data yang disajikan akurat dan metodologinya kuat. Disetujui untuk angka kredit maksimal."
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex gap-3">
                        <button class="flex-1 py-3 bg-white border border-gray-200 text-slate-600 rounded-xl text-sm font-bold hover:bg-gray-50 transition flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Unduh Sertifikat Review
                        </button>
                        <button onclick="closeHistoryDetailModal()" class="flex-1 py-3 bg-slate-800 text-white rounded-xl text-sm font-bold hover:bg-slate-900 transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal lihat file-->
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
                        <button onclick="closePreviewModal()" class="text-slate-400 hover:text-slate-600 p-2 rounded-full hover:bg-gray-100 transition">
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
                    <button onclick="closePreviewModal()" class="px-6 py-2 bg-slate-800 text-white rounded-xl text-sm font-bold hover:bg-slate-900 transition">Tutup Pratinjau</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        let sidebarVisible = true;
        let isIconOnly = false;

        function openHistoryDetailModal(dosen, judul, skor, status) {
            document.getElementById('histDosenName').innerText = dosen;
            document.getElementById('histDocTitle').innerText = judul;
            document.getElementById('histSkorDisplay').innerText = skor;
            
            const badge = document.getElementById('histStatusBadge');
            badge.innerText = status;
            
            // Atur warna badge berdasarkan status
            if(status === 'Approved') {
                badge.className = "inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase bg-green-500/20 text-green-400";
            } else {
                badge.className = "inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase bg-red-500/20 text-red-400";
            }

            document.getElementById('historyDetailModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeHistoryDetailModal() {
            document.getElementById('historyDetailModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        //modal preview file
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