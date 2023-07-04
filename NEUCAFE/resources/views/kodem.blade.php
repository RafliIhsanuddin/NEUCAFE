<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>

    <!-- SIGN UP -->
    <section class="flex items-center justify-center h-screen w-full bg-[#5fb395]  py-20  overflow-hidden">
        <img src="{{asset('assets/bg6.png')}}" class="absolute -top-20 -left-20" alt="">
        <img src="{{asset('assets/bg7.png')}}" class="absolute bottom-0 right-0" alt="">
        <!-- "{{asset('assets/bg6.png')}}" -->

        <div class="bg-white h-full w-2/3 flex z-10 justify-center rounded-2xl overflow-hidden ">
                    @if((session('eror')))
                    <div class="pt-24">
                        <div class="bg-red-500 text-white font-bold px-4 py-3 rounded">
                            Terjadi Kesalahan! {{ session('eror') }}
                        </div>
                    </div>
                    @endif
            <form action="" method="POST">
                <div class="flex my-auto">
                    <div class="">
                        <div>
                            <label for="">konfirmasi KODE</label>
                        </div>
                        <input type="konfirKode" name="email"
                        class="border-slate-300 border-2 rounded-md h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                        required>
                        <div>
                        <button type="submit"
                            class="w-40 mt-6 h-11 bg-[#6FBCA0] hover:bg-[#337a61] rounded-full font-semibold text-white">Masuk</button>
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
        
    </section>


</body>

</html>