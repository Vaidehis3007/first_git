<?php
// UserController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
 public function index()
 {
 $users = User::all();
 return view('users.index', compact('users'));
 }
// Implement other methods like create, store, edit, update, destroy as needed
}
