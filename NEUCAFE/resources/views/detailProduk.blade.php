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
    <title>Detail Produk</title>
</head>

<body class="text-blueGray-700 bg-gray-100 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
    <nav
      class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
      <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
          class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
          type="button" onclick="toggleNavbar('example-collapse-sidebar')">
          <i class="fas fa-bars">=</i>
        </button>
        <a class="md:block text-center md:pb-2 text-black mr-0 inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
          href="../../index.html">
          Neucafe
        </a>
        <p></p>
        <div
          class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
          id="example-collapse-sidebar">
          <div class="md:min-w-full md:hidden block pb-4 border-b border-solid border-blueGray-200">
            <div class="flex flex-wrap">
              <div class="w-6/12 flex justify-start">
                <button type="button"
                  class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                  onclick="toggleNavbar('example-collapse-sidebar')">
                  <i class="fas fa-times">x</i>
                </button>
              </div>
            </div>
          </div>

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
        <div class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
          <p class="text-black text-lg uppercase hidden lg:inline-block font-bold">Welcome </p>
          <a href="{{ route('flush') }}" class="px-4 py-1 bg-green-600 hover:bg-green-500 rounded-md font-semibold text-white text-center">Logout</a>
        </div>
      </nav>
            <!-- Header -->
            <div class="relative md:pt-32 pb-8 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">
                        <div class="text-xl font-bold text-black ml-2">
                            Detail Produk
                        </div>
                        <hr class="mt-2 mb-6">
                        <div class="flex w-full mx-2">
                            <div class="w-40 h-40 bg-slate-400 rounded-md mr-6">
                                <!-- image -->
                                <figure class="image-container w-40 h-40">
                                    <img src ="{{asset('imgProducts/'.$data->gambar_produk)}}" id="chosen-image" class="w-40 h-40 bg-slate-500">
                                </figure>
                            </div>

                            <div class="flex flex-col space-y-3 w-32 text-base font-medium">
                                <p>Nama</p>
                                <p>Kategori</p>
                                <p>Jumlah Stok</p>
                                <p>Harga Jual</p>
                                <p>Harga Beli</p>
                                <p>Deskripsi</p>
                                <p>Status</p>
                            </div>
                            <div class="flex flex-col space-y-3 w-6 text-base font-medium">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>

                            <!-- OUTPUT DETAIL PRODUK -->
                            <div class="flex flex-col space-y-3 w-96 text-base font-medium">
                                <p>{{ $data->nama }}</p>
                                <p>{{ $data->kategori }}</p>
                                <p>{{ $data->stok }}</p>
                                <p>{{ $data->harga_jual }}</p>
                                <p>{{ $data->harga_beli }}</p>
                                <p>{{ $data->deskripsi }}</p>
                                <p class="text-[10px]">
                                    <i class="fas fa-circle text-green-500 mr-2"></i>
                                    <span class="text-base">Tampil di menu</span>
                                </p>
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
    </script>
</body>

</html>
