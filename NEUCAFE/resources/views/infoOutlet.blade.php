<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <!-- SIGN UP -->
    <section class="flex items-center justify-center h-screen w-full bg-[#5fb395]  py-20  overflow-hidden">
        <img src="assets/bg6.png" class="absolute -top-20 -left-20" alt="">
        <img src="assets/bg7.png" class="absolute bottom-0 right-0" alt="">

        <div class="bg-white h-full w-[750px] z-10 rounded-2xl overflow-hidden px-28 py-5 mx-auto">
            <h1 class="text-center text-3xl font-bold my-14">Informasi Outlet</h1>

            <form action="outper" method="POST" class="flex flex-col font-semibold">
                @csrf

                <input type="hidden" name="idout" value="{{session('id')}}">
                <label for="">Nama Outlet</label>
                <input name="namaout" type="text"
                    class="border-slate-300 border-2 rounded-md w-full h-11 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                    required>
                <label for="">Alamat Outlet</label>
                <input name="alout" type="text"
                    class="border-slate-300 border-2 rounded-md w-full h-11 px-2 focus:outline-none focus:border-[#6FBCA0] my-2"
                    required>
                <button type="submit"
                    class="w-40 mt-6 h-11 bg-[#6FBCA0] mx-auto hover:bg-[#337a61] rounded-full font-semibold text-white">Daftar</button>
            </form>

        </div>

    </section>


</body>

</html>