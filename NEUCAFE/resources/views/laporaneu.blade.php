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
  <title>Laporan</title>
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
            <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
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
        <div
          class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
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
                class="border-0 px-3 py-2 h-12  border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
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
              <a href="/dashboard"
                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                Dashboard
              </a>
            </li>

            <li class="items-center">
              <a href="/laporaneu" class="text-xs uppercase py-3 font-bold block text-[#45D5A1]">
                <i class="fas fa-tools mr-2 text-sm"></i>
                Laporan
              </a>
            </li>

            <li class="items-center">
              <a href="daftarProduk" class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
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
          <a class="text-black text-lg uppercase hidden lg:inline-block font-bold" href="./index.html">Welcome</a>
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
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48">
            </div>
          </ul>
        </div>
      </nav>

      <!-- Header -->
      <div class="relative md:pt-32 pb-8 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-[78vh] pb-8">
              <div class="rounded-t mb-0 px-6 pt-7 pb-4 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex justify-between">
                    <h3 class="font-bold text-xl text-black">
                      Detail Penjualan
                    </h3>
                    <h3 class="font-bold text-xl text-black">
                      {{ isset($monthName) ? $monthName : 'Januari' }}  
                    </h3>
                    <form method="POST" action="{{ route('laporan') }}">
                      @csrf
                      <input type="month" id="bdaymonth" name="bdaymonth" class="rounded-md h-8">
                      <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </form>
                  </div>
                </div>
                <div class="flex mx-4 my-6">
                  <!-- INI card card -->
                  <div class="flex w-full flex-wrap justify-between items-center">
                    <div class="flex w-[30%] h-24 rounded-md overflow-hidden shadow-md">
                      <div class="flex w-6 h-full bg-red-600"></div>
                      <div class="flex flex-col items-left px-4 py-3 space-y-1">
                        <h5>Total Penjualan</h5>
                        <h2 class=" font-semibold text-xl">{{ $totalHargabeli }}</h2>
                      </div>
                    </div>
                    <div class="flex w-[30%] h-24 rounded-md overflow-hidden shadow-md">
                      <div class="flex w-6 h-full bg-yellow-500"></div>
                      <div class="flex flex-col items-left px-4 py-3 space-y-1">
                        <h5>Total Pembayaran</h5>
                        <h2 class=" font-semibold text-xl">{{ $totaltagihan }}</h2>
                      </div>
                    </div>
                    <div class="flex w-[30%] h-24 rounded-md overflow-hidden shadow-md">
                      <div class="flex w-6 h-full bg-green-600"></div>
                      <div class="flex flex-col items-left px-4 py-3 space-y-1">
                        <h5>Jumlah Transaksi</h5>
                        <h2 class=" font-semibold text-xl"> {{ $transactionCount }} </h2>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="block w-full overflow-x-auto lg:px-8">
                <!-- Projects table -->
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead class=" sticky top-0 bg-green-500 text-white">
                    <tr>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        No
                      </th>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Nama Customers
                      </th>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Waktu Order
                      </th>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Penjualan
                      </th>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-100">
                        Metode
                      </th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($transactions as $transaction)

                    <!-- OUTPUT DAFTAR PRODUKNYA, UNTUK SEMENTARA YANG IMAGENYA BIARIN AJA DULU -->
                    <tr class="@if($loop->iteration%2 === 0) bg-gray-100 @else bg-gray-200 @endif">
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      {{ $loop->iteration }}
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      {{ $transaction->nama_customer }}
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      {{ $transaction->waktu_order }}
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      {{ $transaction->total_tagihan }}
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      {{ $transaction->metode_pembayaran }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="w-full">
              <div class="relative flex flex-col min-w-0 break-words bg-sky-950 bg-bl w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex justify-between">
                      <h3 class="font-bold text-xl text-white">
                        Grafik Penjualan Produk
                      </h3>
                      <h3 class="font-bold text-xl text-white">
                      {{ isset($monthNameBar) ? $monthNameBar : 'Januari' }}  
                      </h3>
                    <form method="POST" action="{{ route('laporan') }}">
                      @csrf
                      <input type="month" id="bdaymonth" name="bdaymonthbar" class="rounded-md h-8">
                      <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </form>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-[350px]">
                    <canvas id="bar-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex justify-between">
                      <h3 class="font-bold text-xl text-black">
                        Grafik Penjualan
                      </h3>
                      <h3 class="font-bold text-xl text-black">
                        2023
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-[350px]">
                    <canvas id="line-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  @php
    $january2023 = isset($january2023) ? $january2023 : 0;
    $february2023 = isset($february2023) ? $february2023 : 0;
    $march2023 = isset($march2023) ? $march2023 : 0;
    $april2023 = isset($april2023) ? $april2023 : 0;
    $may2023 = isset($may2023) ? $may2023 : 0;
    $june2023 = isset($june2023) ? $june2023 : 0;
    $july2023 = isset($july2023) ? $july2023 : 0;
    $august2023 = isset($august2023) ? $august2023 : 0;
    $september2023 = isset($september2023) ? $september2023 : 0;
    $october2023 = isset($october2023) ? $october2023 : 0;
    $november2023 = isset($november2023) ? $november2023 : 0;
    $december2023 = isset($december2023) ? $december2023 : 0;

  @endphp





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

    (function () {
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
            "November",
            "Desember"
          ],
          datasets: [
            {
              label: new Date().getFullYear(),
              fill: false,
              backgroundColor: "red",
              borderColor: "#4c51bf",
              data: [
                {{ $january2023 }},
                {{ $february2023 }},
                {{ $march2023 }},
                {{ $april2023 }},
                {{ $may2023 }},
                {{ $june2023 }},
                {{ $july2023 }},
                {{ $august2023 }},
                {{ $september2023 }},
                {{ $october2023 }},
                {{ $november2023 }},
                {{ $december2023 }}
              ]
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
            xAxes: [
              {
                ticks: {
                  fontColor: "rgba(0,0,0,.7)"
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
              }
            ],
            yAxes: [
              {
                ticks: {
                  fontColor: "rgba(0,0,0,.7)"
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
                  color: "rgba(0, 0, 0, 0.15)",
                  zeroLineColor: "rgba(33, 37, 41, 0)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ]
          }
        }
      };
      var ctx = document.getElementById("line-chart").getContext("2d");
      window.myLine = new Chart(ctx, config);

      /* Bar Chart */
      config = {
        type: "horizontalBar", // Mengganti tipe grafik menjadi horizontalBar
        data: {
          labels: [ //ini label nama produknya
            @foreach ($jumlahTotalproduk as $totalproduk)
            "{{ $totalproduk->nama }}",
            @endforeach
          ],
          datasets: [
            {
              label: new Date().getFullYear() - 1,
              fill: false,
              backgroundColor: "#4c51bf",
              borderColor: "#4c51bf",
              data: [
                @foreach ($jumlahTotalproduk as $totalproduk)
                {{ $totalproduk->total_quantity }},
                @endforeach
            ], //ini data jumlah produk yang terjual
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
              fontColor: "rgba(255,255,255,1)"
            },
            align: "end",
            position: "bottom"
          },
          scales: {
            xAxes: [
              {
                ticks: {
                  fontColor: "rgba(255,255,255)"
                },
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Value"
                },
                gridLines: {
                  borderDash: [2],
                  drawBorder: false,
                  borderDashOffset: [2],
                  color: "rgba(255,255,255, 0.5)",
                  zeroLineColor: "rgba(255,255,255, 0.5)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ],
            yAxes: [
              {
                ticks: {
                  fontColor: "rgba(255,255,255)"
                },
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Month"
                },
                gridLines: {
                  borderDash: [2],
                  drawBorder: false,
                  borderDashOffset: [2],
                  color: "rgba(255,255,255, 0.3)",
                  zeroLineColor: "rgba(255,255,255, 0.3)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ]
          }
        }
      };

      ctx = document.getElementById("bar-chart").getContext("2d");
      window.myBar = new Chart(ctx, config);
    })();
  </script>
</body>

</html>