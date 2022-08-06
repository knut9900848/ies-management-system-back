<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Api\V1\File;

class Company extends Model
{
    use HasFactory;

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
