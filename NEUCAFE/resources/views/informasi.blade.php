HALAMAN LOGIN






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet"
        href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard | Notus Tailwind JS by Creative Tim</title>
</head>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav
            class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div
                class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="md:block text-center md:pb-2 text-black mr-0 inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
                    href="../../index.html">
                    Neucafe
                </a>
                <ul class="md:hidden items-center flex flex-wrap list-none">

                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block py-1 px-3" href="#pablo"
                            onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                    </li>

                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block" href="#pablo"
                            onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="../../assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="user-responsive-dropdown">
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                action</a><a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                else here</a>
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="#pablo"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                link</a>
                        </div>
                    </li>
                </ul>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                    id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                                    href="../../index.html">
                                    Notus Tailwind JS
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button"
                                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                    onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <form class="mt-6 mb-4 md:hidden">
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="Search"
                                class="border-0 px-3 py-2 h-12 border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                        </div>
                    </form>
                    <!-- Divider -->
                    <hr class="md:min-w-full" />
                    <!-- Heading -->
                    <h6
                        class="md:min-w-full text-black text-center text-base uppercase font-bold block pt-1 mt-4 pb-4 no-underline">
                        Orisinil Cafe
                    </h6>
                    <!-- Navigation -->

                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">
                            <a href="/dashboard" class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/laporaneu"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-tools mr-2 text-sm"></i>
                                Laporan
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/daftarProduk"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-table mr-2 text-sm"></i>
                                Daftar Produk
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/review"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-map-marked mr-2 text-sm"></i>
                                Review Pelanggan
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/info"
                                class="text-xs uppercase py-3 font-bold block text-[#45D5A1]">
                                <i class="fas fa-map-marked mr-2 text-sm"></i>
                                Informasi
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="/choose"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-map-marked mr-2 text-sm"></i>
                                Kembali
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="relative md:ml-64 bg-gray-100">
            <nav
                class="absolute top-0 left-0 w-full z-10 bg-white md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-black text-lg uppercase hidden lg:inline-block font-bold"
                        href="./index.html">Welcome</a>

                    <a href="{{ route('flush') }}" class="px-4 py-1 bg-green-600 hover:bg-green-500 rounded-md font-semibold text-white text-center">Logout</a>
                </div>
            </nav>

            <!-- Informasi Bisnis -->
            <div class="relative md:pt-32 pb-8 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">
                        <div class="text-xl font-bold text-black ml-2">
                            Informasi Bisnis
                        </div>
                        <hr class="mt-2 mb-6">
                        <div class="flex w-full mx-2">
                            <div class="flex flex-col items-center mr-7">
                                <div class="w-40 h-40 bg-slate-400 rounded-md">
                                    <!-- image -->
                                </div>
                            </div>

                            <div class="flex flex-col space-y-6 w-32 text-base font-medium">
                                <p>Nama Cafe</p>
                                <p>No HandPhone</p>
                                <p>Alamat</p>
                            </div>
                            <div class="flex flex-col space-y-6 w-6 text-base font-medium">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>


                            <!-- Output Informasi Bisnis -->
                            <div class="flex flex-col space-y-3.5 w-96 text-base font-medium">
                                <p name="" class="h-8 py-1 rounded-md">
                                {{ session('outlets')->nama }}
                                    
                                </p>
                                <p name="" class="h-8 py-1 rounded-md">
                                    {{ session('datas')->noTelp }}
                                </p>
                                <p name="" class="h-8 py-1 rounded-md">
                                {{ session('outlets')->alamat }}
                                </p> 

                            </div>

                            <!-- BUTTON INI BIARIN AJA, INI BUAT NAMPILIN FORM EDIT AKUN -->
                            <button type="submit"
        onclick="tampilkanFormInformasi()"
        class="text-base font-semibold text-white bg-green-600 hover:bg-green-500 h-8 w-28 mx-4 rounded-md">
    Edit Bisnis
    </button>
    </div>
    </div>
    </div>

    <div class="px-4 md:px-10 mx-auto w-full">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">
            <div class="text-xl font-bold text-black ml-2">
                Informasi Akun
            </div>
            <hr class="mt-2 mb-6">
            <div class="flex w-full mx-2">

                <div class="flex flex-col space-y-6 w-32 text-base font-medium">
                    <p>Email</p>
                    <p>Kode Manajer</p>
                </div>
                <div class="flex flex-col space-y-6 w-6 text-base font-medium">
                    <p>:</p>
                    <p>:</p>
                </div>


                <!-- Output Informasi Akun -->
                <div class="flex flex-col space-y-3.5 w-96 text-base font-medium">
                        <p name="" class="h-8 py-1 rounded-md">
                            {{ session('datas')->email }}
                        </p>
                        <p name="" id="" class="h-8 py-1 rounded-md">
                            {{ session('datas')->kodeManajer }}
                        </p>
                </div>

                <!-- BUTTON INI BIARIN AJA, INI BUAT NAMPILIN FORM EDIT AKUN -->
                <button type="submit" onclick="tampilkanFormAkun()"
                    class="text-base font-semibold text-white bg-green-600 hover:bg-green-500 h-8 w-28 mx-4 rounded-md">
                    Edit Akun
                </button>

            </div>
        </div>
    </div>

    </div>
    </div>


    <!-- Form Edit Informasi Bisnis -->
    <div class="absolute top-0 h-screen w-full bg-black/50 z-50 hidden items-center justify-center tutup"
        id="formEditInformasi">
        <div
            class="relative flex flex-col min-w-0 break-words w-[150vh] mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">
            <div class="text-xl font-bold text-black ml-2">
                Edit Informasi Bisnis
            </div>
            <hr class="mt-2 mb-6">
            <div class="flex w-full mx-2">
                <div class="flex flex-col items-center mr-7">
                    <div class="w-40 h-40 bg-slate-400 rounded-md">
                        <!-- image -->
                    </div>
                </div>

                <div class="flex flex-col space-y-6 w-32 text-base font-medium">
                    <p>Nama Cafe</p>
                    <p>No HandPhone</p>
                    <p>Alamat</p>
                </div>
                <div class="flex flex-col space-y-6 w-6 text-base font-medium">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>`
                </div>

                <!-- Input Informasi Bisnis -->
                <form action="editatas" method="POST">
                        <input type="hidden" name="idbar" value="{{ session('id') }}">
                        <div class="flex flex-col space-y-3.5 w-96 text-base font-medium">
                            <input type="text" name="nama" value="{{ session('outlets')->nama }}"
                                class="h-8 py-1 rounded-md border-gray-300 bg-gray-100 border-[2px]">
                            <input type="number" name="telp" value="{{ session('datas')->noTelp }}"
                                class="h-8 py-1 rounded-md border-gray-300 bg-gray-100 border-[2px]">
                            <input type="text" name="alamat" value="{{ session('outlets')->alamat }}"
                                class="h-8 py-1 rounded-md border-gray-300 bg-gray-100 border-[2px]">
                            <input type="submit" value="Simpan Perubahan"
                                class="py-1 text-base font-semibold text-white bg-green-600 hover:bg-green-500 h-9 px-4 mx-4 rounded-md">
                        </div>
                </form>

                <form action="">
                    <!-- INPUT BUTTON INI BUAT SAVE DATA -->

                </form>
            </div>

            <!-- BUTTON INI BIARIN AJA, INI BUAT NUTUP FORM EDIT AKUN -->
            <button type="submit" onclick="tutupForm()"
                class="w-10 h-10 bg-gray-500 rounded-full top-3 right-5 absolute mx-auto text-white font-bold">X</button>
        </div>
    </div>

    <!-- Form Edit Akun -->
    <div class="absolute top-0 h-screen w-full bg-black/50 z-50 hidden items-center justify-center" id="formEditAkun">
        <div
            class="relative flex flex-col min-w-0 break-words w-[90vh] mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">

            <div class="text-xl font-bold text-black ml-2">
                Informasi Akun
            </div>
            <hr class="mt-2 mb-6">
            <div class="flex w-full mx-2">

                <div class="flex flex-col space-y-6 w-32 text-base font-medium">
                    <p>Password</p>
                    <p>Kode Manajer</p>
                </div>
                <div class="flex flex-col space-y-6 w-6 text-base font-medium">
                    <p>:</p>
                    <p>:</p>
                </div>


                <!-- Output Informasi Akun -->
                <form action="editbaw" method="POST">
                    <input type="hidden" name="idbaw" value="{{ session('id') }}">
                        <div class="flex flex-col space-y-3.5 w-72 text-base font-medium">
                            <input type="text" name="passbaw" value=""
                                class="h-8 py-1 rounded-md border-gray-300 bg-gray-100 border-[2px]">
                            <input type="number" name="kode" value="{{ session('datas')->kodeManajer }}"
                                class="h-8 py-1 rounded-md border-gray-300 bg-gray-100 border-[2px]">
                            <input type="submit" value="Simpan Perubahan"
                                class="text-base font-semibold text-white bg-green-600 hover:bg-green-500 h-8 px-4 mx-4 rounded-md">
                        </div>
                </form>

                <form action="">
                    <!-- INPUT BUTTON INI BUAT SAVE DATA -->
                </form>
            </div>

            <!-- BUTTON INI BIARIN AJA, INI BUAT NUTUP FORM EDIT AKUN -->
            <button type="submit" onclick="tutupForm()"
                class="w-10 h-10 bg-gray-500 rounded-full top-3 right-5 absolute mx-auto text-white font-bold">X</button>
        </div>
    </div>




    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        function tampilkanFormInformasi() {
            var objek = document.getElementById("formEditInformasi");
            objek.style.display = "flex";
        }

        function tampilkanFormAkun() {
            var objek = document.getElementById("formEditAkun");
            objek.style.display = "flex";
        }

        function tutupForm() {
            var objek1 = document.getElementById("formEditAkun");
            var objek2 = document.getElementById("formEditInformasi");
            objek1.style.display = "none";
            objek2.style.display = "none";
        }
    </script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function() {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>
    </body>

</html>
