<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Pertama</title>
    @vite('resources/css/app.css')

</head>

<body>

    <!-- SIGN UP -->
    <section class="flex items-center justify-center h-screen w-full bg-[#5fb395]  py-20  overflow-hidden">
        <img src="assets/bg6.png" class="absolute -top-20 -left-20" alt="">
        <img src="assets/bg7.png" class="absolute bottom-0 right-0" alt="">

        <div class="bg-white h-full w-[790px] z-10 rounded-2xl overflow-hidden px-20 mx-auto">
            <h1 class="text-center text-3xl font-bold my-12">Produk Pertama Kamu</h1>

            <form action="" class="flex flex-col font-semibold">
                <div class="flex space-x-16 mb-6">
                    <div class="wrapper-image">
                        <h2>Foto Produk</h2>
                        <div class="w-56 h-52 bg-gray-200 my-2"></div>
                    </div>
                    <div class="wrapper-input flex flex-col w-full">
                        <label for="">Nama Produk</label>
                        <input type="email"
                            class="border-slate-300 border-2 bg-gray-50 rounded-md h-10 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>

                        <label for="">Harga Jual</label>
                        <input type="pass"
                            class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-10 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                        <label for="">Satuan Produk</label>
                        <input type="pass"
                            class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-10 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                    </div>
                </div>

                <label for="">Deskripsi Produk</label>
                <input type="pass"
                    class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-10 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                    required>

                <button type="submit"
                    class="w-40 mt-6 h-11 bg-[#6FBCA0] mx-auto hover:bg-[#337a61] rounded-full font-semibold text-white">Simpan</button>
            </form>

        </div>

    </section>


</body>

</html>