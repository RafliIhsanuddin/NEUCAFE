<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\outlet;
use App\Models\akun;


class SessionController extends Controller
{
    




    function tes(){
        $results = DB::table('detail_transaksi')
        ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
        ->join('produk', 'detail_transaksi.id_produk', '=', 'produk.id_produk')
        ->select('produk.id_produk', DB::raw('MAX(transaksi.id_outlet) AS id_outlet'), 'produk.nama', DB::raw('SUM(detail_transaksi.quantity) AS total_quantity'))
        ->whereMonth('transaksi.waktu_order', '=', date('m'))
        ->where('transaksi.id_outlet', '=', 4)
        ->groupBy('produk.id_produk', 'produk.nama')
        ->orderByDesc(DB::raw('SUM(detail_transaksi.quantity)'))
        ->take(3)
        ->get();

    $topProduct1 = $results[0]->nama;
    $topProduct2 = $results[1]->nama;
    $topProduct3 = $results[2]->nama;

    $topQuantity1 = $results[0]->total_quantity;
    $topQuantity2 = $results[1]->total_quantity;
    $topQuantity3 = $results[2]->total_quantity;

    

    return view('dashboard',[
        "topProduct1" => $topProduct1,
        "topProduct2" => $topProduct2,
        "topProduct3" => $topProduct3,
        "topQuantity1" => $topQuantity1,
        "topQuantity2" => $topQuantity2,
        "topQuantity3" => $topQuantity3,
        ]);
    }


    



    function login2(Request $req){
        

        $akun = akun::where('email', $req->email)->firstOrFail();

        if (Hash::check($req->password, $akun->password)) {
           
            
            $req->session()->put('id', $akun->id_akun);
            $id = session('id');

            $id_outlet = session('id_outlet');
            $outlet = outlet::where('id_akun', '=', $id)->first();
            
            if (empty($outlet)) {
                return view('infoOutlet');
            } else {
                $outletdatabase = DB::table('outlet')->where('id_akun', $id)->first();
                $databaseoutlet = $outletdatabase->id_outlet;
                $req->session()->put('id_outlet', $databaseoutlet);

                $data = akun::where('id_akun', $id)->first();

                if ($data) {
                    session()->put('datas', $data);
                    session()->put('outlets', $outlet);
                    return view('choose');
                } else {
                    return redirect('login')->with('error', 'Email atau password salah');
                }
            }
        } else {
            return redirect('login')->with('error', 'Email atau password salah');
        }
    }


    public function konfirmasikode(Request $req){
        $id = session('id');
        $akun = DB::table('akun')->where('id_akun', $id)->first();

        
        if($akun->kodeManajer == $req->konfirKode){
            return view('informasi');
        }else{
            return redirect('kodem')->with('eror','KODE manajer yang anda masukkan salah');
        }
        
        
    }







    public function getTransactionsPerMonth() {
        $id = session('id');
        $id_outlet = session('id_outlet');
        // $id_outlet = 4;
    $transactions = DB::table('transaksi')
        ->selectRaw('YEAR(waktu_order) AS Year, DATE_FORMAT(waktu_order, "%M") AS Month, COUNT(*) AS count')
        ->where('id_outlet', $id_outlet)
        ->groupBy('Year', 'Month')
        ->orderByRaw('Year ASC, FIELD(Month, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")')
        ->get();
    // Initialize an empty associative array
    $monthlyCounts = [];

    // Iterate over the transactions and populate the associative array
    foreach ($transactions as $transaction) {
        $year = $transaction->Year;
        $month = $transaction->Month;
        $count = $transaction->count;

        // Create the year key if it doesn't exist
        if (!isset($monthlyCounts[$year])) {
            $monthlyCounts[$year] = [];
        }

        // Assign the count to the respective month
        $monthlyCounts[$year][$month] = $count;
    }

    $currentMonthTagihan = DB::table('transaksi')
        ->select(DB::raw('SUM(total_tagihan) AS total_tagihan'))
        ->where('id_outlet', $id_outlet)
        ->whereRaw('MONTH(transaksi.waktu_order) = MONTH(CURDATE())')
        ->first();


        $total_tagihan_bulan = isset($currentMonthTagihan->total_tagihan) ? 'Rp ' . number_format($currentMonthTagihan->total_tagihan, 0, ',', '.') : 'Rp.0';
        

    




    $totalHargaBeli = DB::table('transaksi')
    ->selectRaw('SUM(total_tagihan) as sum_total_tagihan, SUM(total_harga_beli) as sum_total_harga_beli, SUM(total_tagihan) - SUM(total_harga_beli) AS difference')
    ->where('id_outlet', $id_outlet)
    ->whereRaw('MONTH(waktu_order) = MONTH(CURDATE())')
    ->first();

    $difference = isset($totalHargaBeli->difference) ? 'Rp ' . number_format($totalHargaBeli->difference, 0, ',', '.') : 'Rp 0';



    $akunData = DB::table('akun')
    ->select('id_akun', 'email')
    ->where('id_akun', $id)
    ->first();

    $akunEmail = isset($akunData->email) ? $akunData->email : "";



    $transaksiCount = DB::table('transaksi')
    ->where('id_outlet', $id_outlet)
    ->whereRaw('MONTH(waktu_order) = MONTH(CURDATE())')
    ->count();

    $transaksiCount = isset($transaksiCount) ? $transaksiCount : 0;


    $namastokTerendah = DB::table('detail_transaksi')
    ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
    ->join('produk', 'detail_transaksi.id_produk', '=', 'produk.id_produk')
    ->select('detail_transaksi.id_relasi', 'produk.id_produk', 'produk.nama', 'produk.stok', DB::raw('MONTH(transaksi.waktu_order) AS month'))
    ->where('transaksi.id_outlet', $id_outlet)
    ->whereRaw('MONTH(transaksi.waktu_order) = MONTH(CURRENT_DATE)')
    ->orderBy('produk.stok')
    ->first();

    $produkMinStok = isset($namastokTerendah->nama) ? $namastokTerendah->nama : "";




    $transaksiData = DB::table('detail_transaksi')
    ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
    ->select('transaksi.id_outlet', DB::raw('SUM(detail_transaksi.quantity) AS total_quantity'), DB::raw('MONTH(transaksi.waktu_order) AS month'))
    ->where('transaksi.id_outlet', $id_outlet)
    ->whereRaw('MONTH(transaksi.waktu_order) = MONTH(CURDATE())')
    ->groupBy('transaksi.id_outlet', DB::raw('MONTH(transaksi.waktu_order)'))
    ->first();
    $totalQuantity = isset($transaksiData->total_quantity) ? $transaksiData->total_quantity : 0;







    $results = DB::table('detail_transaksi')
        ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
        ->join('produk', 'detail_transaksi.id_produk', '=', 'produk.id_produk')
        ->select('produk.id_produk', DB::raw('MAX(transaksi.id_outlet) AS id_outlet'), 'produk.nama', DB::raw('SUM(detail_transaksi.quantity) AS total_quantity'))
        ->whereMonth('transaksi.waktu_order', '=', date('m'))
        ->where('transaksi.id_outlet', '=', $id_outlet)
        ->groupBy('produk.id_produk', 'produk.nama')
        ->orderByDesc(DB::raw('SUM(detail_transaksi.quantity)'))
        ->take(3)
        ->get();

        $topProduct1 = isset($results[0]->nama) ? $results[0]->nama : "";
        $topProduct2 = isset($results[1]->nama) ? $results[1]->nama : "";
        $topProduct3 = isset($results[2]->nama) ? $results[2]->nama : "";

    $topQuantity1 = isset($results[0]->total_quantity) ? $results[0]->total_quantity : 0;
    $topQuantity2 = isset($results[1]->total_quantity) ? $results[1]->total_quantity : 0;
    $topQuantity3 = isset($results[2]->total_quantity) ? $results[2]->total_quantity : 0;

    $january2022 = isset($monthlyCounts[2022]['January']) ? $monthlyCounts[2022]['January'] : 0;
    $february2022 = isset($monthlyCounts[2022]['February']) ? $monthlyCounts[2022]['February'] : 0;
    $march2022 = isset($monthlyCounts[2022]['March']) ? $monthlyCounts[2022]['March'] : 0;
    $april2022 = isset($monthlyCounts[2022]['April']) ? $monthlyCounts[2022]['April'] : 0;
    $may2022 = isset($monthlyCounts[2022]['May']) ? $monthlyCounts[2022]['May'] : 0;
    $june2022 = isset($monthlyCounts[2022]['June']) ? $monthlyCounts[2022]['June'] : 0;
    $july2022 = isset($monthlyCounts[2022]['July']) ? $monthlyCounts[2022]['July'] : 0;
    $august2022 = isset($monthlyCounts[2022]['August']) ? $monthlyCounts[2022]['August'] : 0;
    $september2022 = isset($monthlyCounts[2022]['September']) ? $monthlyCounts[2022]['September'] : 0;
    $october2022 = isset($monthlyCounts[2022]['October']) ? $monthlyCounts[2022]['October'] : 0;
    $november2022 = isset($monthlyCounts[2022]['November']) ? $monthlyCounts[2022]['November'] : 0;
    $december2022 = isset($monthlyCounts[2022]['December']) ? $monthlyCounts[2022]['December'] : 0;

    $january2023 = isset($monthlyCounts[2023]['January']) ? $monthlyCounts[2023]['January'] : 0;
    $february2023 = isset($monthlyCounts[2023]['February']) ? $monthlyCounts[2023]['February'] : 0;
    $march2023 = isset($monthlyCounts[2023]['March']) ? $monthlyCounts[2023]['March'] : 0;
    $april2023 = isset($monthlyCounts[2023]['April']) ? $monthlyCounts[2023]['April'] : 0;
    $may2023 = isset($monthlyCounts[2023]['May']) ? $monthlyCounts[2023]['May'] : 0;
    $june2023 = isset($monthlyCounts[2023]['June']) ? $monthlyCounts[2023]['June'] : 0;
    $july2023 = isset($monthlyCounts[2023]['July']) ? $monthlyCounts[2023]['July'] : 0;
    $august2023 = isset($monthlyCounts[2023]['August']) ? $monthlyCounts[2023]['August'] : 0;
    $september2023 = isset($monthlyCounts[2023]['September']) ? $monthlyCounts[2023]['September'] : 0;
    $october2023 = isset($monthlyCounts[2023]['October']) ? $monthlyCounts[2023]['October'] : 0;
    $november2023 = isset($monthlyCounts[2023]['November']) ? $monthlyCounts[2023]['November'] : 0;
    $december2023 = isset($monthlyCounts[2023]['December']) ? $monthlyCounts[2023]['December'] : 0;

    return view('dashboard', [
        'january2022' => $january2022,
        'february2022' => $february2022,
        'march2022' => $march2022,
        'april2022' => $april2022,
        'may2022' => $may2022,
        'june2022' => $june2022,
        'july2022' => $july2022,
        'august2022' => $august2022,
        'september2022' => $september2022,
        'october2022' => $october2022,
        'november2022' => $november2022,
        'december2022' => $december2022,

        'january2023' => $january2023,
        'february2023' => $february2023,
        'march2023' => $march2023,
        'april2023' => $april2023,
        'may2023' => $may2023,
        'june2023' => $june2023,
        'july2023' => $july2023,
        'august2023' => $august2023,
        'september2023' => $september2023,
        'october2023' => $october2023,
        'november2023' => $november2023,
        'december2023' => $december2023,

        "topProduct1" => $topProduct1,
        "topProduct2" => $topProduct2,
        "topProduct3" => $topProduct3,
        "topQuantity1" => $topQuantity1,
        "topQuantity2" => $topQuantity2,
        "topQuantity3" => $topQuantity3,


        "total_tagihan_bulan" => $total_tagihan_bulan,
        "transaksiCount" => $transaksiCount,


        "totalQuantity" => $totalQuantity,
        "difference" => $difference,
        "akunEmail" => $akunEmail,
        "produkMinStok" => $produkMinStok,

        


    ]);
}









        public function getreport(Request $request){
            $id_outlet = session('id_outlet');



            $transactions = DB::table('transaksi')
            ->selectRaw('YEAR(waktu_order) AS Year, DATE_FORMAT(waktu_order, "%M") AS Month, COUNT(*) AS count')
            ->where('id_outlet', $id_outlet)
            ->groupBy('Year', 'Month')
            ->orderByRaw('Year ASC, FIELD(Month, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")')
            ->get();


            foreach ($transactions as $transaction) {
                $year = $transaction->Year;
                $month = $transaction->Month;
                $count = $transaction->count;
        
                // Create the year key if it doesn't exist
                if (!isset($monthlyCounts[$year])) {
                    $monthlyCounts[$year] = [];
                }
        
                // Assign the count to the respective month
                $monthlyCounts[$year][$month] = $count;
            }
                





            if ($request->input('bdaymonth') === null) {
                // Check if the 'bdaymonth' key exists in the session
                if (session()->has('bdaymonth')) {
                    // Retrieve the value from the session
                    $yearmonth = session('bdaymonth');
                } else {
                    // Set a default value if the key doesn't exist in the session
                    $yearmonth = '2023-01';
                }
            } else {
                // Store the 'bdaymonth' input in the session
                session(['bdaymonth' => $request->input('bdaymonth')]);
                $yearmonth = $request->input('bdaymonth');
            }

            $month = date('m', strtotime($yearmonth));

            $monthName = Carbon::create()->month($month)->locale('id')->monthName;

            $transactions = DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->whereMonth('waktu_order', '=', $month)
            ->get();

            $transactionCount = DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->whereMonth('waktu_order', $month)
            ->count('id_transaksi');


            $totaltagihan = DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->whereMonth('waktu_order', $month)
            ->sum('total_tagihan');



            
               $totaltagihan = isset($totaltagihan) ? 'Rp ' . number_format($totaltagihan, 0, ',', '.') : 'Rp.0';
            

            $totalHargabeli = DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->whereMonth('waktu_order', $month)
            ->sum('total_harga_beli');


            
            
            $totalHargabeli = isset($totalHargabeli) ? 'Rp ' . number_format($totalHargabeli, 0, ',', '.') : 'Rp.0';







            if ($request->input('bdaymonthbar') === null) {
                // Check if the 'bdaymonth' key exists in the session
                if (session()->has('bdaymonthbar')) {
                    // Retrieve the value from the session
                    $yearmonthBar = session('bdaymonthbar');
                } else {
                    // Set a default value if the key doesn't exist in the session
                    $yearmonthBar = '2023-01';
                }
            } else {
                // Store the 'bdaymonth' input in the session
                session(['bdaymonthbar' => $request->input('bdaymonthbar')]);
                $yearmonthBar = $request->input('bdaymonthbar');
            }

            
            $monthbar = date('m', strtotime($yearmonthBar)); 
            
            $monthNameBar = Carbon::create()->month($monthbar)->locale('id')->monthName;

            $jumlahTotalproduk = DB::table('detail_transaksi')
            ->select('produk.id_produk', 'produk.id_outlet', 'produk.nama', DB::raw('MONTH(transaksi.waktu_order) AS MONTH'), DB::raw('SUM(detail_transaksi.quantity) AS total_quantity'))
            ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
            ->join('produk', 'produk.id_produk', '=', 'detail_transaksi.id_produk')
            ->where('produk.id_outlet', $id_outlet)
            ->whereMonth('waktu_order', '=', $monthbar)
            ->groupBy('produk.id_produk', 'produk.id_outlet', 'produk.nama',  DB::raw('MONTH(transaksi.waktu_order)'))
            ->get();


            $january2023 = isset($monthlyCounts[2023]['January']) ? $monthlyCounts[2023]['January'] : 0;
            $february2023 = isset($monthlyCounts[2023]['February']) ? $monthlyCounts[2023]['February'] : 0;
            $march2023 = isset($monthlyCounts[2023]['March']) ? $monthlyCounts[2023]['March'] : 0;
            $april2023 = isset($monthlyCounts[2023]['April']) ? $monthlyCounts[2023]['April'] : 0;
            $may2023 = isset($monthlyCounts[2023]['May']) ? $monthlyCounts[2023]['May'] : 0;
            $june2023 = isset($monthlyCounts[2023]['June']) ? $monthlyCounts[2023]['June'] : 0;
            $july2023 = isset($monthlyCounts[2023]['July']) ? $monthlyCounts[2023]['July'] : 0;
            $august2023 = isset($monthlyCounts[2023]['August']) ? $monthlyCounts[2023]['August'] : 0;
            $september2023 = isset($monthlyCounts[2023]['September']) ? $monthlyCounts[2023]['September'] : 0;
            $october2023 = isset($monthlyCounts[2023]['October']) ? $monthlyCounts[2023]['October'] : 0;
            $november2023 = isset($monthlyCounts[2023]['November']) ? $monthlyCounts[2023]['November'] : 0;
            $december2023 = isset($monthlyCounts[2023]['December']) ? $monthlyCounts[2023]['December'] : 0;

            



            

            return view('laporaneu', [
                'transactions' => $transactions,
                'month' => $month,
                'monthName' => $monthName,
                'jumlahTotalproduk' => $jumlahTotalproduk,
                'monthbar' => $monthbar,
                'monthNameBar' => $monthNameBar,
                'transactionCount' => $transactionCount,
                'totaltagihan' => $totaltagihan,
                'totalHargabeli' => $totalHargabeli,

                'january2023' => $january2023,
                'february2023' => $february2023,
                'march2023' => $march2023,
                'april2023' => $april2023,
                'may2023' => $may2023,
                'june2023' => $june2023,
                'july2023' => $july2023,
                'august2023' => $august2023,
                'september2023' => $september2023,
                'october2023' => $october2023,
                'november2023' => $november2023,
                'december2023' => $december2023,

            ]);
        }


    public function outletper(Request $req){
        $id = session('id');
        $outlet = new outlet;
        $outlet->nama = $req->namaout;
        $outlet->alamat = $req->alout;
        $outlet->id_akun = $req->idout;
        if ($outlet->save()) {
            $outlet = outlet::where('id_akun', '=', $id)->first();
            $data = akun::where('id_akun', '=', $id)->first();
            session()->put('datas', $data);
            session()->put('outlets', $outlet);
            return view('informasi');
        }
    }



    


    public function tanggal()
    {
        $query = DB::table('transaksi')
            ->selectRaw('MONTH(waktu_order) as month, COUNT(*) as count')
            ->groupBy(DB::raw('MONTH(waktu_order)'))
            ->orderBy(DB::raw('MONTH(waktu_order)'));

        $results = $query->get();

        return view('dashboard', ['results' => $results]);
    }




    public function flushSession(Request $request)
    {
        $request->session()->flush();

        return view('login');
    }


    function log($id){
        $data = akun::where('id_akun','=',$id)->get();
        $outlet = outlet::where('id_akun','=',$id)->get();
        return view('informasi',['datas'=>$data,'outlets'=>$outlet]);
    }




    function upatas(Request $req){
        $akun = akun::where('id_akun', '=', $req->idbar)->first();
        $outlet = outlet::where('id_akun', '=', $req->idbar)->first();

        
        if ($outlet) {
            $outlet->nama = $req->nama;
            $outlet->alamat = $req->alamat;
            $outlet->save();
        } else {

        }

        if ($akun) {
            $akun->noTelp = $req->telp;
            $akun->save();
        } else {

        }

        $data = akun::where('id_akun','=',$req->idbar)->first();
        $outle = outlet::where('id_akun','=',$req->idbar)->first();

        session()->put('datas', $data);
        session()->put('outlets', $outle);

        


        return view('informasi');
        
    }


    function upbawah(Request $req){
        $akun = akun::where('id_akun', '=', $req->idbaw)->first();

        if ($akun) {
            $akun->kodeManajer = $req->kode;
            if (isset($req->passbaw)) {
                $akun->password =  bcrypt($req->passbaw);
            }
            $akun->save();
        } else {

        }

        $data = akun::where('id_akun','=',$req->idbaw)->first();

        session()->put('datas', $data);

        return view('informasi');
        
    }

    function logout(Request $request){
        $request->session()->flush();
    }


    public function lockses(){        
        $data = array(            
            'id' => "posts",            
            'posts' => akun::all()        
            );        
        return view('posts.informasi')->with($data);    
    }


    public function show($id){
        return outlet::find($id);
    }

    public function masukdata(Request $req){
        $akunData = Akun::all();

        foreach ($akunData as $akun) {
            if ($req->email == $akun->email) {
                return redirect('signup')->with('eror', 'Email sudah terdaftar.');
            }
        }

        if ($req->pass != $req->konfir) {
            return redirect('signup')->with('eror', 'Password dan konfirmasi password berbeda.');
        }

        $newAkun = new Akun;
        $newAkun->email = $req->email;
        $newAkun->password = $req->pass;
        // $newAkun->password = bcrypt($req->pass);
        $newAkun->notelp = $req->notelp;
        $newAkun->kodeManajer = $req->kode;
        $newAkun->save();

        return view('login');

    }




    function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if (Auth::attempt($infologin)){
            return 'sukses';
        } else {
            return 'gagal';
        }
    }


}