<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technique;
use Illuminate\Support\Str;

class LibraryController extends Controller
{
    public function index()
    {
        $techniques = Technique::all();
        return view('technique_library', compact('techniques'));
    }

    public function show(Technique $technique)
    {
        // For matching folder names in the new design
        $slug = Str::slug(str_replace(['The Morning ', 'The '], '', $technique->title), '_');
        $viewName = 'technique_detail_' . $slug;

        if (view()->exists($viewName)) {
            return view($viewName, compact('technique'));
        }

        // Fallback to a default if they didn't provide a specific detail page.
        // For now, let's just return the technique_library if detail is missing
        return redirect()->route('library')->with('message', 'Detail page not available yet.');
    }

    public function session(Technique $technique)
    {
        $slug = Str::slug(str_replace(['The Morning ', 'The '], '', $technique->title), '_');
        $viewName = 'guided_session_' . $slug;

        if (view()->exists($viewName)) {
            return view($viewName, compact('technique'));
        }

        return redirect()->route('library')->with('message', 'Session not available yet.');
    }
}
