<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    //

    /**
     * Display a listing of the resource
     * 
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $item_list = Event::orderBy('id', 'desc')->get();
        return view("admin.event.list", ["item_list" => $item_list]);
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $itemStatus = Event::create($input);
        if ($itemStatus) {
            $request->session()->flash('success', 'An item successfully added');
        } else {
            $request->session()->flash('error', 'Oops something went wrong, item is not saved');
        }
        return redirect("admin/event");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Event::where(['id' => $id])->first();
        if (!$item) {
            return redirect('admin/todo')->with('error', 'Item not found');
        }
        return view('admin.event.view', ['item' => $item]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Event::where(['id' => $id])->orderBy('id', 'asc')->first();
        if ($item) {
            return view('admin.event.edit', [ 'item' => $item ]);
        } else {
            return redirect('admin/event')->with('error', 'Item not found');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Event::find($id);
        if (!$item) {
            return redirect('admin/evebt')->with('error', 'Item not found.');
        }
        $input = $request->input();
        $itemStatus = $item->update($input);
        if ($itemStatus) {
            return redirect('admin/event')->with('success', 'An item successfully updated.');
        } else {
            return redirect('admin/event')->with('error', 'Oops something went wrong. Item not updated');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Event::where(['id' => $id])->first();
        $respStatus = $respMsg = '';
        if (!$item) {
            $respStatus = 'error';
            $respMsg = 'Item not found';
        }
        $itemDelStatus = $item->delete();
        if ($itemDelStatus) {
            $respStatus = 'success';
            $respMsg = 'An item deleted successfully';
        } else {
            $respStatus = 'error';
            $respMsg = 'Oops something went wrong. Item not deleted successfully';
        }
        return redirect('admin/event')->with($respStatus, $respMsg);
    }
}
