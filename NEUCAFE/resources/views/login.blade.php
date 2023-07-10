<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body>

    <!-- SIGN UP -->
    <section class="flex items-center justify-center h-screen w-full bg-[#5fb395]  py-20  overflow-hidden">
        <img src="{{ asset('assets/bg6.png') }}" class="absolute -top-20 -left-20" alt="">
        <img src="{{ asset('assets/bg7.png') }}" class="absolute bottom-0 right-0" alt="">
        <!-- "{{ asset('assets/bg6.png') }}" -->

        <div class="bg-white h-full w-2/3 flex z-10 rounded-2xl overflow-hidden ">
            <div class="h-full w-2/5 bg-gray-100 ">
                <img src="{{ asset('assets/login.jpg') }}" class="object-cover object-center h-full" alt="">
            </div>

            <div class="h-full w-3/5 flex flex-col py-10 px-20 space-y-6">
                <div class="flex justify-end w-full h-fit items-center font-medium text-sm text-gray-400 space-x-3">
                    <p class="">Belum punya akun?</p>

                    <a href="signup"
                        class="w-20 py-1 border-2 border-gray-300 font-bold rounded-full text-xs hover:bg-[#6FBCA0] hover:text-white hover:border-white">SIGN
                        UP</a>
                </div>

                <div class="w-full h-fit">
                    <h2 class="text-3xl font-bold">Welcome to Neucafe!</h2>
                    <p class="text-lg font-semibold text-gray-500">Register your account</p>

                    @if (session('eror'))
                        <div class="pt-24">
                            <div class="bg-red-500 text-white font-bold px-4 py-3 rounded">
                                Terjadi Kesalahan! {{ session('eror') }}
                            </div>
                        </div>
                    @endif
                    <!-- <div class="flex flex-col text-center my-7 ">
                        <p class="text-lg font-medium mt-1 text-gray-500">Login sebagai</p>
                        <div class="mt-3">
                            <button type="submit"
                                class="w-40 h-11 border-b-4 focus:border-[#6FBCA0] rounded-lg font-semibold text-black">Manajer</button>
                            <button type="submit"
                                class="w-40 h-11 border-b-4 focus:border-[#6FBCA0] rounded-lg font-semibold text-black">Karyawan</button>
                        </div>
                    </div> -->

                    <form action="authlog" method="POST" class="flex flex-col font-semibold mt-12">
                        @csrf
                        <label for="">Email</label>
                        <input type="email" name="email"
                            class="border-slate-300 border-2 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>

                        <label for="">Password</label>
                        <input type="password" name="password"
                            class="border-slate-300 border-2 rounded-md w-full h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                            required>
                        <button type="submit"
                            class="w-40 mt-6 h-11 bg-[#6FBCA0] hover:bg-[#337a61] rounded-full font-semibold text-white">Masuk</button>
                    </form>

                </div>

                <div class="flex w-full h-fit items-center font-medium text-sm text-gray-500 space-x-3">
                    <p class="">Create account with</p>
                    <button type="submit"
                        class="w-7 h-7 py-1 border-2 border-gray-300 font-bold rounded-full text-xs hover:bg-[#6FBCA0] hover:text-white hover:border-white"></button>
                    <button type="submit"
                        class="w-7 h-7 py-1 border-2 border-gray-300 font-bold rounded-full text-xs hover:bg-[#6FBCA0] hover:text-white hover:border-white"></button>
                    <button type="submit"
                        class="w-7 h-7 py-1 border-2 border-gray-300 font-bold rounded-full text-xs hover:bg-[#6FBCA0] hover:text-white hover:border-white"></button>
                </div>

            </div>



        </div>

    </section>


</body>

</html>
