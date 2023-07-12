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
    <title>Konfirmasi Pembayaran</title>
</head>

<body class="text-blueGray-700 bg-gray-100 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav class=" shadow-xl bg-white flex flex-wrap items-center justify-between relative z-10 py-2 px-10">
            <div class=" px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <a class=" text-black mr-auto inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
                    href="../../index.html">
                    Neucafe
                </a>

                <ul class="flex list-none space-x-6">
                    <li class="items-center">
                        <a href="kasir" class="text-sm uppercase py-3 font-bold block text-[#45D5A1]">
                            <i class="fas fa-tv mr-1 text-sm opacity-75"></i>
                            Kasir
                        </a>
                    </li>
                    <li class="items-center">
                        <a href="riwayat"
                            class="text-sm uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                            <i class="fas fa-tv mr-1 text-sm opacity-75"></i>
                            Riwayat
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="relative">

            <!-- Informasi Bisnis -->
            <div class="relative pb-8 pt-12 px-2">
                <div class="flex max-md:flex-col max-md:items-center px-1 lg:px-1 mx-auto w-full justify-center space-x-16 max-lg:space-x-10 max-md:space-x-0">
                    <div class="w-[55vh] max-md:w-full h-fit bg-white rounded-lg p-5 border-[2px] border-gray-300 mb-6 ">
                        <h5 class="text-xl max-lg:text-xl font-bold mb-2">Detail Transaksi</h5>
                        <table>
                            <tr>
                                <td>Customer </td>
                                <td> :</td>
                                <td>{{$transaksi->nama_customer}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>{{date('H:i:s d-m-Y', strtotime($transaksi->waktu_order))}}</td>
                            </tr>
                        </table>
                        <hr class="my-2">

                        <table class="w-full">
                            @foreach ($produk as $item)
                                
                            <tr class="text-left">
                                <th>{{$item->nama}}</th>
                            </tr>
                            <tr>
                                <td>{{$item->quantity}}x</td>
                                <td>Rp {{ number_format($item->harga_jual, 0, '.', '.') }}</td>
                                <td class="text-right">Rp {{number_format($item->quantity * $item->harga_jual, 0, '.', '.')}}</td>
                            </tr>
                            
                            @endforeach
                        </table>
                        <hr class="my-1">

                        <table class="w-full">
                            <tr>
                                <td>Jumlah Item</td>
                                <td class="text-left">:</td>
                                <td class="text-right">{{$totalQuantity}}</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-lg">Total</td>
                                <td class="text-left">:</td>
                                <td class="text-right font-semibold text-lg">Rp {{ number_format($transaksi->total_tagihan, 0, '.', '.') }}</td>
                            </tr>
                            
                        </table>

                    </div>
                    
                    <form action="{{url('konfirmasiPembayaran/checkout')}}/{{$transaksi->id_transaksi}}" method="POST"
                        class="flex flex-col flex-wrap w-[70vh] max-md:w-full bg-white px-6 py-4 rounded h-fit space-y-3 text-lg max-lg:text-base">
                        @csrf
                        <h2 class="text-2xl max-lg:text-xl font-bold mb-2">Pembayaran</h2>
                        <div class="flex justify-between">
                            <p>Tagihan</p>
                            <p>Rp <span id = "tagihan">{{ $transaksi->total_tagihan}}</span></p>
                        </div>
                        <div class="flex justify-between">
                            <p>Pembayaran</p>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">Rp</span>
                                </div>
                                <input name="bayar" type="number" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-12 border-gray-300 rounded-md" id="pembayaran" oninput="updateResult()" placeholder="0,00">
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <p>Kembalian</p>
                            <p><span id="result">Rp {{ number_format($transaksi->total_tagihan, 0, '.', '.') }}</span></p>
                        </div>

                        <h2 class="text-2xl max-lg:text-xl font-bold">Metode Pembayaran</h2>
                        <div class="flex justify-between">
                            <p>Metode Pembayaran</p>
                            <select name="metode" id="metode" class="w-32 border-[1px] text-sm px-2 rounded-md">
                                <option value="Tunai">Tunai</option>
                                <option value="Qris">Qris</option>
                                <option value="Debit">Debit</option>
                            </select>
                        </div>

                        <div class="grow-14 pt-20 pb-4 flex flex-col space-y-3">

                            <button name="button1" type="submit"
                                class="text-base font-semibold text-white bg-green-600 hover:bg-green-500 h-10 mx-0 rounded-md">
                                Konfirmasi Pembayaran
                            </button>
                            <button name="button2" type="submit"
                                class="text-base font-semibold text-white bg-red-600 hover:bg-red-500 h-10 mx-0 rounded-md">
                                Batalkan Pembayaran
                            </button>
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
        let result = 0;
        function formatRupiah(angka) {
            const formatted = angka.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
            return formatted.replace(/\,00$/, '');
        }
        function updateResult() {
            const pembayaran = document.getElementById('pembayaran');
            const tagihan = document.getElementById('tagihan');
            result = parseInt(tagihan.textContent) - Number(pembayaran.value);
            const resultElement = document.getElementById('result');
            resultElement.textContent = formatRupiah(result) ;
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