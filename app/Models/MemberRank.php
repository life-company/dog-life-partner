<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberRank extends Model
{
    use HasFactory;
    protected $table = 'm_member_ranks';

    protected $fillable = ['rank_name'];
}
