<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/299cac0a30.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('bg-black/20');
            } else {
                navbar.classList.remove('bg-black/20');
            }
        });
    </script>

</head>

<body>

    <!-- Navbar -->
    <nav class="w-full h-14 bg-black/50 px-20 max-md:px-4 fixed text-white z-20">
        <div class="max-w-[95rem] h-full flex justify-between items-center mx-auto">
            <div>
                <h4 class=" font-bold text-lg">Neucafe</h4>
            </div>
            <div>
                <a href="signup"
                    class="px-5 py-2 rounded-full text-sm font-semibold hover:text-[#fff001] hover:border-b-2 hover:border-[#fff001]">SIGN
                    UP</a>
                <a href="login"
                    class="px-6 py-2 rounded-full text-sm font-semibold hover:text-[#fff001] hover:border-b-2 hover:border-[#fff001]">LOGIN</a>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <section class="w-full h-[47rem] px-20 max-md:px-4 flex items-center justify-center overflow-hidden max-sm:bg-[url('assets/ilustarsi_header.png')] bg-contain bg-no-repeat bg-center">
        <div class="max-w-[95rem] text-black flex items-center space-x-10 relative">
            <div class="w-1/2 max-md:w-4/5">
                <h1 class=" font-extrabold text-[80px] max-md:text-[60px]">NEUCAFE</h1>
                <p class="mt-2 mb-10 text-lg">memantau keuangan kafe mu dari sini dan mengubah segala pencatatan keuangan
                    cafe dengan efisien dan
                    informatif! </p>
                <a href="" class="text-sm px-5 py-3 bg-[#1a7409] font-semibold text-white rounded-lg">DAFTAR
                    SEKARANG</a>
            </div>
            <div class="w-1/2 max-md:w-3/4 max-sm:hidden">
                <img src="assets/ilustarsi_header.png" alt="">
            </div>
            <img class="w-3/4 absolute -bottom-20 -right-44 blur-xl opacity-50 -z-10" src="assets/bg1.png" alt="">
            <img class="w-2/3 absolute -bottom-10 -left-[500px] blur-xl opacity-50 -z-10" src="assets/bg2.png" alt="">
        </div>


    </section>

    <!-- About Us -->
    <section class="w-full h-[30rem] px-20 max-md:px-4 bg-white flex flex-col items-center justify-center text-center">
        <h2 class=" font-bold text-3xl mb-6">Why Neucafe ?</h2>
        <p class="text-base font-semibold">Neucafe akan membantumu mendapatkan informasi tentang usaha cafemu secara
            efisien dan informatif dengan fitur terbaik yang bisa kamu gunakan</p>

    </section>

    <!-- FITUR -->
    <section class="w-full h-auto py-32 px-52 max-xl:px-32 max-lg:px-10 relative overflow-hidden">
        <div class="flex justify-start space-x-20 items-center w-full px-6 ">
            <div class="image rounded-full bg-gray-100 h-60 w-72">
                <img src="assets/f1.png" class="h-full object-fill mx-auto" alt="">
            </div>
            <div class="w-2/5 text-left">
                <h3 class="text-3xl font-bold ">Pantau statistik penjualan</h3>
                <p class="mt-4 text-xl">Neucafe memudahkanmu memonitor penjualan di cafe kamu secara informatif!</p>
            </div>
        </div>

        <div class="flex justify-end space-x-20 items-center w-full px-6 my-52 ">
            <div class="w-2/5 text-right">
                <h3 class="text-3xl font-bold ">Transaksi dengan mudah!</h3>
                <p class="mt-4 text-xl">kemudahan untukmu dalam memproses transaksi pembelian dari pelangganmu.</p>
            </div>
            <div class="h-52 w-80">
                <img src="assets/f2.png" class="h-full  rounded-lg object-fill object-center mx-auto" alt="">
            </div>
        </div>

        <div class="flex justify-start space-x-20 items-center w-full px-6 ">
            <div class="image rounded-full bg-gray-100 h-52 w-52">
                <img src="assets/f3.png" class="h-full object-cover mx-auto" alt="">
            </div>
            <div class="w-2/5 text-left">
                <h3 class="text-3xl font-bold ">Dapatkan kepuasan pelangganmu</h3>
                <p class="mt-4 text-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, earum
                    totam atque
                    nisi quas repellat pariatur incidunt</p>
            </div>
        </div>

        <img class="w-[40rem] aspect-video absolute top-20 left-16 blur-xl opacity-50 -z-10" src="assets/bg3.png"
            alt="">
        <img class="w-[40rem] aspect-video absolute bottom-1/3 right-16 blur-xl opacity-50 -z-10" src="assets/bg4.png"
            alt="">
        <img class="w-[40rem] aspect-video absolute bottom-20 left-16 blur-xl opacity-50 -z-10" src="assets/bg4.png"
            alt="">

    </section>

    <div class="w-full h-auto px-20 bg-white flex flex-col items-center justify-center text-center space-y-3 my-14">
        <div class="flex justify-center items-center space-x-8">
            <div class="h-12 w-12 border-2 border-[#1a7409] hover:bg-[#1a7409] rounded-full"></div>
            <div class="h-12 w-12 border-2 border-[#1a7409] hover:bg-[#1a7409] rounded-full"></div>
            <div class="h-12 w-12 border-2 border-[#1a7409] hover:bg-[#1a7409] rounded-full"></div>
        </div>
        <div>
            <p>Kaliurang St No.Km. 14,5, Krawitan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta
                55584</p>
        </div>
        <div
            class="flex max-sm:flex-col justify-center items-center space-x-6 max-sm:space-x-0 max-sm:space-y-1 font-semibold">
            <div class="flex justify-center items-center space-x-1.5">
                <img src="../../assets/img/call.png" alt="" class="w-6 ">
                <p>+62 1234-4567-8910</p>
            </div>
            <div class="flex justify-center items-center space-x-1.5">
                <img src="../../assets/img/email.png" alt="" class="w-6 ">
                <p>orisinil@gmail.com</p>
            </div>
        </div>
        <div class="flex justify-center items-center pt-4">
            <button type="submit"
                class="h-12 w-32 border-2 border-[#1a7409] hover:bg-[#1a7409] text-[#1a7409] hover:text-white rounded-lg font-bold uppercase">Contact
                Us
        </div>
    </div>
    </div>

    <div class="w-full h-[2rem] px-2 bg-[#1a7409] flex flex-col items-center justify-center text-center">
        <p class=" font-semibold text-white max-sm:text-sm"> &#169; Copyright 2023, ORISINIL</p>
    </div>

</body>

</html>