<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konfirmasi kode manager</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <!-- KODEM -->
    <section class="flex items-center justify-center h-screen w-full bg-[#5fb395] py-20 px-6 overflow-hidden">
        <img src="assets/bg6.png" class="absolute -top-20 -left-20" alt="">
        <img src="assets/bg7.png" class="absolute bottom-0 right-0" alt="">

        <div class="bg-transparent max-h-[45rem] h-full aspect-video flex flex-col items-center justify-center z-10 rounded-2xl overflow-hidden ">
            <h1 class="text-center text-4xl font-bold text-white my-14">Masukkan Kode Manager</h1>
            @if (session('eror'))
                <div class="my-4">
                    <div class="bg-red-500 text-white font-bold px-4 py-3 rounded">
                        Terjadi Kesalahan! {{ session('eror') }}
                    </div>
                </div>
            @endif
            <form action="konfkod" method="POST" class="flex flex-col font-semibold">
                @csrf
                <input type="number" name="konfirKode"
                    class="border-slate-300 border-2 rounded-md w-96 h-9 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                    required>
                <button type="submit"
                    class="w-40 mt-8 h-10 bg-white mx-auto hover:bg-white/80 rounded-full font-semibold text-black">Masuk</button>
            </form>

        </div>

    </section>


</body>

</html>