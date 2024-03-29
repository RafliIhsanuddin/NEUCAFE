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
  <title>Dashboard NEUCAFE</title>
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
        <div class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
          <p class="text-black text-lg uppercase hidden lg:inline-block font-bold">Welcome </p>
          <a href="{{ route('flush') }}" class="px-4 py-1 bg-green-600 hover:bg-green-500 rounded-md font-semibold text-white text-center">Logout</a>
        </div>
      </nav>


      <!-- Header -->
      <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>
            <!-- Card stats -->
            <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-[#FFC700] rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-white uppercase font-semibold text-sm">
                          Penjualan Bulan Ini
                        </h5>
                        <span class="font-bold text-xl text-white">
                        {{ $total_tagihan_bulan }}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500 border-2 border-white">
                          <i class="far fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-black mt-4">
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-[#F01159] rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-white uppercase font-semibold text-sm">
                          Keuntungan bulan ini
                        </h5>
                        <span class="font-bold text-xl text-white">
                        {{ $difference }}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500 border-2 border-white">
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-black mt-4">
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-[#5AB8D7] rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-white uppercase font-semibold text-sm">
                          Produk Terjual bulan ini
                        </h5>
                        <span class="font-bold text-xl text-white">
                        {{ $totalQuantity }}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500 border-2 border-white">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-black mt-4">
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-[#45D5A1] rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-white uppercase font-semibold text-sm">
                          Total Transaksi bulan ini
                        </h5>
                        <span class="font-bold text-xl text-white">
                        {{ $transaksiCount }}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500 border-2 border-white">
                          <i class="fas fa-percent"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-black mt-4">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
          <div class="w-full mb-0 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
              <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-800 mb-1 text-xs font-semibold">
                      Overview
                    </h6>
                    <h2 class="text-black text-xl font-semibold">
                      Grafik Penjualan
                    </h2>
                  </div>
                </div>
              </div>
              <div class="p-4 flex-auto">
                <!-- LINE CHART, DATANYA ADA DI JAVASCRIPT BAWAH -->
                <div class="relative h-[350px]">
                  <canvas id="line-chart"></canvas>
                </div>
              </div>
            </div>
          </div>          
        </div>

        <div class="flex flex-wrap pb-6">

          <div class="w-6/12 lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-[#fff] p-5 items-center rounded mb-6 xl:mb-0 shadow-lg h-60 max-sm:h-52 justify-between">
                    <h5 class="text-black uppercase font-bold text-sm text-center">
                      Stok Terendah
                    </h5>
                    <div class="bg-gray-200 w-36 aspect-square max-sm:w-28">
                      <!-- image -->
                      <img src="" alt="" class="w-36 aspect-square max-sm:w-28">
                    </div>
                    <h5 class="text-black uppercase font-bold text-sm text-center">
                    {{ $produkMinStok }}
                    </h5>
            </div>
          </div>

          <div class="w-6/12 lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-[#fff] p-5 items-center rounded mb-6 xl:mb-0 shadow-lg h-60 max-sm:h-52">
                    <h5 class="text-black uppercase font-bold text-sm text-center">
                      Review
                    </h5>
                    <h5 class="text-black uppercase font-bold text-center text-[60px] my-auto">
                      4,8
                    </h5>
            </div>
          </div>

          <div class="w-full xl:w-6/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded h-60">
              <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-bold text-xl text-black">
                      Grafik Penjualan Produk
                    </h3>
                  </div>
                </div>
              </div>
              <div class="p-4 flex-auto">
                <!-- BAR CHART, DATANYA ADA DI JAVASCRIPT BAWAH (INI CUMA NAMPILIN 3 DATA PRODUK TERATAS AJA YA) -->
                <div class="relative">
                  <canvas id="bar-chart"></canvas>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    @php
    $january2022 = isset($january2022) ? $january2022 : 0;
    $february2022 = isset($february2022) ? $february2022 : 0;
    $march2022 = isset($march2022) ? $march2022 : 0;
    $april2022 = isset($april2022) ? $april2022 : 0;
    $may2022 = isset($may2022) ? $may2022 : 0;
    $june2022 = isset($june2022) ? $june2022 : 0;
    $july2022 = isset($july2022) ? $july2022 : 0;
    $august2022 = isset($august2022) ? $august2022 : 0;
    $september2022 = isset($september2022) ? $september2022 : 0;
    $october2022 = isset($october2022) ? $october2022 : 0;
    $november2022 = isset($november2022) ? $november2022 : 0;
    $december2022 = isset($december2022) ? $december2022 : 0;

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

    
    $topProduct1 = isset($topProduct1) ? $topProduct1 : '' ;
    $topProduct2 = isset($topProduct2) ? $topProduct2 : '' ;
    $topProduct3 = isset($topProduct3) ? $topProduct3 : '' ;


    $topQuantity1 = isset($topQuantity1) ? $topQuantity1 : 0;
    $topQuantity2 = isset($topQuantity2) ? $topQuantity2 : 0;
    $topQuantity3 = isset($topQuantity3) ? $topQuantity3 : 0;


    
    


    


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
                backgroundColor: "#5a60e0",
                borderColor: "#5a60e0",
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
                        ],
                fill: false,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#f01111",
                borderColor: "#f01111",
                data: [
                            {{ $january2022 }},
                            {{ $february2022 }},
                            {{ $march2022 }},
                            {{ $april2022 }},
                            {{ $may2022 }},
                            {{ $june2022 }},
                            {{ $july2022 }},
                            {{ $august2022 }},
                            {{ $september2022 }},
                            {{ $october2022 }},
                            {{ $november2022 }},
                            {{ $december2022 }}
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
                }
              ],
              yAxes: [
                {
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
          labels: [ //ini label nama produknya (top 3 terlaris)
            "{{ $topProduct1 }}",
            "{{ $topProduct2 }}",
            "{{ $topProduct3 }}",
          ],
          datasets: [
            {
              label: new Date().getFullYear(),
              fill: false,
              backgroundColor: "#4c51bf",
              borderColor: "#4c51bf",
              data: [{{ $topQuantity1 }}, {{ $topQuantity2 }}, {{ $topQuantity3 }}], //ini data jumlah produk yang terjual
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
            xAxes: [
              {
                ticks: {
                  fontColor: "rgba(0,0,0)"
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
                  color: "rgba(0,0,0, 0.5)",
                  zeroLineColor: "rgba(0,0,0, 0.5)",
                  zeroLineBorderDash: [2],
                  zeroLineBorderDashOffset: [2]
                }
              }
            ],
            yAxes: [
              {
                ticks: {
                  fontColor: "rgba(0,0,0)"
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
                  color: "rgba(0,0,0, 0.3)",
                  zeroLineColor: "rgba(0,0,0, 0.3)",
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