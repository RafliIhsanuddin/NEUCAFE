<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-purple-600 ">
    <p class="text-9xl font-serif font-semibold">about page<th>
    </div>

        

        

    


    <h1>About Page</h1>

    <form id="myForm" method="POST" action="{{ route('laporan') }}">
    @csrf
    <input type="month" id="bdaymonth" name="bdaymonth" class="rounded-md h-8">
    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>


    <p>Selected Year and Month: {{ $monthName }}</p>


        <table>
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Customer</th>
                    <th>Waktu Order</th>
                    <th>Metode Pembayaran</th>
                    <th>Total Tagihan</th>
                    <th>Total Harga Beli</th>
                    <th>Jenis Transaksi</th>
                    <th>ID Outlet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id_transaksi }}</td>
                    <td>{{ $transaction->nama_customer }}</td>
                    <td>{{ $transaction->waktu_order }}</td>
                    <td>{{ $transaction->metode_pembayaran }}</td>
                    <td>{{ $transaction->total_tagihan }}</td>
                    <td>{{ $transaction->total_harga_beli }}</td>
                    <td>{{ $transaction->jenis_transaksi }}</td>
                    <td>{{ $transaction->id_outlet }}</td>
                    <!-- Add any other desired fields here -->
                </tr>
                @endforeach
            </tbody>
        </table>


            <form method="POST" action="{{ route('laporan') }}">
                @csrf
                <input type="month" id="bdaymonth" name="bdaymonthbar" class="rounded-md h-8">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>

            <h3>Month: {{ $monthNameBar }}</h3>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Outlet ID</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Total Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jumlahTotalproduk as $result)
                <tr>
                    <td>{{ $result->id_produk }}</td>
                    <td>{{ $result->id_outlet }}</td>
                    <td>{{ $result->nama }}</td>
                    <td>{{ $result->MONTH }}</td>
                    <td>{{ $result->total_quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    


</body>
</html>


