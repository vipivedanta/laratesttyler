<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;

class Candidate extends Model
{
    
    public function skills()
    {
    	return $this->hasMany(Skill::class,'candidate_id');
    }
}
