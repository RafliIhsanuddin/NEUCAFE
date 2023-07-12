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
    <title>Kasir</title>
</head>

<body class="text-blueGray-700 bg-gray-50 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav class=" shadow-xl bg-white flex flex-wrap items-center justify-between relative z-10 py-2 px-10">
            <div
                class=" px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <a class=" text-black mr-auto inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
                    href="../../index.html">
                    Neucafe
                </a>

                <ul class="flex list-none space-x-6">
                    <li class="items-center">
                        <a href="./kasir"
                            class="text-sm uppercase py-3 font-bold block text-[#45D5A1]">
                            <i class="fas fa-tv mr-1 text-sm opacity-75"></i>
                            Kasir
                        </a>
                    </li>
                    <li class="items-center">
                        <a href="./riwayat"
                            class="text-sm uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                            <i class="fas fa-tv mr-1 text-sm opacity-75"></i>
                            Riwayat
                        </a>
                    </li>
                    <li class="items-center">
                        <a href="./choose"
                            class="text-sm uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                            <i class="fas fa-tv mr-1 text-sm opacity-75"></i>
                            Kembali
                        </a>
                    </li>

                </ul>
                
            </div>
        </nav>

        <div class="relative">

            <!-- Informasi Bisnis -->
            <div class="relative pb-8 pt-12">
                <div class="min-[860px]:flex max-[860px]:justify-center px-4 md:px-10 mx-auto w-full">
                    <div class="flex flex-wrap w-full mb-6 rounded h-fit ">
                    
                        @foreach ($items as $item)
                            <div class="relative lg:w-36 lg:h-40 w-24 h-28 m-3 text-center shadow-lg focus:shadow-none flex flex-col items-center justify-center">
                                <h5 class="max-lg:text-sm font-semibold">{{ $item->nama }}</h5>
                                <img src="{{asset('imgProducts/'.$item->gambar_produk)}}" alt="foto"class="lg:w-20 lg:h-20 w-12 h-12 bg-gray-200 my-1">
                                <h5 class="max-lg:text-xs">Rp{{ number_format($item->harga_jual, 0, '.', '.') }}</h5>
                                <a href={{url('kasir/tambah/'.$item->id_produk)}} class="absolute w-full h-full"></a>
                            </div>
                        @endforeach

                    </div>
                    <form action="{{url('konfirmasiPembayaran')}}/{{$transaksi->id_transaksi}}" method="post" 
                        class="md:w-[45rem] w-full h-auto bg-white rounded-md p-5 ">
                        @csrf 
                        <div class="w-full h-20">
                            <h2 class=" font-semibold text-2xl text-center">Order Menu</h2>
                            <input type="text" class=" px-4 py-1 rounded-md mt-2 bg-gray-100 outline-none" name="nama_customers" placeholder="Nama Customers" required>
                        </div>
                        <hr class="w-full bg-black h-[1.5px]">
                        <div class="h-[23rem] w-full py-4 overflow-auto">
                            
                            @foreach ($cart as $item)
                            <div class="flex w-full h-16 rounded-md overflow-hidden border-[1px] border-gray-300 mb-2">
                                <div class="w-6 h-full bg-green-500"></div>
                                <div class="flex justify-between items-center w-full h-full bg-white pl-2 pr-4 space-x-4">
                                    <div class="flex flex-col justify-center">
                                        <h5 class="font-semibold">{{ $item->nama }}</h5>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <a href="{{url('kasir/kurangStok/'.$item->id_relasi)}}" class="kurang bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"> - </a>
                                        <p class="w-10 text-center">{{$item->quantity}}</p>
                                        <a href="{{url('kasir/tambahStok/'.$item->id_relasi)}}" class="tambah bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">+</a>
                                        <a href={{url('kasir/hapus/'.$item->id_relasi)}} class="ml-6"><i>X</i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <hr class="w-full bg-black h-[1.5px] mt-2 mb-4">

                        <div class="flex justify-between items-center w-full h-20 bg-green-500 rounded-md px-6 py-2">
                            <div>
                            <h4 class="font-medium text-lg text-[#010101]">{{$total}} items</h4>
                            <h2 class=" font-semibold text-2xl text-white">Rp {{number_format($transaksi->total_tagihan,0,'.','.')}}</h2>
                            </div>
                            <div>
                                <button type="submit" class="w-28 h-10 bg-white font-semibold text-xl rounded-md text-green-500 hover:bg-gray-100">Pesan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        // Fungsi untuk menangani klik tombol tambah
    function tambahQuantity(input) {
        var value = parseInt(input.value);
        input.value = value + 1;
    }

    // Fungsi untuk menangani klik tombol kurang
    function kurangQuantity(input) {
        var value = parseInt(input.value);
        if (value > 1) {
            input.value = value - 1;
        }
    }

    // Mendapatkan semua elemen tombol tambah dan kurang
    var tombolTambah = document.getElementsByClassName('tambah');
    var tombolKurang = document.getElementsByClassName('kurang');

    // Menambahkan event listener pada setiap tombol tambah
    for (var i = 0; i < tombolTambah.length; i++) {
        tombolTambah[i].addEventListener('click', function() {
            var input = this.parentNode.querySelector('input[type="text"]');
            tambahQuantity(input);
        });
    }

    // Menambahkan event listener pada setiap tombol kurang
    for (var i = 0; i < tombolKurang.length; i++) {
        tombolKurang[i].addEventListener('click', function() {
            var input = this.parentNode.querySelector('input[type="text"]');
            kurangQuantity(input);
        });
    }
    </script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function () {
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