<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Produk</title>
</head>

<!-- Peringatan Berhasil -->
@if (Session::has('success'))
<div class="pt-3">
    <div class="bg-green-500 text-white text-center py-2 px-4">
        {{ Session::get('success') }}
    </div>
</div>
@endif

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
                    href="#">
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
                                    href="#">
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
                                class="px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
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
                            <a href="/laporan"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-tools mr-2 text-sm"></i>
                                Laporan
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="daftarProduk"
                                class="text-xs uppercase py-3 font-bold block text-[#45D5A1]">
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
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-map-marked mr-2 text-sm"></i>
                                Informasi
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
                        href="#">Welcome, Juan</a>
                    <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                        <div class="relative flex w-full flex-wrap items-stretch">
                            <span
                                class="z-10 h-full leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                    class="fas fa-search"></i></span>
                            <input type="text" placeholder="Search here..."
                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
                        </div>
                    </form>
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span
                                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                        alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                        src="../../assets/img/team-1-800x800.jpg" /></span>
                            </div>
                        </a>
                        <div
                            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48">
                        </div>
                    </ul>
                </div>
            </nav>

            <!-- Header -->
            <div class="relative md:pt-32 pb-8 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-[78vh]">
                            <div class="rounded-t mb-0 px-6 py-7 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-bold text-xl text-black">
                                            Daftar Produk
                                        </h3>
                                    </div>
                                    <div class="flex flex-row flex-wrap items-center lg:ml-auto mr-3 text-white">
                                        <div class="relative flex w-full flex-wrap items-stretch">

                                            <!-- INI LINK PINDAH HALAMAN KE TAMBAH PRODUK -->
                                            <a href="tambahProduk"
                                                class="border-0 px-3 py-2 text-white relative rounded-md text-base shadow font-semibold outline-none focus:outline-none w-full bg-green-600 hover:bg-green-500">
                                                + Tambah Produk
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mx-4 mt-2">

                                    <!-- INI FORM PENCARIAN -->
                                    <form class="md:flex w-[60vh] flex-row flex-wrap items-center" action="{{ url('daftarProduk') }}" method="get">
                                        <div class="relative flex w-full flex-wrap items-stretch">
                                            <span
                                                class="z-10 h-full leading-snug font-normal text-center text-blueGray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                                    class="fas fa-search"></i></span>
                                        
                                            <input type="search" placeholder="Search here..." name="katakunci" value="{{ Request::get('katakunci') }}"
                                                class="border-0 px-3 py-3 placeholder-blueGray-900 text-blueGray-700 relative bg-gray-100 rounded text-sm shadow outline-none focus:outline-none w-full pl-10" />
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th
                                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            No
                                        </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Nama Produk
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Kategori
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Id Produk
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Stok
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Harga Beli
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Harga Jual
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Status
                                            </th>
                                            <th
                                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       {{-- digunakan untuk menambah No di tampil data sesuai dgn banyak data  --}}
                                        <!-- OUTPUT DAFTAR PRODUKNYA, UNTUK SEMENTARA YANG IMAGENYA BIARIN AJA DULU -->
                                        @foreach ($data as $item)
                                            
                                        <tr>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $loop->iteration }}
                                            </td>
                                            <th
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-left flex items-center">
                                                <img src="{{ url('imgProducts/' . $item->gambar_produk) }}"
                                                    class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                                <span class="ml-3 mr-2 font-bold text-blueGray-600">
                                                    {{ $item->nama }}
                                                </span>
                                            </th>
                                           
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $item->kategori }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $item->id_produk }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $item->stok }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $item->harga_beli }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $item->harga_jual }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            @if ($item->status == 'Success')
                                                <i class="fas fa-circle text-green-500 mr-2"></i>
                                                Tampil di menu
                                            @elseif ($item->status == 'Pending')
                                                <i class="fas fa-circle text-yellow-500 mr-2"></i>
                                                Menunggu
                                            @endif
                                            </td>

                                            <!-- NAH INI LINK BUAT HAPUS PRODUKNYA, DAN PINDAH KE HALAMAN DETAIL PRODUK -->
                                            <td
                                                class="border-t-0 px-2 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                                <a href="#" class="text-blueGray-500 block py-1 px-3"
                                                    onclick="openDropdown(event,'table-light-1-dropdown')">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                                                    id="table-light-1-dropdown">
                                                    <a href="{{ url('/daftarProduk') }}{{ '/' }}{{ $item->id_produk }}{{ '/' }}{{ 'edit' }}"
                                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 text-blueGray-700">Edit</a>
                                                    <a href="{{ url('/daftarProduk') }}{{ '/' }}{{ $item->id_produk }}"
                                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 text-blueGray-700">Detail</a>
                                                                            {{-- Penghapusan data --}}
                                                    <form onsubmit="return confirm('Yakin akan melakukan aksi delete data')" action="{{ url('daftarProduk/' . $item->id_produk) }}" method="POST"> 
                                                        @csrf
                                                        @method('DELETE')
                                                            <button  type ='submit' name='submit'
                                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent hover:bg-gray-100 text-blueGray-700">Hapus</button>
                                                    </form>
                                                                            {{-- Penghapusan data --}}
                                                </div>
                                            </td>
                                        </tr> @endforeach
                                    </tbody>
                                </table>
                                {{ $data->withQueryString()->links() }} {{-- paginasi untuk mengarah ke halaman lain dengan data yang berbeda --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
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

        (function() {
            /* Chart initialisations */
            /* Line Chart */
            var config = {
                type: "line",
                data: {
                    labels: [
                        "Januari",
                        "Februari",
                        "Maret",
                        "April",
                        "Mei",
                        "Juni",
                        "Juli",
                        "Agustus",
                        "September",
                        "Oktober",
                        "November"
                    ],
                    datasets: [{
                            label: new Date().getFullYear(),
                            backgroundColor: "#5a60e0",
                            borderColor: "#5a60e0",
                            data: [65, 78, 66, 44, 56, 67, 75],
                            fill: false
                        },
                        {
                            label: new Date().getFullYear() - 1,
                            fill: false,
                            backgroundColor: "#f01111",
                            borderColor: "#f01111",
                            data: [40, 68, 86, 74, 56, 60, 87]
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: false,
                        text: "Sales Charts",
                        fontColor: "black"
                    },
                    legend: {
                        labels: {
                            fontColor: "black"
                        },
                        align: "end",
                        position: "bottom"
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                fontColor: "rgba(0, 0, 0)"
                            },
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Month",
                                fontColor: "black"
                            },
                            gridLines: {
                                display: false,
                                borderDash: [2],
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.3)",
                                zeroLineColor: "rgba(0, 0, 0, 0)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                fontColor: "rgba(0,0,0)"
                            },
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Value",
                                fontColor: "black"
                            },
                            gridLines: {
                                borderDash: [3],
                                borderDashOffset: [3],
                                drawBorder: false,
                                color: "rgba(0,0,0, 0.15)",
                                zeroLineColor: "rgba(33, 37, 41, 0)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }]
                    }
                }
            };
            var ctx = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(ctx, config);

            /* Bar Chart */
            config = {
                type: "bar",
                data: {
                    labels: [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July"
                    ],
                    datasets: [{
                            label: new Date().getFullYear(),
                            backgroundColor: "#ed64a6",
                            borderColor: "#ed64a6",
                            data: [30, 78, 56, 34, 100, 45, 13],
                            fill: false,
                            barThickness: 8
                        },
                        {
                            label: new Date().getFullYear() - 1,
                            fill: false,
                            backgroundColor: "#4c51bf",
                            borderColor: "#4c51bf",
                            data: [27, 68, 86, 74, 10, 4, 87],
                            barThickness: 8
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: false,
                        text: "Orders Chart"
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true
                    },
                    legend: {
                        labels: {
                            fontColor: "rgba(0,0,0,.4)"
                        },
                        align: "end",
                        position: "bottom"
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                            scaleLabel: {
                                display: true,
                                labelString: "Month"
                            },
                            gridLines: {
                                borderDash: [2],
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.3)",
                                zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: "Value"
                            },
                            gridLines: {
                                borderDash: [2],
                                drawBorder: false,
                                borderDashOffset: [2],
                                color: "rgba(33, 37, 41, 0.2)",
                                zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                zeroLineBorderDash: [2],
                                zeroLineBorderDashOffset: [2]
                            }
                        }]
                    }
                }
            };
            ctx = document.getElementById("bar-chart").getContext("2d");
            window.myBar = new Chart(ctx, config);
        })();
    </script>
</body>

</html>
