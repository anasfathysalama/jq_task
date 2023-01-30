<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setLogoAttribute($value)
    {
        $name = $this->imageName ?? 'logo';
        if ($value instanceof UploadedFile) {
            deleteImage($this->getRawOriginal());
            return $this->attributes[$name] = uploadImage($value, $this->getTable());
        }
        return $this->attributes[$name] = $value;
    }

    public function getLogoAttribute($value)
    {
        if ($value) {

            return url('/storage') . '/' . $value;
        }
    }
}
