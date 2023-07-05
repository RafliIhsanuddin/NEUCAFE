<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!-- SIGN UP -->
    <section class="flex items-center justify-center h-screen max-sm:h-auto w-full bg-[#5fb395] max-lg:px-4  py-20  overflow-hidden">
        <img src="assets/bg6.png" class="absolute -top-20 -left-20" alt="">
        <img src="assets/bg7.png" class="absolute bottom-0 right-0" alt="">

        <div class="bg-white h-full w-[790px] max-lg:w-auto z-10 rounded-2xl overflow-hidden px-20 max-lg:px-10 mx-auto">
            <h1 class="text-center text-3xl font-bold my-10 max-sm:my-6">Produk Pertama Kamu</h1>

            <form method="post" class="flex flex-col font-semibold">
                <div class="sm:flex sm:space-x-16">
                    <div class="wrapper-image flex flex-col items-center mb-4">
                        <h2>Foto Produk</h2>
                        <figure class="image-container w-36 h-36 my-3">
                            <img id="chosen-image" class="w-36 h-36 bg-slate-300 bg-cover">
                        </figure>

                        <input type="file" id="upload-button" accept="image/*" class=" hidden">
                        <label for="upload-button"
                            class="bg-green-500 hover:bg-green-600 hover:bg-green-500 focus:outline-none text-white px-4 py-1 font-semibold rounded-md">
                            Tambah Foto
                        </label>
                    </div>
                    <div class="wrapper-input flex flex-col w-full">
                        <label for="">Nama Produk</label>
                        <input type="text"
                            class="border-slate-300 border-2 bg-gray-50 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                        <label for="">Kategori Produk</label>
                        <input type="text"
                            class="border-slate-300 border-2 bg-gray-50 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                        <div class="sm:flex sm:space-x-2">
                            <div class="sm:w-1/2">
                                <label for="">Harga Beli</label>
                                <input type="number"
                                    class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                                    required>
                            </div>
                            <div class="sm:w-1/2">
                                <label for="">Harga Jual</label>
                                <input type="number"
                                    class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                                    required>
                            </div>
                            <div class="sm:w-1/2">
                                <label for="">Jumlah Stok</label>
                                <input type="number"
                                    class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>

                <label for="">Deskripsi Produk</label>
                <input type="text"
                    class="border-slate-300 border-2 bg-gray-50 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                    required>

                <button type="submit"
                    class="w-40 sm:mt-6 max-sm:my-4 h-11 bg-[#6FBCA0] mx-auto hover:bg-[#337a61] rounded-full font-semibold text-white">Simpan</button>
            </form>

        </div>

    </section>

    <script type="text/javascript">
        let uploadButton = document.getElementById("upload-button");
        let chosenImage = document.getElementById("chosen-image");

        uploadButton.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton.files[0]);
            reader.onload = () => {
                chosenImage.setAttribute("src", reader.result);
            }
        }
    </script>

</body>

</html>