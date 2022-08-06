<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    public function attachmentable()
    {
        return $this->morphTo();
    }
}
