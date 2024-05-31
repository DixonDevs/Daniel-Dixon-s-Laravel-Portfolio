<?php

// app/Http/Controllers/MyController.php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MyController extends Controller
{
    public function show()
    {
        return Inertia::render('MyComponent', [
            'title' => 'Hello World',
            'message' => 'This is an Inertia.js component.'
        ]);
    }
}
