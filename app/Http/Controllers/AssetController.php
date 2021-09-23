<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function store(Request $request) {
        $path = $request->file('image')->store('images');
        $asset = Asset::create([
            'filename' => basename($path),
            'url' => Storage::url($path)
        ]);
        return $asset;
    }

    public function show(Asset $asset) {
        return "OK";
    }
}
