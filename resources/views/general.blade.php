<!DOCTYPE html>
<html lang="en"> <!-- class="scroll-smooth" -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/pagedone.css">
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <title>Smart City Bogor</title>
</head>

<body>
    {{-- Header Section Start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="w-full">
            <div class="flex items-center justify-between relative px-4 sm:px-10 lg:px-14">
                <div>
                    <a href="#home" class="font-bold text-lg block py-6 text-primary">Smart City</a>
                </div>
                <div class="flex items-center px-4 lg:px-0">
                    <button id="hamburger" name="hamburger" type="button"
                        class="block absolute right-4 sm:right-10 lg:right-14 justify-end xl:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out  origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out  origin-top-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full xl:block xl:static lg:bg-transparent xl:max-w-full xl:shadow-none xl:rounded-none">
                        <ul class="block xl:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#dimensi"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Dimensi</a>
                            </li>
                            <li class="group">
                                <a href="#visimisi"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Visi
                                    &
                                    Misi</a>
                            </li>
                            <li class="pesertaiga">
                                <a href="#pesertaiga"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Peserta
                                    IGA</a>
                            </li>
                            <li class="group">
                                <a href="#quickwins"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Quick
                                    Wins</a>
                            </li>
                            <li class="group">
                                <a href="#masterplan"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Masterplan</a>
                            </li>
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Booklet</a>
                            </li>
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Road
                                    Map</a>
                            </li>
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Kontak</a>
                            </li>
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Hasil
                                    Penilaian</a>
                            </li>
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Program
                                    Implementasi</a>
                            </li>
                            <li class="group">
                                <a href="#home"
                                    class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary lg:mx-3">Layanan</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Header Section End --}}

    {{-- Hero Section Start --}}
    <section id="home" class=" overflow-hidden">
        <div class="container">
            <div class="w-screen h-[700px] bg-cover rounded-bl-[100px]"
                style="background-image: url(/img/bogor-wahyu-priyanto.jpg)">
                <div
                    class="w-full h-full bg-gradient-to-t from-primary rounded-bl-[100px] self-center p-10 px-4 relative">
                    <h1 class="text-5xl font-bold text-white text-center mt-40 sm:text-start sm:ps-10">Smart City</h1>
                    <h2 class="text-3xl font-semibold text-white text-center mb-5 sm:text-start sm:ps-10">Kota Bogor
                    </h2>
                    <p class="text-base font-semibold text-slate-300 text-center mb-5 px-10 sm:text-start sm:ps-10">
                        Lorem
                        ipsum
                        dolor sit amet,
                        consectetur adipisicing elit. Minima, corporis.</p>

                    <div class="flex justify-center sm:justify-start sm:ps-10">
                        <form class="relative">
                            <input type="text"
                                class="w-72 pl-10 pr-4 py-2 rounded-full shadow-sm border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Cari...">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Dimensi Section Start --}}
    <section id="dimensi" class="pt-36 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-3xl font-bold mb-5 block">Dimensi</h1>
            </div>
            <div class="flex flex-wrap gap-6 px-4 sm:mx-7">
                {{-- card 1 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Governance</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Layanan
                            Publik, Transparansi, Keamanan,
                            Ketertiban Umum <span class="font-semibold">E-Menanduk, Mall Pelayanan Publik Graha
                                Tiyasa</span></p>
                    </div>
                </div>
                {{-- card 2 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Branding</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Penataan
                            Wajah Kota dan Pemasaran Potensi
                            Daerah Secara Lokal, Nasional dan Global
                            <span class="font-semibold">100% Bogor Pisan, Bogor Berlari</span>
                        </p>
                    </div>
                </div>
                {{-- card 3 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Economy</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Peluang
                            Usaha, Sumber Daya, Permodalan
                            <span class="font-semibold">Pengembangan (Sistem Layanan Perizinan)
                                SMART, Manajemen Inovasi Daerah (IGA)</span>
                        </p>
                    </div>
                </div>
                {{-- card 4 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Living</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Tersedianya
                            Lingkungan Tempat Tinggal yang
                            Layak Tinggal, Nyaman, dan Efisien.
                            <span class="font-semibold">Simpus di 26 Puskesmas, e-SIR</span>
                        </p>
                    </div>
                </div>
                {{-- card 5 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Society</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Ekosistem
                            Sosio-Teknis Masyarakat yang Humanis, Dinamis, Produktif, Komunikatif dan Interaktif
                            <span class="font-semibold">Inovasi Keselamatan Publik, Sibadra</span>
                        </p>
                    </div>
                </div>
                {{-- card 6 --}}
                <div
                    class="relative flex flex-col w-full items-center border border-solid shadow-xl border-gray-200 rounded-2xl transition-all duration-500 md:flex-row md:w-[48%] lg:w-[48%] overflow-hidden">
                    <div class="block w-full overflow-hidden md:w-32 md:h-full h-32 bg-primary">
                    </div>
                    <div class="p-4 w-full">
                        <h4 class="text-lg font-bold text-dark mb-2 capitalize transition-all duration-500">
                            Smart Branding</h4>
                        <p class="text-sm font-normal text-gray-800 transition-all duration-500 leading-5">Penataan
                            Wajah Kota dan Pemasaran Potensi
                            Daerah Secara Lokal, Nasional dan Global
                            <span class="font-semibold">100% Bogor Pisan, Bogor Berlari</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Dimensi Section End --}}

    {{-- Visi dan Misi Section Start --}}
    <section id="visimisi" class="pt-36 pb-16 bg-gradient-to-b from-primary/15">
        <div class="w-full min-h-screen">
            <div class="px-4 sm:mx-7 text-center">
                <h1 class="text-3xl font-bold mb-7 block">Visi dan Misi</h1>
            </div>

            <!-- Flex container untuk gambar di kanan dan card Visi di kiri -->
            <div class="flex flex-col md:flex-row md:items-center px-4 sm:mx-7 lg:mx-auto lg:max-w-5xl">
                <!-- Card Visi (lebar full) -->
                <div
                    class="flex-grow w-full py-8 px-6 mt-4 flex bg-white rounded-xl justify-start items-center shadow-[inset_0_4px_20px_rgba(0,0,0,0.4)] md:mt-0 md:mb-0 md:mr-7">
                    <div class="w-full flex">
                        <h2 class="text-5xl font-bold mb-3">Visi</h2> <!-- Margin bawah dikurangi -->
                        <div class="px-6 ms-6 lg:pe-80 border-l-4 text-base">
                            Terwujudnya Kota Bogor Sebagai Kota Ramah Keluarga
                        </div>
                    </div>
                </div>

                <!-- Gambar di sebelah kanan card Visi -->
                <img src="/img/Visi.png" alt="visimisi"
                    class="w-64 h-52 mb-4 hidden pt-7 md:block sm:w-80 sm:h-64 md:w-64 md:h-52 mx-auto md:mx-0">
                <!-- Gambar tetap disebelah kanan -->
            </div>

            <!-- Flex container untuk gambar di kiri dan card Misi di kanan serta video -->
            <div class="flex flex-col md:flex-col md:items-start px-4 sm:mx-7 lg:mx-auto lg:max-w-5xl">
                <div class="flex flex-col md:flex-row w-full">
                    <!-- Gambar di sebelah kiri card Misi -->
                    <img src="/img/Visi.png" alt="visimisi"
                        class="w-64 h-52 mb-4 hidden md:block sm:w-80 sm:h-64 md:w-64 md:h-52 md:mr-7 mx-auto md:mx-0">
                    <!-- Gambar tetap disebelah kiri -->

                    <!-- Card Misi (height menyesuaikan isi) -->
                    <div
                        class="flex-grow h-min w-full mt-5 py-8 px-6 mb-4 flex bg-white rounded-xl justify-end items-start shadow-[inset_0_4px_20px_rgba(0,0,0,0.4)] md:mb-0">
                        <div class="w-full flex">
                            <h2 class="text-5xl pt-2 font-bold mb-3">Misi</h2> <!-- Margin bawah dikurangi -->
                            <ol class="list-disc ms-6 pl-9 border-l-4 text-base">
                                <li>Mewujudkan Kota yang Sehat</li>
                                <li>Mewujudkan Kota yang Cerdas</li>
                                <li>Mewujudkan Kota yang Sejahtera</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Video di bawah card -->
                <video class="w-full rounded-lg mt-10" autoplay controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    {{-- Visi dan Misi Section End --}}

    {{-- Peserta IGA Section Start --}}
    <section id="pesertaiga" class="pt-24 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-3xl font-bold mb-7 block">Peserta IGA 2020</h1>
            </div>
            {{-- button start --}}
            <div
                class="filter-button-group px-4 sm:mx-7 mb-5 grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-9 gap-3">
                <button data-filter="*"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="active group-hover:text-white">Semua</span></button>
                <button data-filter=".dpmptsp"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">DPMPTSP</span></button>
                <button data-filter=".bpksdm"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">BPKSDM</span></button>
                <button data-filter=".dishub"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">DISHUB</span></button>
                <button data-filter=".kesra"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">KESRA</span></button>
                <button data-filter=".dinkes"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">DINKES</span></button>
                <button data-filter=".bapenda"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">BAPENDA</span></button>
                <button data-filter=".disdukcapil"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">DISDUKCAPIL</span></button>
                <button data-filter=".dinsos"
                    class="bg-transparent group hover:bg-primary text-primary font-semibold py-2 px-4 border border-primary rounded-lg shadow"><span
                        class="group-hover:text-white">DINSOS</span></button>
            </div>
            {{-- button end --}}

            {{-- card start --}}
            <div id="product-list" class="px-4 grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 sm:mx-7">
                <div class="dpmptsp bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DPMPTSP)</h1>
                    <h2 class="text-lg mb-4">Tanda Tangan Elektronik</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bpksdm bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(BPKSDM)</h1>
                    <h2 class="text-lg mb-4">Layanan Umum Kepegawaian Online (LuKePo)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dpmptsp bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DPMPTSP)</h1>
                    <h2 class="text-lg mb-4">CANDI (Cetak Mandiri)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dishub bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DISHUB)</h1>
                    <h2 class="text-lg mb-4">SIMA PANGERAN</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="kesra bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(KESRA)</h1>
                    <h2 class="text-lg mb-4">SAHABAT (Sistem Administrasi Hibah Bansos Terpadu)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dpmptsp bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DPMPTSP)</h1>
                    <h2 class="text-lg mb-4">Booking Antrian Online MPP</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dinkes bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DINKES)</h1>
                    <h2 class="text-lg mb-4">KANGEN MADU (Koordinasi dan Integrasi Kunjungan Kesehatan Keluarga dan
                        Masyarakat Terpadu)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dinkes bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DINKES)</h1>
                    <h2 class="text-lg mb-4">Bogor Anjang Sehat (BAS)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bapenda bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(BAPENDA)</h1>
                    <h2 class="text-lg mb-4">SIPDEH (Sistem Informasi Pajak Daerah)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="disdukcapil bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DISDUKSCAPIL)</h1>
                    <h2 class="text-lg mb-4">Transformasi Layanan Dukcapil</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dinsos bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DINSOS)</h1>
                    <h2 class="text-lg mb-4">SOLID (Sosial Integrasi Data)</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="dishub bg-primary text-white p-6 rounded-lg shadow-lg w-full">
                    <h1 class="text-xl font-bold mb-2">(DISHUB)</h1>
                    <h2 class="text-lg mb-4">BisKita Kota Bogor</h2>
                    <p class="text-sm mb-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis rem reiciendis beatae quam,
                        earum porro quod iure praesentium laboriosam ipsa quae maiores voluptatibus! Corporis.
                    </p>
                    <div class="flex justify-end">
                        <div class="bg-white rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0-5a9 9 0 1 0 0 18a9 9 0 0 0 0-18z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            {{-- card end --}}
        </div>
    </section>
    {{-- Peserta IGA Section End --}}

    {{-- Program Implentasi Section Start --}}
    {{-- <section id="quickwins" class="pt-28 pb-28">
        <div class="w-full relative">
            <div class="swiper multiple-slide-carousel swiper-container relative">
                <div class="swiper-wrapper mb-16">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-96 flex flex-col justify-between">
                            <div class="text-lg font-bold text-gray-800">Card Title 1</div>
                            <p class="text-gray-500">This is the content of the first card. It can be a short
                                description or any other relevant text.</p>
                            <a href="#" class="text-indigo-600 hover:underline">Learn More</a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-96 flex flex-col justify-between">
                            <div class="text-lg font-bold text-gray-800">Card Title 2</div>
                            <p class="text-gray-500">This is the content of the second card.</p>
                            <a href="#" class="text-indigo-600 hover:underline">Learn More</a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-96 flex flex-col justify-between">
                            <div class="text-lg font-bold text-gray-800">Card Title 3</div>
                            <p class="text-gray-500">This is the content of the third card.</p>
                            <a href="#" class="text-indigo-600 hover:underline">Learn More</a>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-xl shadow-lg p-6 h-96 flex flex-col justify-between">
                            <div class="text-lg font-bold text-gray-800">Card Title 4</div>
                            <p class="text-gray-500">This is the content of the fourth card.</p>
                            <a href="#" class="text-indigo-600 hover:underline">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                    <button id="slider-button-left"
                        class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !-translate-x-16"
                        data-carousel-prev>
                        <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button id="slider-button-right"
                        class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16"
                        data-carousel-next>
                        <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- Program Implentasi Section End --}}

    {{-- Masterplan Section Start --}}
    <section id="masterplan" class="pt-1 pb-32">
        <div class="w-full">
            <div class="px-4 sm:mx-7">
                <h1 class="text-3xl font-bold mb-7 block">MasterPlan dan Power Point Smart City</h1>
            </div>
            <div class="px-4 sm:mx-7">
                <div class="w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">MASTERPLAN
                        SMART
                        CITY
                        KOTA BOGOR
                        2017 - 2021
                    </h2>
                </div>
                <div class="w-full bg-white rounded-xl mt-5 shadow-lg overflow-hidden">
                    <div class="border-l-8 border-primary">
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
                <div class="w-full bg-white rounded-xl mt-5 shadow-lg overflow-hidden">
                    <div class="border-l-8 border-primary">
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
                <div class="w-full bg-white rounded-xl mt-5 shadow-lg overflow-hidden">
                    <div class="border-l-8 border-primary">
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
            </div>
            <div class="px-4 mt-7 sm:mx-7">
                <div class="w-full bg-primary rounded-xl">
                    <h2 class="text-lg text-white font-semibold text-center px-3 py-3 sm:text-xl uppercase">MASTERPLAN
                        SMART
                        CITY
                        KOTA BOGOR
                        2023 - 2027
                    </h2>
                </div>
                <div class="w-full bg-white rounded-xl mt-5 shadow-lg overflow-hidden">
                    <div class="border-l-8 border-primary">
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
                <div class="w-full bg-white rounded-xl mt-5 shadow-lg overflow-hidden">
                    <div class="border-l-8 border-primary">
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
                <div class="w-full bg-white rounded-xl mt-5 shadow-lg overflow-hidden">
                    <div class="border-l-8 border-primary">
                        <h2 class="text-lg text-dark font-bold text-start px-4 pt-3 pb-1">Buku 1 (satu). Analisis
                            Strategis
                            Smart City Kota Bogor</h2>
                        <button class="group mb-5"><span
                                class="px-4 group-hover:text-primary group-hover:font-semibold">Lihat Selengkapnya
                                ></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Masterplan Section End --}}

    {{-- JS Start --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope plugin -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="public/js/pagedone.js"></script>

    {{-- <script>
        // init Isotope
        var $grid = $('#product-list').isotope({
            // options
            layoutMode: 'fitRows'
        });
        // filter items on button click
        $('.filter-button-group').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    </script> --}}

    <script>
        // Navbar Fixed
        window.onscroll = function() {
            const header = document.querySelector('header');
            const fixedNav = header.offsetTop;

            if (window.pageYOffset > fixedNav) {
                header.classList.add('navbar-fixed')
            } else {
                header.classList.remove('navbar-fixed')
                header.classList.remove('text-white')
            }
        }

        // Hamburger
        const hamburger = document.querySelector('#hamburger');
        const navMenu = document.querySelector('#nav-menu')

        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle('hamburger-active');
            navMenu.classList.toggle('hidden');
        });

        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: ".multiple-slide-carousel .swiper-button-next",
                prevEl: ".multiple-slide-carousel .swiper-button-prev",
            },
            breakpoints: {
                1920: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1028: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                990: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });
    </script>
    {{-- JS End --}}
</body>

</html>
