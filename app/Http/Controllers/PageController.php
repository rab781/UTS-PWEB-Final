<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        // Informasi statistik pengguna
        $userStats = [
            'articles' => 12,
            'views' => 1520,
            'likes' => 284,
            'comments' => 56
        ];

        // Data artikel terbaru
        $artikelTerbaru = [
            [
                'id' => 1,
                'title' => 'Getting Started with Laravel',
                'excerpt' => 'Learn the basics of Laravel framework and start building web applications.',
                'created_at' => '15-04-2025',
                'category' => 'Technology',
                'views' => 320
            ],
            [
                'id' => 2,
                'title' => 'The Power of Blade Templates',
                'excerpt' => 'Explore the features of Laravel\'s Blade templating engine.',
                'created_at' => '10-04-2025',
                'category' => 'Development',
                'views' => 245
            ],
            [
                'id' => 3,
                'title' => 'Effective Route Management',
                'excerpt' => 'Best practices for organizing routes in a Laravel application.',
                'created_at' => '05-04-2025',
                'category' => 'Web Development',
                'views' => 190
            ]
        ];

        return view('dashboard', [
            'username' => $username,
            'userStats' => $userStats,
            'artikelTerbaru' => $artikelTerbaru
        ]);
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function pengelolaan()
    {
        // Data artikel statis untuk tampilan pengelolaan
        $artikels = [
            [
                'id' => 1,
                'title' => 'Getting Started with Laravel',
                'deskripsi' => 'Learn the basics of Laravel framework and start building web applications.',
                'created_at' => '2023-04-15',
                'status' => 'Published',
                'category' => 'Technology',
                'views' => 320
            ],
            [
                'id' => 2,
                'title' => 'The Power of Blade Templates',
                'deskripsi' => 'Explore the features of Laravel\'s Blade templating engine.',
                'created_at' => '2023-04-10',
                'status' => 'Published',
                'category' => 'Development',
                'views' => 245
            ],
            [
                'id' => 3,
                'title' => 'Effective Route Management',
                'deskripsi' => 'Best practices for organizing routes in a Laravel application.',
                'created_at' => '2023-04-05',
                'status' => 'Published',
                'category' => 'Web Development',
                'views' => 190
            ],
            [
                'id' => 4,
                'title' => 'Authentication in Laravel',
                'deskripsi' => 'Implementing user authentication in Laravel applications.',
                'created_at' => '2023-04-01',
                'status' => 'Draft',
                'category' => 'Security',
                'views' => 0
            ],
            [
                'id' => 5,
                'title' => 'Working with Eloquent ORM',
                'deskripsi' => 'Understanding Laravel\'s Eloquent ORM for database interactions.',
                'created_at' => '2023-03-25',
                'status' => 'Published',
                'category' => 'Database',
                'views' => 278
            ]
        ];

        return view('pengelolaan', compact('artikels'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        $userCredentials = [
            'username' => $username ?? 'rehan',
            'password' => '********'
        ];

        return view('profile', compact('userCredentials'));
    }

    public function buatArtikel(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'required|string',
            'status' => 'required|in:Published,Draft'
        ],
        [
            'title.required' => 'Judul artikel harus diisi.',
            'category.required' => 'Kategori artikel harus diisi.',
            'description.required' => 'Deskripsi artikel harus diisi.',
            'status.required' => 'Status artikel harus dipilih.'
        ]);

        // Redirect ke halaman pengelolaan dengan parameter sukses
        return redirect()->route('pengelolaan', ['success' => true])
            ->with('message', 'Artikel berhasil ditambahkan!');
    }
}
