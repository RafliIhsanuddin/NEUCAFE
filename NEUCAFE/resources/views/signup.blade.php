<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!-- SIGN UP -->
    <section class="flex items-center justify-center h-screen w-full bg-[#5fb395]  py-20  overflow-hidden">
        <img src="assets/bg6.png" class="absolute -top-20 -left-20" alt="">
        <img src="assets/bg7.png" class="absolute bottom-0 right-0" alt="">

        <div class="bg-white h-full w-2/3 flex z-10 rounded-2xl overflow-hidden ">
            <div class="h-full w-2/5 bg-gray-100 ">
                <img src="assets/login.jpg" class="object-fill h-full" alt="">
            </div>

            <div class="h-full w-3/5 flex flex-col items-center justify-center py-8 px-20 space-y-6">
                <div class="flex justify-end w-full h-fit items-center font-medium text-sm text-gray-400 space-x-3">
                    <p class="">Sudah punya akun?</p>
                    <button type="submit" class="w-20 py-1 border-2 border-gray-300 font-bold rounded-full text-xs hover:bg-[#6FBCA0] hover:text-white hover:border-white">SIGN IN</button>
                </div>
                <div class="w-full h-fit">
                    <h2 class="text-3xl font-bold">Welcome to Neucafe!</h2>
                    <p class="text-base font-medium text-gray-400 mb-6 mt-1">Register your account</p>

                    <form action="authsign" method="POST" class="flex flex-col font-semibold">
                        @csrf
                        <label for="">No. Telp</label>
                        <input type="text" name="notelp"
                            class="border-slate-300 border-2 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                        <label for="">Email</label>
                        <input type="email" name="email"
                            class="border-slate-300 border-2 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>

                        <div class="flex space-x-5">
                            <div class="w-1/2">
                                <label for="">Password</label>
                                <input type="pass" name="pass"
                                    class="border-slate-300 border-2 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                                    required>
                            </div>
                            <div class="w-1/2">
                                <label for="">Konfirmasi Password</label>
                                <input type="pass" name="konfir"
                                    class="border-slate-300 border-2 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                                    required>
                            </div>
                        </div>
                        <label for="">Kode Manager</label>
                        <input type="text" name="kode"
                            class="border-slate-300 border-2 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                        <button type="submit" class="w-40 mt-6 h-11 bg-[#6FBCA0] hover:bg-[#337a61] rounded-full font-semibold text-white">Daftar</button>
                    </form>

                </div>

                <div class="flex justify-start w-full h-fit items-center font-medium text-sm text-gray-400 space-x-4">
                    <p class="">Create account with</p>
                </div>

            </div>

            

        </div>

    </section>


</body>

</html>