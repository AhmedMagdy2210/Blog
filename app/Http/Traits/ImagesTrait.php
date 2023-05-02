<?php

namespace App\Http\Traits;

trait ImagesTrait {
    private function uploadImage($file, $filename, $path, $oldFile = null) {

        $file->move(public_path('/upload' . $path), $filename);
        if (!is_null($oldFile)) {
            unlink(public_path('/upload' . $oldFile));
        }
        return true;
    }
}
