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

<body class="text-blueGray-700 bg-gray-50 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav
            class=" shadow-xl bg-white flex flex-wrap items-center justify-between relative z-10 py-4 px-10">
            <div
                class=" px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <a class=" text-black mr-auto inline-block whitespace-nowrap text-lg uppercase font-bold p-4 px-0"
                    href="../../index.html">
                    Neucafe
                </a>

                <ul class="flex list-none space-x-6">
                    <li class="items-center">
                        <a href="./dashboard.html"
                            class="text-sm uppercase py-3 font-bold block text-[#45D5A1]">
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
            <div class="relative pb-8 pt-12">
                <div class="flex px-4 md:px-10 mx-auto w-full">
                    <form action="" class="flex flex-wrap w-[60%] mb-6 rounded h-fit ">
                        <div
                            class="w-36 h-40 my-3 mx-3 bg-white hover:bg-white/10 rounded-md flex flex-col items-center justify-around cursor-pointer shadow-lg focus:shadow-none">
                            <h5>Americano</h5>
                            <div class="w-20 h-20 bg-gray-200">
                                <!-- image -->
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        <div
                            class="w-36 h-40 my-3 mx-3 bg-white rounded-md flex flex-col items-center justify-around cursor-pointer shadow-lg focus:shadow-none">
                            <h5>Americano</h5>
                            <div class="w-20 h-20 bg-gray-200">
                                <!-- image -->
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        <div
                            class="w-36 h-40 my-3 mx-3 bg-white rounded-md flex flex-col items-center justify-around cursor-pointer shadow-lg focus:shadow-none">
                            <h5>Americano</h5>
                            <div class="w-20 h-20 bg-gray-200">
                                <!-- image -->
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        <div
                            class="w-36 h-40 my-3 mx-3 bg-white rounded-md flex flex-col items-center justify-around cursor-pointer shadow-lg focus:shadow-none">
                            <h5>Americano</h5>
                            <div class="w-20 h-20 bg-gray-200">
                                <!-- image -->
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        <div
                            class="w-36 h-40 my-3 mx-3 bg-white rounded-md flex flex-col items-center justify-around cursor-pointer shadow-lg focus:shadow-none">
                            <h5>Americano</h5>
                            <div class="w-20 h-20 bg-gray-200">
                                <!-- image -->
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        <div
                            class="w-36 h-40 my-3 mx-3 bg-white rounded-md flex flex-col items-center justify-around cursor-pointer shadow-lg focus:shadow-none">
                            <h5>Americano</h5>
                            <div class="w-20 h-20 bg-gray-200">
                                <!-- image -->
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        
                    </form>
                    <div class="w-[40%] h-[78vh] bg-white rounded-lg p-5 "> 
                        <div class="w-full h-20">
                            <h2 class=" font-semibold text-2xl text-center">Order Menu</h2>
                            <input type="text" class="w-32 h-7 rounded-full mt-2 bg-gray-100">
                        </div>
                        <hr class="w-full bg-black h-[1.5px]">
                        <div class="h-[48vh] w-full py-4 overflow-auto">

                            <div class="flex w-full h-24 rounded-xl overflow-hidden border-[1px] border-gray-300 mb-2">
                                <div class="w-6 h-full bg-green-500"></div>
                                <div class="flex justify-between items-center w-full h-full bg-white px-4">
                                    <div class="flex">
                                        <div class="w-16 h-16 bg-gray-100 mr-2"></div>
                                        <div>
                                            <h5 class="font-semibold">Americano</h5>
                                            <p class=" text-xs font-medium text-gray-700">Rp18.000</p>
                                            <input type="text" class="h-3 w-40 text-xs rounded-md" placeholder="Tambahkan Catatan">
                                        </div>
                                    </div>
                                    <div class="w-28 items-center justify-center flex">
                                        <button type="submit" class="flex items-center justify-center w-8 h-8 bg-green-500 text-white text-2xl font-bold"> - </button>
                                        <p class="w-8 h-8 mx-2 text-center">3</p>
                                        <button type="submit" class="flex items-center justify-center w-8 h-8 bg-green-500 text-white text-2xl font-bold"> + </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr class="w-full bg-black h-[1.5px] mt-2 mb-4">

                        <div class="flex justify-between items-center w-full h-20 bg-green-500 rounded-xl px-6 py-2">
                            <div>
                            <h4 class="font-medium text-lg text-[#010101]">4 items</h4>
                            <h2 class=" font-semibold text-2xl text-white">Rp40.000</h2>
                            </div>
                            <div>
                                <button class="w-28 h-10 bg-white font-semibold text-xl rounded-xl text-green-500 hover:bg-gray-100">Pesan</button>
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