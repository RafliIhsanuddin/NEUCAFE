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
                            <a href="./dashboard.html" class="text-xs uppercase py-3 font-bold block text-[#45D5A1]">
                                <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="#"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-tools mr-2 text-sm"></i>
                                Laporan
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="#"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-table mr-2 text-sm"></i>
                                Daftar Produk
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="./reviewPelanggan.html"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-map-marked mr-2 text-sm"></i>
                                Review Pelanggan
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="informasi"
                                class="text-xs uppercase py-3 font-bold block text-blueGray-500 hover:text-[#45D5A1]">
                                <i class="fas fa-map-marked mr-2 text-sm"></i>
                                Informasi
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="relative md:ml-64">
            <nav
                class="absolute top-0 left-0 w-full z-10 bg-white md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-black text-lg uppercase hidden lg:inline-block font-bold"
                        href="./index.html">Welcome</a>
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
            <form action="{{ url('daftarProduk/'.$data->id_produk) }}" method="post" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT') {{-- mengarah ke  public function update(Request $request, string $id) di produkController.php --}}
               
                <div class="relative md:pt-32 pb-8 pt-12">
                    <div class="px-4 md:px-10 mx-auto w-full">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">
                            <div class="text-xl font-bold text-black flex justify-between items-center ml-2">
                                <div>Edit Produk</div>
                                <div>
                                    <a href={{ url('daftarProduk') }} class="border-0 px-3 py-2 text-white relative rounded-md text-base shadow font-semibold outline-none focus:outline-none bg-green-600 hover:bg-green-500">
                                        Daftar Produk
                                    </a>
                                </div>
                            </div>
                            <hr class="mt-2 mb-6">
                            <div class="flex w-full mx-2">
                                <div class="flex flex-col items-center mr-7">
                                    <figure class="image-container w-40 h-40">
                                        <img src ="{{asset('imgProducts/'.$data->gambar_produk)}}" id="chosen-image" class="w-40 h-40 bg-slate-500 ">
                                    </figure>
                                    <input type="file" id="upload-button" accept="image/*" name="gambar_produk" class="hidden">
                                    <label for="upload-button" 
                                        class="bg-green-600 hover:bg-green-500 focus:outline-none text-white px-5 py-1 font-semibold rounded-md mt-3 form-control @error('gambar_produk') is-invalid @enderror">
                                        Edit Foto
                                    </label>
                                </div>
            
                                <div class="flex flex-col space-y-3 w-32 text-base font-medium">
                                    <p>Nama</p>
                                    <p>Kategori</p>
                                    <p>Jumlah Stok</p>
                                    <p>Harga Jual</p>
                                    <p>Harga Beli</p>
                                    <p>Deskripsi</p>
                                    <p>Outlet</p>
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
                                    <p>:</p>
                                </div>
                               
                                <div class="flex flex-col space-y-3 w-96 text-base font-medium">
                                    <input type="text" name="nama"           value="{{ $data->nama }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('nama') is-invalid @enderror"  >
                                    <input type="text" name="kategori"       value="{{ $data->kategori }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('kategori') is-invalid @enderror">
                                    <input type="number" name="stok"         value="{{ $data->stok }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('stok') is-invalid @enderror">
                                    <input type="number" name="harga_jual"   value="{{ $data->harga_jual }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('harga_jual') is-invalid @enderror">
                                    <input type="number" name="harga_beli"   value="{{ $data->harga_beli }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('harga_beli') is-invalid @enderror">
                                    <input type="text" name="deskripsi"      value="{{ $data->deskripsi }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('deskripsi') is-invalid @enderror">
                                    <input type="text" name="id_outlet"      value="{{ $data->id_outlet }}" 
                                                class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('id_outlet') is-invalid @enderror">
                                    <select name="status" class="h-7 px-1 rounded-md border-gray-300 border-[2px]" id="status form-control @error('status') is-invalid @enderror">
                                        <option value="Success" {{ $data->status == 'Success' ? 'selected' : '' }}>
                                            <i class="fas fa-circle text-green-500 mr-2"></i>
                                            <span class="text-sm">Success</span>
                                        </option>
                                        <option value="Pending" {{ $data->status == 'Pending' ? 'selected' : '' }}>
                                            <i class="fas fa-circle text-green-500 mr-2"></i>
                                            <span class="text-sm">Pending</span>
                                        </option>
                                    </select>
            
                                    <div>
                                        <button type="submit" class="bg-green-600 hover:bg-green-500 focus:outline-none text-white w-28 py-1 font-semibold rounded-md">Simpan</button>
                                        <button type="submit" class="bg-red-600 hover:bg-red-500 focus:outline-none text-white w-28 py-1 font-semibold rounded-md">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form> 
            @php
            $errorClass = "alert alert-danger text-red-500 ml-10 font-bold marker:text-red-500";
            @endphp
           
           @if ($errors->any())
           <div class="pt-24">
               <div class="bg-red-500 text-white font-bold px-4 py-3 rounded">
                   Terjadi Kesalahan!
               </div>
           </div>
       @endif
            <ul class="mt-2 list-disc list-inside">
                @error('nama')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('kategori')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('stok')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('harga_jual')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('harga_beli')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('deskripsi')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('id_outlet')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            
            <ul class="mt-2 list-disc list-inside">
                @error('gambar_produk')
                <li class="{{ $errorClass }}">{{ $message }}</li>
                @enderror
            </ul>
            

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        let uploadButton = document.getElementById("upload-button");
        let chosenImage = document.getElementById("chosen-image");
        let myForm = document.getElementById('myForm');
        
        uploadButton.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton.files[0]);
            reader.onload = () => {
                chosenImage.setAttribute("src", reader.result);
            }
        }

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