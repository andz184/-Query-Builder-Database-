<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use DB;
use PhpParser\Node\Stmt\TryCatch;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->get();
      
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      if($request->isMethod('Post')) {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $params = $request->except('_token');
        // kiem tra xem co anh khong 
        if ($request->hasFile('image')) {
            // Nhận file ảnh từ request
            $image = $request->file('image');
            
            // Đặt tên mới cho file ảnh
            $filename = time() . '_' . $image->getClientOriginalName();
            
            // Lưu file ảnh vào thư mục public/images
            $image->storeAs('public/images', $filename);
            
            // Lấy đường dẫn của file ảnh đã lưu
            $imagePath = 'public/images/' . $filename;
            
            // Gán đường dẫn vào tham số 'image'
            $params['image'] = $imagePath;
        }
        $params['name'] = $request->input('name');
        $params['gender'] = $request->input('gender');
        $params['phone'] = $request->input('phone');
        $params['address'] = $request->input('address');
       
        
        $students = DB::table('students')->insert($params);
       
        if ($students) {
            return redirect()->route('index')->with('success','thêm thành công học sinh');
        }
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
