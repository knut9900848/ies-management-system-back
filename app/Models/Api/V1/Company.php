<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modles\Api\V1\Attachment;

class Company extends Model
{
    use HasFactory;

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachmentable');
    }
}
