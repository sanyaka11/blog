<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Отображение формы регистрации
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Сохранение нового пользователя
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', 'Регистрация прошла успешна');
        Auth::login($user);

        return redirect()->route('home');
    }

    /**
     * Отображение формы входа
     */
    public function loginForm()
    {
        return view('user.login');
    }

    /**
     * Обработка входа в систему
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            session()->flash('success', 'Вы успешно вошли');

            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('error', 'Неверный логин или пароль');
    }

    /**
     * Выход из системы
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}