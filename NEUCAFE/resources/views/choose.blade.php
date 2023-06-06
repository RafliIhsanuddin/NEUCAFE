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

    <!--  -->
    <section class="flex items-center flex-col justify-center h-screen w-full bg-[#5fb395] py-20 overflow-hidden">
        <img src="{{asset('assets/bg6.png')}}" class="absolute -top-20 -left-20" alt="">
        <img src="{{asset('assets/bg7.png')}}" class="absolute bottom-0 right-0" alt="">

        <div class="-mt-10 mb-16">
            <h2 class="text-4xl font-bold">NEUCAFE</h2>
        </div>

        <div class="flex space-x-20">
            <div class="z-10 flex flex-col items-center justify-center space-y-6">
                <h2 class="text-3xl font-bold text-white">Manager</h2>
                <a href="" class="w-56 h-56 bg-white border-2 rounded-full  flex items-center justify-center">
                    <img src="assets/manager.png" class="w-40 h-40 " alt="">
                </a>
            </div>
            <div class="z-10 flex flex-col items-center justify-center space-y-6">
                <h2 class="text-3xl font-bold text-white">Karyawan</h2>
                <a href="" class="w-56 h-56 bg-white border-2 rounded-full  flex items-center justify-center">
                    <img src="assets/Kasir.png" class="w-40 h-40 " alt="">
                </a>
            </div>
        </div>

    </section>


</body>

</html>