<?php

namespace App\Models\Api\V1\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Api\V1\Admin\SubCategory;

class Category extends Model
{
    use HasFactory;

    public function sub_categories() {
        return $this->hasMany(SubCategory::class);
    }
}
