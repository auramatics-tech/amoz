<?php


namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\models\User;
use DB;
use Hash;


class UsersController extends Controller
{
    public function user_list()
    {
        $users = User::where('status', 1)->orderBy('id', 'ASC')->get();
        return view('admin.users.user_list', compact('users'));
    }
    public function create_user()
    {
        $roles = Role::all();
        $managers = User::where(['status' => 1, 'role' => 3])->get();
        $team_leaders = User::where(['status' => 1, 'role' => 4])->get();
        return view('admin.users.user', compact('managers', 'team_leaders','roles'));
    }
    public function add_user_details(Request $request)
    {
        // echo Auth::id();die;
        if (isset($request->id)) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
            $user = User::Find($request->id);
        } else {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
            $user = new User();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->manager = isset($request->manager) ? $request->manager : Null;
        $user->team_leader = isset($request->team_leader) ? $request->team_leader : Null;
        $user->save();
        return redirect()->route('user_list')->with('success', 'User detail added successfully!');
    }
    public function  edit_user($id)
    {
        $roles = Role::all();
        $managers = User::where(['status' => 1, 'role' => 3])->get();
        $team_leaders = User::where(['status' => 1, 'role' => 4])->get();
        $user = User::Find($id);
        return view('admin.users.user', compact('managers', 'team_leaders','roles','user'));
    }
    public function  destroy_user_details($id)
    {
        $user =  User::where('id', $id)->delete();
        return redirect()->back();
    }
    public function user_profile()
    {
        return view('admin.users.user_profile');
    }
}
