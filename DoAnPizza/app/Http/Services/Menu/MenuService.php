<?php


namespace App\Http\Services\Menu;


use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
=======
>>>>>>> menu_home

class MenuService
{

    public function getParent(){
        return Menu:: where('parent_id',0)->get();
    }

    public function getAll()
    {
        return Menu::orderbyDesc('id')->paginate(10);
    }

    public function create($request)
    {
<<<<<<< HEAD

        try {
            
            $menu = new Menu();
            $menu->name = (string)$request->input('name');
            $menu->parent_id = (int)$request->input('parent_id');
            if ($request->hasFile('images')){
                $file = $request->file('images');
                $ext = $file->getClientOriginalExtension();
                $filename= time().'.'.$ext;
                $file->move('images',$filename);
                $menu->images = $filename;
    
            }
            $menu->description = (string)$request->input('description');
            $menu->content = (string)$request->input('content');
            $menu->active = (string)$request->input('active');
            $menu->save();

            
=======
        try {
            Menu::create([
                'name' => (string)$request->input('name'),
                'parent_id' => (int)$request->input('parent_id'),
                'description' => (string)$request->input('description'),
                'content' => (string)$request->input('content'),
                'active' => (string)$request->input('active'),
            ]);
>>>>>>> menu_home

            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
<<<<<<< HEAD

        


=======
>>>>>>> menu_home
    }
    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $menu = Menu::where('id', $id)->first();
        if ($menu) {
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();
        }

        return false;
    }
    public function update($request, $menu): bool
    {
        if ($request->input('parent_id') != $menu->id) {
            $menu->parent_id = (int)$request->input('parent_id');
        }

        $menu->name = (string)$request->input('name');
        $menu->description = (string)$request->input('description');
        $menu->content = (string)$request->input('content');
        $menu->active = (string)$request->input('active');
        $menu->save();

        Session::flash('success', 'Cập nhật thành công Danh mục');
        return true;
    }

}
<<<<<<< HEAD

=======
>>>>>>> menu_home
