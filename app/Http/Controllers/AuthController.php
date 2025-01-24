namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Pastikan kamu sudah punya tampilan login
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin'); // Setelah login berhasil, redirect ke halaman admin
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']); // Jika login gagal
    }
}
