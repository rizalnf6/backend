<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;
use DateTimeZone;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data['hari_ini'] = $this->rupiah(Transaction::whereDate('transactions.created_at', Carbon::today())->sum('total_price'));
        $data['bulan_ini'] = $this->rupiah(Transaction::whereMonth('transactions.created_at', '=', date('m'))->whereYear('transactions.created_at', '=', date('Y'))->sum('total_price'));
        $data['tahun_ini'] = $this->rupiah(Transaction::whereYear('transactions.created_at', '=', date('Y'))->sum('total_price'));
        $data['semua'] = $this->rupiah(Transaction::sum('total_price'));

        $now = new DateTime( "5 months ago", new DateTimeZone('Asia/jakarta'));
        $interval = new DateInterval( 'P1M');
        $period = new DatePeriod( $now, $interval, 5);
        $data_arr = array();
        foreach ($period as $day) {
            $trans = Transaction::whereMonth('created_at', '=', $day->format('m'))->whereYear('created_at', '=', $day->format('Y'))->sum('total_price');
            $data_push = [
                'bulan' => $this->tgl_indo($day->format('Y-m')),
                'trans' => $trans
            ];
            array_push($data_arr, $data_push);
        }
        $data['data_arr'] = $data_arr;
        $data_item = TransactionItem::groupBy('transaction_items.products_id')->get();
        $data_arrd = array();
        foreach ($data_item as $key) {
            $item = TransactionItem::where('transaction_items.products_id', '=', $key->products_id)->whereMonth('transaction_items.created_at', '=', date('m'))->whereYear('transaction_items.created_at', '=', date('Y'))->sum('quantity');
            $data_push = [
                'label' => $key->product->name,
                'value' => $item
            ];
            array_push($data_arrd, $data_push);
        }
        $data['data_arrd'] = $data_arrd;


        return view('dashboard',$data);
    }

    public function rupiah($angka){
    
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
     
    }

    public function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}
