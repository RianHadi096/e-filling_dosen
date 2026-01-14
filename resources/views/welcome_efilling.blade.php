<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | E-Filling System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .role-card:hover .icon-box { transform: scale(1.1) rotate(-5deg); }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-100/50 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-indigo-100/50 rounded-full blur-[120px]"></div>
    </div>

    <div class="text-center mb-16 animate-in fade-in slide-in-from-bottom-4 duration-700">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">
            E-Filling <span class="text-blue-600 italic font-black">Tridarma</span>
        </h1>
        <p class="text-slate-500 max-w-md mx-auto text-sm leading-relaxed">
            Platform integrasi pengumpulan dokumen dosen, verifikasi angka kredit (KUM), dan manajemen arsip universitas.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl">
        
        <a href="{{ route('/dosen/login') }}" class="role-card group bg-white p-8 rounded-[40px] border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-blue-100 hover:border-blue-200 transition-all duration-300 flex flex-col items-center text-center">
            <div class="icon-box w-20 h-20 bg-blue-50 text-blue-600 rounded-3xl flex items-center justify-center mb-6 transition-all duration-300 shadow-inner">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l9-5-9-5-9 5 9 5zm0 0v6m0-6L3 9m18 9v-6M3 12v6m0 0l7 4 7-4"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-2">Dosen</h3>
            <p class="text-xs text-slate-400 font-medium mb-6">Unggah dokumen tridarma, pantau status verifikasi, dan cek riwayat KUM.</p>
            <span class="mt-auto px-6 py-2 bg-slate-50 group-hover:bg-blue-600 group-hover:text-white rounded-xl text-[10px] font-bold text-slate-400 uppercase tracking-widest transition-colors">Pilih Role</span>
        </a>

        <a href="{{ route('/reviewer/login') }}" class="role-card group bg-white p-8 rounded-[40px] border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-indigo-100 hover:border-indigo-200 transition-all duration-300 flex flex-col items-center text-center">
            <div class="icon-box w-20 h-20 bg-indigo-50 text-indigo-600 rounded-3xl flex items-center justify-center mb-6 transition-all duration-300 shadow-inner">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-2">Reviewer</h3>
            <p class="text-xs text-slate-400 font-medium mb-6">Evaluasi substansi berkas, berikan penilaian angka kredit, dan revisi dokumen.</p>
            <span class="mt-auto px-6 py-2 bg-slate-50 group-hover:bg-indigo-600 group-hover:text-white rounded-xl text-[10px] font-bold text-slate-400 uppercase tracking-widest transition-colors">Pilih Role</span>
        </a>

        <a href="{{ route('/admin/login') }}" class="role-card group bg-white p-8 rounded-[40px] border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-slate-200 hover:border-slate-300 transition-all duration-300 flex flex-col items-center text-center">
            <div class="icon-box w-20 h-20 bg-slate-100 text-slate-800 rounded-3xl flex items-center justify-center mb-6 transition-all duration-300 shadow-inner">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-2">Administrator</h3>
            <p class="text-xs text-slate-400 font-medium mb-6">Manajemen pengguna, validasi akhir dokumen, dan sinkronisasi data sistem.</p>
            <span class="mt-auto px-6 py-2 bg-slate-50 group-hover:bg-slate-900 group-hover:text-white rounded-xl text-[10px] font-bold text-slate-400 uppercase tracking-widest transition-colors">Pilih Role</span>
        </a>

    </div>

</body>
</html>