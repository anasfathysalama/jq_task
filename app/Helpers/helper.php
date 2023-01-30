<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;


if (!function_exists('deleteImage')) {
    function deleteImage($path = null, $disk = 'public')
    {
        Storage::disk($disk)->delete($path);
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage(UploadedFile $file, $folder = null, $disk = 'public', $fileName = null)
    {
        $name = !is_null($fileName) ? $fileName : Str::random(25);
        return $file->storeAs(
            $folder,
            $name . '.' . $file->getClientOriginalExtension(),
            $disk
        );
    }
}
