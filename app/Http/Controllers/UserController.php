<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with(['designation', 'department'])->get();
        return view('users', compact('users'));
    }

    public function search(Request $request)
    {
        $query = User::query()->with(['designation', 'department']);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhereHas('department', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                })
                ->orWhereHas('designation', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
        }

        $users = $query->get();
        return view('user_cards', compact('users'))->render();
    }
}
