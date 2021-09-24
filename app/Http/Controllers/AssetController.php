<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AssetController extends Controller
{
    public function store(Request $request) {
        $path = $request->file('image')->store('images', 's3', 'public');
        $asset = Asset::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path),
            'uuid' => Str::uuid()
        ]);
        return $asset;
    }

    public function show(Asset $asset) {
        return "OK";
    }
}
