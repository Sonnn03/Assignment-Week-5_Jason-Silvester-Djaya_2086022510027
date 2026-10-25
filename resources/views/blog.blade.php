<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog</title>
    @vite('resources/css/style.css')
</head>
<body>
    <!-- ===================== HEADER / NAVBAR ===================== -->
    <nav class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 dark:border-neutral-700 dark:bg-neutral-900 min-h-[68px] relative z-20" aria-label="Main navigation">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4 w-full">
            <a href="#" class="min-w-9 inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                <span class="sr-only">PORTOFOLIO</span>
                <img src="https://readymadeui.com/logo-alt.svg" alt="readymadeui logo" class="h-9 w-auto" />
            </a>

            <div id="collapseMenu" tabindex="-1" class="hidden lg:block max-lg:bg-white dark:max-lg:bg-neutral-900 max-lg:border-l max-lg:border-slate-300 dark:max-lg:border-neutral-700 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">
                <div class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white dark:border-neutral-700 dark:bg-neutral-900 lg:hidden max-lg:min-h-[68px]">
                    <a href="#" class="inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                        <span class="sr-only">Your Company</span>
                        <img src="https://readymadeui.com/logo-alt.svg" alt="readymadeui logo dialog" class="h-9 w-auto" />
                    </a>
                    <button type="button" aria-controls="collapseMenu" id="toggleClose" class="cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                        <span class="sr-only">Close main menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 329.269 329">
                            <path d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0" data-original="#000000" />
                        </svg>
                    </button>
                </div>

                <ul class="flex flex-col gap-8 font-semibold text-sm text-slate-900 dark:text-slate-50 lg:flex-row max-lg:p-6">
                    <li>
                        <a href="/" class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Home</a>
                    </li>
                    <li>
                        <!-- aria-current ditambahkan di sini untuk menandakan halaman aktif -->
                        <a href="/blog" class="hover:text-blue-700 dark:hover:text-blue-400 text-blue-700 dark:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded" aria-current="page">Blog</a>
                    </li>
                    <li>
                        <a href="/about" class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">About</a>
                    </li>
                    <li>
                        <a href="/contact" class="hover:text-blue-700 dark:hover:text-blue-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center gap-4">
                <button type="button" aria-controls="collapseMenu" aria-expanded="false" aria-haspopup="true" id="toggleOpen" class="cursor-pointer lg:hidden focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-7 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- ===================== BAGIAN KONTEN BLOG ===================== -->
    <main class="max-w-7xl mx-auto px-4 md:px-8 py-12 min-h-screen">
        <div class="mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-50">Blog & Artikel Terkini</h1>
            <p class="mt-4 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                Kumpulan tulisan terbaru mengenai Web Development, teknologi, dan eksplorasi dunia IT.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Artikel 1 -->
            <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <img src="{{ asset('img/tailwind.png') }}" alt="Cover Artikel" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">Web Development</span>
                        <span>&bull;</span>
                        <time datetime="2026-10-25">25 Okt 2026</time>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                        <a href="https://tailwindcss.com/" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Cara Membangun UI Modern dengan Tailwind CSS</a>
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                        Tailwind CSS mempermudah kita dalam membangun antarmuka web yang responsif tanpa perlu menulis kode CSS dari nol. Mari kita bahas langkah pertamanya.
                    </p>
                    <a href="#" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                        Baca selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </article>

            <!-- Artikel 2 -->
            <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
               <!-- Pastikan Anda memiliki gambar laravel.png di dalam folder public/img -->
               <img src="{{ asset('img/laravel.png') }}" alt="Cover Artikel Laravel" class="w-full h-48 object-cover">
               
               <div class="p-6 flex flex-col flex-grow">
                  <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">Framework</span>
                        <span>&bull;</span>
                        <time datetime="2026-10-25">25 Okt 2026</time>
                  </div>
                  <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                        <a href="{{ url('/blog/mengenal-laravel') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                           Mengenal Laravel: Framework PHP Terpopuler saat ini
                        </a>
                  </h2>
                  <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                        Pelajari mengapa Laravel menjadi pilihan utama bagi developer web. Mulai dari sistem routing yang mudah, keamanan bawaan yang tangguh, hingga fitur Eloquent ORM.
                  </p>
                  <a href="{{ url('/blog/mengenal-laravel') }}" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                        Baca selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </a>
               </div>
            </article>

            <!-- Artikel 3 -->
            <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <img src="https://placehold.co/600x400/e2e8f0/1e293b?text=Kampus+Life" alt="Cover Artikel" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">Kampus Life</span>
                        <span>&bull;</span>
                        <time datetime="2026-10-15">15 Okt 2026</time>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                        <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Pengalaman Menjadi Mahasiswa IMT Universitas Ciputra</a>
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                        Menjadi mahasiswa Informatika tidak hanya belajar coding, tetapi juga aktif di berbagai kegiatan kampus. Ini ceritaku!
                    </p>
                    <a href="#" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                        Baca selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </article>

        </div>
    </main>

    <footer class="bg-slate-100 dark:bg-neutral-900 pt-16 pb-8 px-4 md:px-8 border-t border-slate-300 dark:border-neutral-700">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-10 justify-between">
            <div class="max-w-md">
                <a href="#" class="min-h-12 inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                    <img src="https://readymadeui.com/logo-alt.svg" alt="logo" class="w-12" />
                </a>
                <div class="mt-6">
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm">ReadymadeUI is a library of pre-designed UI components built for Tailwind CSS. It offers a collection of versatile and ready-to-use components.</p>
                </div>

                <ul class="flex flex-wrap gap-6 mt-6">
                    <li>
                        <a href="https://www.linkedin.com/in/jason-silvester-djaya-347616381?utm_source=share_via&utm_content=profile&utm_medium=member_ios" class="flex items-center bg-slate-200 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0" data-original="#000000" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/jasonnnn.03?xtok=NXg5ajQ1bmFvYnRp" class="flex items-center bg-slate-200 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" data-original="#000000" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@jasonnn.03?si=U-mh0yo2IDmP2ajy" class="flex items-center bg-slate-200 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500" aria-label="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" data-original="#000000" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/Sonnn03" class="flex items-center bg-slate-200 dark:bg-neutral-800 w-8 h-8 p-2 rounded-full focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500" aria-label="Github">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full fill-slate-600 dark:fill-slate-50" viewBox="0 0 438.549 438.549" aria-hidden="true">
                                <path d="M409.132 114.573q-29.41-50.392-79.798-79.8C295.736 15.166 259.057 5.365 219.271 5.365c-39.781 0-76.472 9.804-110.063 29.408-33.596 19.605-60.192 46.204-79.8 79.8Q0 164.966 0 224.63c0 47.78 13.94 90.745 41.827 128.906q41.827 57.245 108.063 79.227c5.14.954 8.945.283 11.419-1.996 2.475-2.282 3.711-5.14 3.711-8.562q0-.855-.144-15.417a2550 2550 0 0 1-.144-25.406l-6.567 1.136c-4.187.767-9.469 1.092-15.846 1-6.374-.089-12.991-.757-19.842-1.999q-10.28-1.848-19.13-8.559c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559q-6.139-7.995-12.419-10.848l-1.999-1.431c-1.332-.951-2.568-2.098-3.711-3.429q-1.712-1.996-2.568-3.997-.86-2.002 1.427-3.289c1.525-.859 4.281-1.276 8.28-1.276l5.708.853c3.807.763 8.516 3.042 14.133 6.851q8.42 5.71 13.846 14.842c4.38 7.806 9.657 13.754 15.846 17.847q9.277 6.138 18.699 6.136 9.42-.001 16.274-1.423 6.848-1.43 12.847-4.285 2.57-19.135 13.988-29.41c-10.848-1.14-20.601-2.857-29.264-5.14-8.658-2.286-17.605-5.996-26.835-11.14-9.235-5.137-16.896-11.516-22.985-19.126-6.09-7.614-11.088-17.61-14.987-29.979q-5.852-18.56-5.852-42.826c0-23.035 7.52-42.637 22.557-58.817q-10.566-25.977 1.997-58.24c5.52-1.715 13.706-.428 24.554 3.853 10.85 4.283 18.794 7.952 23.84 10.994s9.089 5.618 12.135 7.708q26.556-7.42 54.818-7.421c28.262-.001 37.117 2.474 54.823 7.421l10.849-6.849c7.419-4.57 16.18-8.758 26.262-12.565 10.088-3.805 17.802-4.853 23.134-3.138 8.562 21.509 9.325 40.922 2.279 58.24 15.036 16.18 22.559 35.787 22.559 58.817 0 16.178-1.958 30.497-5.853 42.966-3.9 12.471-8.941 22.457-15.125 29.979q-9.286 11.282-23.131 18.986c-9.232 5.14-18.182 8.85-26.84 11.136-8.662 2.286-18.415 4.004-29.263 5.146q14.841 12.845 14.842 40.539v60.237c0 3.422 1.19 6.279 3.572 8.562 2.379 2.279 6.136 2.95 11.276 1.995q66.244-21.98 108.068-79.226c27.88-38.161 41.825-81.126 41.825-128.906-.01-39.771-9.818-76.454-29.414-110.049" data-original="#000000" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="space-y-6">
                <h2 class="text-slate-900 dark:text-slate-50 font-semibold text-xl">Jason Silvester Djaya</h2>
                <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400 font-normal">
                    <li><a href="/about" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">About</a></li>
                    <li><a href="/blog" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">Blog</a></li>
                    <li><a href="/contact" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">Contact</a></li>
                    <li><a href="/portfolio" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">Portfolio</a></li>
                </ul>
            </div>
        </div>

        <hr class="my-8 border-slate-300 dark:border-neutral-700" />

        <div class="flex flex-wrap gap-4 flex-col md:flex-row max-w-7xl mx-auto">
            <ul class="flex flex-wrap gap-4 text-sm text-slate-600 dark:text-slate-400 font-normal">
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">Terms of Service</a></li>
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-slate-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded transition-all">Security</a></li>
            </ul>
            <p class="text-slate-600 dark:text-slate-400 text-sm md:ml-auto">© ReadymadeUI. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>