<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Services\Menu\MenuService;
use App\Http\Requests\Menu\CreateFormRequest;


class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function create(){
       return view('admin.menu.add' ,[
           'title'=> 'them danh muc ',
           'menus' => $this->menuService->getParent()
       ]);
    }
    public function store(CreateFormRequest $request)
    {
        $this->menuService->create($request);
        return redirect()->back();


    }
    public function index()
    {
        return view('admin.menu.list', [
            'title'=>'danh sách danh mục mới nhất',
            'menus'=>$this->menuService->getAll()

        ]);
    }
}
