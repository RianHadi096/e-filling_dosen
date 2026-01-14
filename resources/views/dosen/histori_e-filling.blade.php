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
                <span class="text-sm font-semibold text-gray-800">Dasbor</span>
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

    <main class="flex-1 p-8">
        <header class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Monitoring Dokumen Akademik</h1>
            <p class="text-gray-500 text-sm">Kelola jurnal, publikasi, dan sertifikasi Anda di sini.</p>
        </header>

        <div class="flex gap-4 mb-6">
            <button class="px-5 py-2 bg-blue-600 text-white rounded-full text-xs font-semibold shadow-sm">Semua Dokumen</button>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Dokumen / Judul</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Kategori</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal Unggah</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status Verifikasi</th>
                        <th class="p-4 text-xs font-semibold text-gray-500 uppercase tracking-wider text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4">
                            <div class="font-medium text-gray-800 text-sm">Analisis Algoritma Optimasi pada AI</div>
                            <div class="text-xs text-gray-400">Jurnal Internasional Scopus Q1</div>
                        </td>
                        <td class="p-4 text-sm text-gray-600">Publikasi Ilmiah</td>
                        <td class="p-4 text-sm text-gray-600">12 Jan 2026</td>
                        <td class="p-4">
                            <span class="px-3 py-1 text-[10px] font-bold uppercase bg-green-100 text-green-700 rounded-full">Selesai</span>
                        </td>
                        <td class="p-4 text-center text-sm cursor-pointer">
                            <a onclick="openPreviewModal('Analisis Algoritma Optimasi pada AI', 'Publikasi Ilmiah', '12 Jan 2026', 'path/to/document.pdf')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-xs font-bold transition flex items-center gap-2 ml-auto"">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                </svg>
                                Lihat File
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 text-sm font-medium text-gray-800">Sertifikasi Cloud Architecture (AWS)</td>
                        <td class="p-4 text-sm text-gray-600">Sertifikasi</td>
                        <td class="p-4 text-sm text-gray-600">10 Jan 2026</td>
                        <td class="p-4">
                            <span class="px-3 py-1 text-[10px] font-bold uppercase bg-yellow-100 text-yellow-700 rounded-full">Dalam Proses</span>
                        </td>
                        <td class="p-4 text-center text-sm cursor-pointer">
                            <a onclick="openPreviewModal('Sertifikasi Cloud Architecture (AWS)', 'Sertifikasi', '10 Jan 2026', 'path/to/document.pdf')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-xs font-bold transition flex items-center gap-2 ml-auto">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                </svg>
                                Lihat File
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 text-sm font-medium text-gray-800">Pelatihan IT bagi UMKM Desa Sukamaju</td>
                        <td class="p-4 text-sm text-gray-600">Pengabdian</td>
                        <td class="p-4 text-sm text-gray-600">05 Jan 2026</td>
                        <td class="p-4">
                            <span class="px-3 py-1 text-[10px] font-bold uppercase bg-red-100 text-red-700 rounded-full">Tertunda</span>
                        </td>
                        <td class="p-4 text-center text-blue-500 hover:underline text-sm cursor-pointer">
                            <a onclick="openReuploadModal('Sertifikat Kompetensi Oracle')" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-xs font-bold transition flex items-center gap-2 ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
                                </svg>
                                Re-upload File
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

     <!--modal reupload file-->
    <div id="reuploadModal" class="fixed inset-0 z-[60] hidden flex items-center justify-center p-4">
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeReuploadModal()"></div>

        <div class="relative bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-200">
            <div class="px-8 py-6 border-b border-gray-100 bg-amber-50/50">
                <h3 class="text-xl font-bold text-slate-800">Perbaiki Dokumen</h3>
                <p class="text-xs text-slate-500 mt-1" id="targetFileName">Memperbaiki: Sertifikat Kompetensi Oracle</p>
            </div>

            <form enctype="multipart/form-data" class="p-8">
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-xl">
                    <div class="flex gap-3">
                        <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        <div>
                            <p class="text-xs font-bold text-red-700 uppercase">Catatan Admin:</p>
                            <p class="text-xs text-red-600 italic">"Mohon lampirkan sisi belakang sertifikat juga agar nomor seri terlihat jelas."</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <label class="block text-sm font-semibold text-slate-700">Pilih File Baru</label>
                    <div class="border-2 border-dashed border-gray-200 rounded-2xl p-8 bg-gray-50 hover:bg-gray-100 transition cursor-pointer text-center group">
                        <input type="file" id="newFile" class="hidden">
                        <label for="newFile" class="cursor-pointer">
                            <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <p class="text-sm font-bold text-slate-700">Klik untuk ganti file</p>
                            <p class="text-[10px] text-slate-400 mt-1 uppercase">PDF atau Gambar (Maks. 5MB)</p>
                        </label>
                    </div>
                    <p id="fileSelectedName" class="text-xs text-blue-600 font-medium text-center hidden italic"></p>
                </div>

                <div class="mt-8 flex gap-3">
                    <button type="button" onclick="closeReuploadModal()" class="flex-1 py-3 text-sm font-bold text-slate-400 hover:bg-gray-50 rounded-xl transition">Batal</button>
                    <button type="submit" class="flex-1 py-3 bg-slate-800 text-white rounded-xl text-sm font-bold shadow-lg shadow-slate-200 hover:bg-slate-900 transition">Update Berkas</button>
                </div>
            </form>
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

        function openReuploadModal(fileName) {
            document.getElementById('targetFileName').innerText = "Memperbaiki: " + fileName;
            document.getElementById('reuploadModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeReuploadModal() {
            document.getElementById('reuploadModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Menampilkan nama file yang dipilih
        document.getElementById('newFile').addEventListener('change', function(e) {
            const fileName = e.target.files[0].name;
            const display = document.getElementById('fileSelectedName');
            display.innerText = "File terpilih: " + fileName;
            display.classList.remove('hidden');
        });

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
