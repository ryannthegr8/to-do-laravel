<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;


class ToDoListController extends Controller
{

    //::where - is used to query the database to give data that has is_complete as 0 and leave the ones that have 1
    public function index(){
        return view('welcome'
        
        , ['listItems' => ListItem::where('is_complete', 0)->get()]
    );
    }

    public function markComplete($id){
       $listItem = ListItem::find($id);
       $listItem->is_complete = 1;
       $listItem->save();

        return redirect('/');
    }
    public function saveItem(Request $request){
        // \Log::info(json_encode($request->all()));

        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0; 
        $newListItem->save();

        return redirect('/');
    }
}
