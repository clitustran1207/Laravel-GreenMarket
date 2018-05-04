<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SampleChart;
use Khill\Lavacharts\Lavacharts;
use BillDetail;
use Illuminate\Support\Facades\DB;

class Ad_HomeController extends Controller
{
    // public $products;
    // public function postDate(Request $req) {
    //     session('start', date_format($req->start,"Y-m-d"));
    //     session('end', date_format($req->end,"Y-m-d"));
    //     return dd(session('start'));
    // }
    public function getAdminIndex(){
        // $chart = new SampleChart;
        // $chart->dataset('Sample', 'bar', [90, 45, 84, 65, 100])
        //         ->options([
        //             'borderColor' => 'red',
        //         ]);
        // $chart->dataset('Sample 2', 'bar', [100, 65, 84, 45, 90])->color('#00ff00');
        $lava = new Lavacharts;
        
        self::pieChart($lava);
        self::barChart($lava, session('start') ? session('start') : '2018-04-01', session('end') ? session('end') : '2018-05-30');
        self::lineChart($lava);
        // $months = DB::table('bills')
        //             ->select([DB::raw('SUM(total) as revenue'), DB::raw('MONTH(order_created_at) as month')])
        //             ->groupBy('month')
        //             ->get();
        return view('admin_pages.index',compact('lava'));
        //return dd($months);
    }
    private static function pieChart($lava){
        $total = DB::table('bills')->count();
        $order = DB::table('bills')
                    ->select(DB::raw('count(*) as number, status'))
                    ->groupBy('status')
                    ->get();
        $rpOrder = $lava->DataTable();
        $rpOrder->addStringColumn('Order')
                ->addNumberColumn('Percent');
                foreach($order as $one){
                    $rpOrder->addRow([$one->status, ($one->number*100)/$total]);
                }
        $lava->PieChart('RpOrder', $rpOrder, [
            'is3D'   => true,
            'slices' => [
                ['offset' => 0.1,'color' => '#f96a74'],
                ['offset' => 0.15,'color' => '#ffa91c'],
                ['color' => '#32c861']
            ],
            'height' => 350,
            'chartArea' => [
                'width' => '85%',
                'left' => 100
            ],
        ]);
    }
    private static function barChart($lava, $start, $end){
        $products = DB::table('bill_details')
                ->join('products', 'products.id','bill_details.product_id')
                ->join('bills','bills.id','bill_details.bill_id')
                ->where('bills.status','Success')
                ->whereDate('bill_details.created_at', '>=', $start)
                ->whereDate('bill_details.created_at', '<=', $end)
                ->groupBy('products.pro_name')
                ->select([DB::raw('products.pro_name'), DB::raw('SUM(bill_details.quantity) as quantity_sold')])
                ->orderBy('quantity_sold','DESC')
                ->limit(5)
                ->get();
        $topPro = $lava->DataTable();
        $topPro->addStringColumn('Product')
                ->addNumberColumn('Quantity Sold');
                foreach($products as $item){
                    $topPro->addRow([$item->pro_name, (int)$item->quantity_sold]);
                }
        $lava->BarChart('TopPro', $topPro, [
            'focusTarget' => 'category',
            'height' => 350,
            'hAxis' => [
                'title' => 'Quantity'
            ],        
            'legend' => [
                'position' => 'top'
            ],
            'chartArea' => [
                'width' => '75%',
                'left' => 200,
            ],
            'orientation' => 'vertical',
        ]);
    }
    private static function lineChart($lava){
        $months = DB::table('bills')
                    ->select([DB::raw('SUM(total) as revenue'), DB::raw('MONTH(order_created_at) as month')])
                    ->where('status','Success')
                    ->groupBy('month')
                    ->get();
        $revenue = $lava->DataTable();
        $revenue->addStringColumn('Month')
                ->addNumberColumn('Revenue');
                $m=1;
                while($m<=12){
                    foreach($months as $month){
                        if($m==$month->month){
                            $revenue->addRow([$month->month, $month->revenue]);
                            $m++;
                        }
                    }
                    $revenue->addRow([$m, 0]);
                    $m++;
                    
                }
        $lava->LineChart('Revenue', $revenue, [
            'height' => 350,
            'hAxis' => [
                'title' => 'Month'
            ],
            'vAxis' => [
                'title' => 'Revenue'
            ]
        ]);
    }
}
