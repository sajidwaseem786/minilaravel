<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\category;
use App\subcategory;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $userId = \Auth::id();
    $users =  \DB::select('select * from user_roles where user_id = ?', [$userId]);
    if($users[0]->role_id==1){
    $TotalUsers = \DB::select("select COUNT(id) as totalUsers FROM users");
    $categories = \DB::select("select COUNT(id) as totalcategories FROM categories");
    $subcategories = \DB::select("select COUNT(id) as totalsubcategories FROM subcategories");
    $tutorials = \DB::select("select COUNT(id) as totaltutorials FROM tutorials");
    return view('admin.admin',compact("TotalUsers","categories","subcategories","tutorials"));
    }
    else
    {
        $categories = category::get();
        return view('home',compact("categories"));
    }
    }
    
    public function getInto($id){
        $userId = \Auth::id();
        $videos =  \DB::select("select * from tutorials INNER JOIN categories on tutorials.parentCategory=categories.id where categories.id=$id and (tutorials.permission='all' Or tutorials.permission=$userId)");
        return view('getInto',compact("videos"));
    }

    public function users(){
        $users = User::get();
        return view("users",compact("users"));
    }

    public function add_user(){
        return view('add_user');
    }

    public function store_user(Request $request){
   
        $user = User::create([
            'name' => $request->bName,
            'tell'=>$request->phone,
            'nit'=>$request->nit,
            'mainContact'=>$request->main_contact,
            'address'=>$request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($user){
        $userId =  $user->id;
        $results = \DB::select("insert into user_roles(user_id,role_id)values($userId,'2')");
        }
        $users = User::get();
        return view("users",compact("users"));
    }

    public function editUser($id){
      $user = \DB::table('users')->where('id', $id)->first();
      return view("edituser",compact("user"));
      
    }

    public function update_user(Request $request){
        $user = User::findOrFail($request->id);
        $user->email=$request->email;
        $user->nit=$request->nit;
        $user->address=$request->address;
        $user->tell=$request->phone;
        $user->name=$request->bName;
        $user->mainContact=$request->main_contact;
        $user->save();
        $users = User::get();
        return view("users",compact("users"));

    }

    public function deleteUser($id){
        $user = User::destroy($id);
        $users = User::get();
        return view("users",compact("users"));
    }

    public function createCategory(){
        return view('admin.add_category');
    }
    public function show_categories(){
        $categories = category::get();
        return view("admin.categories",compact("categories"));
    }
    public function store_category(Request $request){
            $category = category::create([
            'category_name' => $request->category_name,
        ]);
        $categories = category::get();
        return view("admin.categories",compact("categories"));
    }

    public function createsubCategory(){
        $categories = category::get();
        return view('admin.add_subcategory',compact("categories"));
    }

    public function show_subcategories(){
        $subcategories =  \DB::select('select * from subcategories inner join categories on categories.id=subcategories.parentCategory');
        return view("admin.subcategories",compact("subcategories"));
    }

    public function store_subcategory(Request $request){
        $pCategory = $request->parentcategory_name;
        $cCategory = $request->subcategory_name;
        $results = \DB::select("insert into subcategories(parentCategory,subcategoryName)values($pCategory,'$cCategory')");
        $subcategories =  \DB::select('select * from subcategories inner join categories on categories.id=subcategories.parentCategory');
        return view("admin.subcategories",compact("subcategories"));
    }


   public function createVideo(){
        $subcategories =  \DB::select('select * from subcategories inner join categories on categories.id=subcategories.parentCategory');
        $users =  \DB::select('select * from users');
        return view('admin.add_video',compact("subcategories","users"));
    }

    public function showVideos(){
        $videos =  \DB::select("select * from tutorials INNER JOIN categories on tutorials.parentCategory=categories.id INNER JOIN subcategories on subcategories.id=tutorials.subCategory left JOIN users on tutorials.permission=users.id");
        return view("admin.videos",compact("videos"));
    }

    public function storeVideo(Request $request){
        $pCategory = $request->parentcategory_name;
        $cCategory = $request->childcategory_name;
        $typeReq = $request->typedoc;
        $duration = $request->duration;
        $permission = $request->permission;
        $description = $request->description;
        $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();  

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();

        $request->file->move(public_path('files'), $fileName);
       
        $results = \DB::select("insert into tutorials(parentCategory,subCategory,type,duration,filepath,permission,description)values('$pCategory','$cCategory','$typeReq','$duration','$fileName','$permission','$description')");
      
    }
}
