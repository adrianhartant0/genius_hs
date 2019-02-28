<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuTenant;
use App\MenuCategory;
use App\UnitTenant;
use Storage;
use Auth;

class GroceriesMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('app', [
                                    'module' => 'groceries_menu',
                                    'data' => MenuTenant::select('*')
                                    ->join('mst_menu_category','mst_menu_category.id_menu_category','=','mst_menu.id_menu_category')
                                    ->join('mst_unit_tenant','mst_unit_tenant.id_unit_tenant','=','mst_menu.id_unit_tenant')
                                    ->where('mst_menu.status', '=', 1)
                                    ->where('mst_unit_tenant.id_unit_tenant', '=', 4)
                                    ->get()
                                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $temp = MenuCategory::all();
        $temp1 = UnitTenant::all();
        return view('app', [
                                'module' => 'groceries_menu',
                                'action' => 'add',
                                'menucategorys' => $temp,
                                'tenants' => $temp1
                            ]);
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
        $menu_tenant = new MenuTenant;
        
        $menu_tenant->kode_menu = $request->kode_menu;
        $menu_tenant->nama_menu = $request->nama_menu;
        $menu_tenant->id_menu_category = $request->id_menu_category;
        $menu_tenant->id_unit_tenant = $request->id_unit_tenant;
        $menu_tenant->price = $request->price;
        $menu_tenant->description = $request->description;
        $menu_tenant->status = $request->status;
        $menu_tenant->status_available = $request->status_available;
        $menu_tenant->create_date = now();
        $menu_tenant->create_by = Auth::user()->name;

        // $path = $request->file('images')->store('public/images');
        // $menu_tenant->images = $path;
        $menu_tenant->save();
        return redirect('/groceries_menu')->with('success', 'New Menu has been Submit!!');
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
        $data_master_category  = MenuCategory::where('status', 1)
                                        ->get();
        $data_master_tenant  = UnitTenant::where('status', 1)
                                        ->get();
        $data = MenuTenant::find($id);
        return view('app', [
                                'id'                => $id,
                                'module'            => 'groceries_menu',
                                'action'            => 'view',
                                'data'              =>  $data,
                                'data_master_category' => $data_master_category,
                                'data_master_tenant' => $data_master_tenant
                            ]);
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
        $data_master_category  = MenuCategory::where('status', 1)
                                        ->get();
        $data_master_tenant  = UnitTenant::where('status', 1)
                                        ->get();
        $data = MenuTenant::find($id);
        return view('app', [
                                'id'                => $id,
                                'module'            => 'groceries_menu',
                                'action'            => 'edit',
                                'data'              =>  $data,
                                'data_master_category' => $data_master_category,
                                'data_master_tenant' => $data_master_tenant
                            ]);
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
        $menu_tenant = MenuTenant::find($id);

        $menu_tenant->kode_menu = $request->kode_menu;
        $menu_tenant->nama_menu = $request->nama_menu;
        $menu_tenant->id_menu_category = $request->id_menu_category;
        $menu_tenant->id_unit_tenant = $request->id_unit_tenant;
        $menu_tenant->price = $request->price;
        $menu_tenant->description = $request->description;
        $menu_tenant->status = $request->status;
        $menu_tenant->status_available = $request->status_available;
        $menu_tenant->update_date = now();
        $menu_tenant->update_by = Auth::user()->name;

        $menu_tenant->save();
        return redirect('/groceries_menu')->with('success', 'Menu ' . $menu_tenant->nama_menu . ' has been Updated!!');
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
        $menu_tenant = MenuTenant::find($id);
        $menu_tenant->status = 0;

        $menu_tenant->save();
        return redirect('/groceries_menu')->with('success', 'Menu ' . $menu_tenant->nama_menu . ' Successfully deleted !!');
    }
    public function deleteTemplate($id)
    {
        $data = MenuTenant::find($id);
        return view('app', [
                                'id'        => $id,
                                'module'    => 'groceries_menu',
                                'action'    => 'delete',
                                'data'      =>  $data
                            ]);
    }
}
