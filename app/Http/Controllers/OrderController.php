<?php

namespace App\Http\Controllers;

use App\Deal;
use App\MenuCategory;
use App\MenuItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hardees.order');
    }

    public function login()
    {
        return view('hardees.login');
    }
    public function menu()
    {
        return view('hardees.menu');
    }
    public function term()
    {
        return view('hardees.terms');
    }
    public function signup()
    {
        return view('hardees.signup');
    }
    public function order()
    {
        return view('hardees.order');
    }
    public function dealSelection($id)
    {
        $data = '';
        $deals = Deal::find($id);
        foreach ($deals->dealItems as $deal) {

            $menu_category = MenuCategory::find($deal->menu_cat_id);
            // return ($menu_category->menuItems->count());
            $data .= " <h4 class='text-dark font-weight-bold'>Choose Your $menu_category->name<span style='font-size: 12px; color:#7c888d;'> ( 1 Required )</span></h4>Select 1
            <br><fieldset>
            <th scope='col' style='border-bottom:2px solid black;'>";
            foreach ($menu_category->menuItems as $key => $menu_items) {

                $data .= "
                <input type='radio' class='d-iinline'  name=$menu_category->id>
                <h5 class='font-weight-bold d-inline text-dark'>$menu_items->name</h5><br><br>
                
                </th>
                ";
                // echo "<input type='text' value='$menu_item->name'>";
            }
            $data .= "</fieldset><hr>";
        }
        echo $data;
        // return ($menu_category->menuItems->count());
        // echo "<input type='text' value='ABC'>";
    }

    public function menuSelection($id)
    {
        $data = '';
        $menu_item = MenuItem::find($id);
        $ingredients = unserialize($menu_item->ingredients);
        $data .= "<fieldset>";
        foreach ($ingredients as $key => $ingredient) {
            $data .= "<input type='radio'  class='d-inline' name='ingredient'>
                <h5 class='font-weight-bold d-inline text-dark' >$ingredient</h5><br><br>
                ";
        }
        $data .= "</fieldset></th>";
        echo $data;
        // return ($menu_category->menuItems->count());
        // echo "<input type='text' value='ABC'>";
    }

    public function angus()
    {
        return view('hardees.angus');
    }
    public function contact()
    {
        return view('hardees.contact');
    }
    public function about()
    {
        return view('hardees.about');
    }

    public function career()
    {
        return view('hardees.career');
    }

    public function privacy()
    {
        return view('hardees.privacy');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
