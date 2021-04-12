<?php 

namespace App\Repositories;

use App\Models\Skill;
use Exception;

class SkillsRespository {

	/**
	 * save skills to mysql
	 */
	public function save( $candidateID, $candidateSkill )
	{

		try {
			
			$skill = new Skill;
			$skill->candidate_id = $candidateID;
			$skill->language = $candidateSkill;
			$skill->save();
			return true;

		} catch (Exception $e) {
			dd($e);
			return false;
		}
	}
}