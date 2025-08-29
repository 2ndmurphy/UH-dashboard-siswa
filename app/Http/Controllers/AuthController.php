<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Student;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:admin,guru,siswa'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $request->session()->regenerate();

            if (!$user->role) {
                Auth::logout();
                return back()->withErrors([
                    'email' => "Your account doesn't have an assigned role."
                ]);
            }

            switch ($user->role) {
                case 'admin':
                    return view('dashboard', ['user' => $user]);
                case 'guru':
                    return view('dashboard', ['user' => $user]);
                default:
                    Auth::logout();
                    return back()->withErrors([
                        'email' => 'Unauthorized role.',
                ]);
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            if (!$user->role) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Your account does not have an assigned role.',
                ]);
            }

            switch ($user->role) {
                case 'admin':
                    return view('dashboard', ['user' => $user]);
                case 'guru':
                    return view('dashboard', ['user' => $user]);
                // case 'siswa':
                //     return view('siswa.index', ['siswa' => $user]);
                default:
                    Auth::logout();
                    return back()->withErrors([
                        'email' => 'Unauthorized role.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterPage()
    {
        return view('auth.register');
    }

    public function showLoginPage()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function studentPage() 
    {
        $students = Student::with('kelas')->paginate(10)->onEachSide(1);
        $students_count = Student::count();
        $kelas_count = Kelas::count();
        $active_student = Student::where('is_active', true)->count();
        $inactive_student = Student::where('is_active', false)->count();

        return view('students', compact(
            'students', 
            'students_count', 
            'active_student', 
            'kelas_count',
            'inactive_student'
        ));
    }

    public function classPage()
    {
        return view('classes');
    }
    
    public function gradePage()
    {
        return view('grades');
    }

    public function reportPage()
    {
        return view('reports');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
