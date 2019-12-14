<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('services')
         ->where('titre', 'like', '%'.$query.'%')
         ->orWhere('categorie', 'like', '%'.$query.'%')
         ->orWhere('type', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orWhere('prix', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('services')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $service)
       {
        $output .= '

        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              <div class="block-4 text-center border">
                <figure class="block-4-image">
                  <a href="services/'.$service->id.'">
                   <img src="'. asset('img/' .$service->image).'" alt="Image placeholder" class="img-fluid" width="300px" height="400px"></a>
                 </figure>
                 <div class="block-4-text p-4">
                  <h3><a href="services/'.$service->id.'>'.$service->titre.'</a></h3>
                  <p class="mb-0">'.$service->description.'</p>
                  <p class="text-primary font-weight-bold">'.$service->prix.'DT</p>
                </div>
              </div>
            </div>

        ';
       }
      }
      else
      {
       $output = '
       <div>
        <p align="center" colspan="5">No Data Found</p>
       </div>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}