<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jobs\ProcessContacts;

class ProjectController extends Controller
{
    public function post_upload(Request $request)
    { 
    	if ($request->hasFile('cv')) {
    		$path = $request->file('cv')->store('/');
    		ProcessContacts::dispatch($path);
            return back()->with('success', 'Image uploaded successfully');
       }
    }
}
