<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File E-Filling Dosen</title>
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

    <main class="flex-1 p-10">
        <div class="max-w-4xl mx-auto">
            <header class="mb-8">
                
                <h1 class="text-2xl font-bold text-gray-800">Unggah Dokumen Baru</h1>
                <p class="text-gray-500">Pastikan dokumen dalam format PDF atau Gambar dengan ukuran maksimal 3 MB.</p>
            </header>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Dokumen</label>
                            <input type="text" name="title" placeholder="Contoh: Penerapan AI" 
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Kegiatan</label>
                            <input type="text" name="title" placeholder="Contoh: Jurnal Internasional" 
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Kategori Tridarma</label>
                            <select name="category" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition bg-white text-gray-600">
                                <option value="publikasi">Jurnal & Publikasi</option>
                                <option value="sertifikasi">Sertifikasi Kompetensi</option>
                                <option value="pengabdian">Pengabdian Masyarakat</option>
                                <option value="pendidikan">Pendidikan & Pengajaran</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Terbit / Peroleh</label>
                            <input type="date" name="date" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition text-gray-600">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Keterangan Tambahan (Opsional)</label>
                        <textarea name="description" rows="3" placeholder="Tambahkan tautan (link) jurnal atau detail lainnya..." 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <label class="block text-sm font-semibold text-gray-700 mb-4 text-center">Lampiran File</label>
                    <div class="border-2 border-dashed border-gray-200 rounded-2xl p-10 bg-gray-50 hover:bg-gray-100 transition cursor-pointer group">
                        <input type="file" name="document" class="hidden" id="fileUpload">
                        <label for="fileUpload" class="flex flex-col items-center justify-center cursor-pointer">
                            <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            </div>
                            <p class="text-sm font-medium text-gray-700">Seret file ke sini atau <span class="text-blue-600 underline">cari di folder</span></p>
                            <p class="text-[11px] text-gray-400 mt-2 uppercase font-bold tracking-widest">PDF, JPG, PNG (Maks. 3MB)</p>
                        </label>
                    </div>
                </div>

                <div class="flex justify-end gap-4">
                    <button type="submit" class="px-10 py-3 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition">Unggah Sekarang</button>
                </div>
            </form>
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