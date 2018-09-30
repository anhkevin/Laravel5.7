<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Customer;

class DemoController extends Controller
{
    public function index()
    {
        $data = [];

        // get customer
        $customers = DB::table('customer')->get();
        //die(var_dump($customers));
        return view('DEMO.index',$data);
    }

    /**
     * List customer
     */
    public function getCustomers(Request $request){
		$columns = array(
			0 => 'id',
			1 => 'name',
			2 => 'phone',
            3 => 'email',
            4 => 'address'
		);
		$totalData = Customer::count();
        $limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');
		if(empty($request->input('search.value'))){
			$posts = Customer::offset($start)
					->limit($limit)
					->orderBy($order,$dir)
					->get();
			$totalFiltered = Customer::count();
		}else{
			$search = $request->input('search.value');
			$posts = Customer::where('id', 'like', "%{$search}%")
							->orWhere('name','like',"%{$search}%")
                            ->orWhere('phone','like',"%{$search}%")
                            ->orWhere('email','like',"%{$search}%")
                            ->orWhere('address','like',"%{$search}%")
							->offset($start)
							->limit($limit)
							->orderBy($order, $dir)
							->get();
			$totalFiltered = Customer::where('name', 'like', "%{$search}%")
							->orWhere('email','like',"%{$search}%")
							->count();
		}		
					
		
		$data = array();
		
		if($posts){
			foreach($posts as $r){
				$nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['phone'] = $r->name;
                $nestedData['email'] = $r->name;
                $nestedData['address'] = $r->name;
				//$nestedData['created_at'] = date('d-m-Y H:i:s',strtotime($r->created_at));
				$nestedData['action'] = '
					<a href="#!" class="btn btn-warning btn-xs">Edit</a>
					<a href="#!" class="btn btn-danger btn-xs">Delete</a>
				';
				$data[] = $nestedData;
			}
		}
		
		$json_data = array(
			"draw"			=> intval($request->input('draw')),
			"recordsTotal"	=> intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data"			=> $data
		);
		
		echo json_encode($json_data);
	}

}
