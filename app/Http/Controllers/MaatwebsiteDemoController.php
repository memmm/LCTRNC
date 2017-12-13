<?php

namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\HttpResponse;
use App\Http\Requests\CreateUserRequest;
use Session;
use Auth;
use Image;
use Maatwebsite\Excel\Facades\Excel;


class MaatwebsiteDemoController extends Controller
{


	/**
     * Return View file
     *
     * @var array
     */
	public function importExport()
	{
		return view('importExport');
	}


	/**
     * File Export Code
     *
     * @var array
     */
	public function downloadExcel(Request $request, $type)
	{
		$data = User::get()->toArray();
		return Excel::create('usersExcel', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}


	/**
     * Import file into database Code
     *
     * @var array
     */
	public function importExcel(Request $request)
	{


		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();


			$data = Excel::load($path, function($reader) {})->get();


			if(!empty($data) && $data->count()){


				foreach ($data->toArray() as $key => $value) {
					if(!empty($value)){
						foreach ($value as $v) {		
							$insert[] = ['name' => $v['name'], 'email' => $v['email']];
						}
					}
				}

				
				if(!empty($insert)){
					User::insert($insert);
					return back()->with('success','Insert Record successfully.');
				}


			}


		}


		return back()->with('error','Please Check your file, Something is wrong there.');
	}


}