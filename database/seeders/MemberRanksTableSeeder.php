<?php

namespace Database\Seeders;

use App\Models\MemberRank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberRanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MemberRank::create(['rank_name' => '一般会員']);
        MemberRank::create(['rank_name' => 'プレミアム会員']);
    }
}
