@extends('layout.template')

@section('konten')


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
            <!-- ini adalah tempat create.blade.php -->
            <!-- START FORM-->

            {{-- Peringatan error yang terjadi --}}
            @if ($errors->any())
                <div class="pt-24">
                    <div class="bg-red-500 text-white font-bold px-4 py-3 rounded">
                        Terjadi Kesalahan!
                    </div>
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $item)
                            <li class="text-red-500">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Peringatan error yang terjadi --}}

            <form action="{{ url('daftarProduk') }}" method="post" enctype="multipart/form-data" id="myForm" >
                @csrf
                <div class="relative md:pt-32 pb-8 pt-12">
                    <div class="px-4 md:px-10 mx-auto w-full">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white h-fit px-6 py-7">
                            <div class="text-xl font-bold text-black ml-2">
                                Tambah Produk
                            </div>
                            <hr class="mt-2 mb-6">
                            <div class="flex w-full mx-2">
                                <div class="flex flex-col items-center mr-7">
                                    <figure class="image-container w-40 h-40">
                                        <img id="chosen-image" class="w-40 h-40 bg-slate-500">
                                    </figure>
                                    {{-- nanti ditambahkan value untuk session flash untuk upload gambar --}}
                                    <input type="file" id="upload-button" accept="image/*" name="gambar_produk" class=" hidden" value="{{ Session::get('gambar_produk') }}">
                                    <label for="upload-button"
                                        class="bg-green-600 hover:bg-green-500 focus:outline-none text-white px-5 py-1 font-semibold rounded-md mt-3">
                                        Tambah Foto
                                    </label>
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

                                <div class="flex flex-col space-y-3 w-96 text-base font-medium">
                                    <input type="text" name="nama" value="{{ old('nama') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('nama') is-invalid @enderror">
                                    <!-- name digunakan untuk pengiriman data yg telah diisi di form ke database , $request->validate di produkController.php-->
                                    <input type="text" name="kategori"  value="{{ old('kategori') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('kategori') is-invalid @enderror">
                                    <!-- value digunakan untuk data yang salah masih bisa dilihat di form pengisian , berhubungan dengan Session::flash di produkController.php-->
                                    <input type="text" name="stok" value="{{ old('stok') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('stok') is-invalid @enderror">
                                    <input type="text" name="harga_jual" value="{{ old('harga_jual') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('harga_jual') is-invalid @enderror">
                                    <input type="text" name="harga_beli" value="{{ old('harga_beli') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('harga_beli') is-invalid @enderror">
                                    <input type="text" name="deskripsi" value="{{ old('deskripsi') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px] form-control @error('deskripsi') is-invalid @enderror"
                                        maxlength="255">
                                    <input type="hidden" name="id_outlet"  value="{{ old('id_outlet') }}"
                                        id="" class="h-6 py-1 rounded-md border-gray-300 border-[2px]">
                                    <select name="status" class="h-7 px-1 rounded-md border-gray-300 border-[2px] form-control @error('status') is-invalid @enderror">
                                        <option value="Success">
                                            <i class="fas fa-circle text-green-500 mr-2"></i>
                                            <span class="text-sm">Success</span>
                                        </option>
                                        <option value="Pending">
                                            <i class="fas fa-circle text-green-500 mr-2"></i>
                                            <span class="text-sm">Pending</span>
                                        </option>
                                    </select>

                                    <div>
                                        <button type="submit"
                                            class=" bg-green-600 hover:bg-green-500 focus:outline-none text-white w-28 py-1 font-semibold rounded-md ">Simpan</button>
                                        <button type="submit"
                                            class=" bg-red-600 hover:bg-red-500 focus:outline-none text-white w-28 py-1 font-semibold rounded-md">Batal</button>
                                    </div>
                                </div>
            </form>
        </div>
    </div>
    </div>
    </div>

    <!-- END FORM-->
    </div>
    </div>

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
    </script>
@endsection
