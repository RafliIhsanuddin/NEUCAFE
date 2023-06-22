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
    <title>Dashboard | Notus Tailwind JS by Creative Tim</title>
</head>

<body class="text-blueGray-700 bg-gray-100 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav class=" shadow-xl bg-white flex flex-wrap items-center justify-between relative z-10 py-4 px-10">
            <div class=" px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <a class=" text-black mr-auto inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
                    href="../../index.html">
                    Neucafe
                </a>

                <ul class="flex list-none space-x-6">
                    <li class="items-center">
                        <a href="./kasir.html" class="text-sm uppercase py-3 font-bold block text-[#45D5A1]">
                            <i class="fas fa-tv mr-1 text-sm opacity-75"></i>
                            Kasir
                        </a>
                    </li>
                    <li class="items-center">
                        <a href="./dashboard.html"
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
                <div class="flex max-md:flex-col max-md:items-center px-1 lg:px-1 mx-auto w-full justify-center space-x-16 max-lg:space-x-10 max-md:space-x-4">
                    <div
                        class="flex flex-col  flex-wrap w-[70vh] bg-white px-6 py-4 mb-6 rounded h-fit space-y-3 text-lg max-lg:text-base">
                        <h2 class="text-2xl max-lg:text-xl font-bold mb-2">Pembayaran</h2>
                        <div class="flex justify-between">
                            <p>Tagihan</p>
                            <p>Rp20.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Pembayaran</p>
                            <p>Rp20.000</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Kembalian</p>
                            <p>Rp20.000</p>
                        </div>

                        <h2 class="text-2xl max-lg:text-xl font-bold">Metode Pembayaran</h2>
                        <div class="flex justify-between">
                            <p>Metode Pembayaran</p>
                            <select name="cars" id="cars" class="w-28 px-2 rounded-md">
                                <option value="Tunai">Tunai</option>
                                <option value="Qris">Qris</option>
                                <option value="Debit">Debit</option>
                            </select>
                        </div>

                        <div class="grow-14 pt-20 pb-4 flex flex-col space-y-3">

                            <button type="submit" onclick="tampilkanObjek()"
                                class="text-base font-semibold text-white bg-green-600 hover:bg-green-500 h-10 mx-0 rounded-md">
                                Konfirmasi Pembayaran
                            </button>
                            <button type="submit"
                                class="text-base font-semibold text-white bg-red-600 hover:bg-red-500 h-10 mx-0 rounded-md">
                                Batalkan Pembayaran
                            </button>
                        </div>

                    </div>

                    <div class="w-[55vh] min-h-[76vh] bg-white rounded-lg p-5 ">

                    </div>

                </div>
            </div>
        </div>

        <div class="absolute hidden items-center justify-center z-50 w-full h-screen bg-black/50 top-0" id="alert">
            <div class="w-[70vh] aspect-[8/5] bg-white rounded-md flex flex-col items-center space-y-4 py-8 px-6">
                <h5 class=" font-bold text-3xl">Pembayaran Berhasil!</h5>
                <img src="../../assets/img/success.png" alt="" class="object-cover w-40 h-40">
                <button type="submit" class="text-xl font-semibold text-white bg-green-500 hover:bg-green-600 py-2 w-full mx-4 rounded-md">
                    Cetak Struk
                </button>
            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        function tampilkanObjek() {
            var objek = document.getElementById("alert");
            objek.style.display = "flex";
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