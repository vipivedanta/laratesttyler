<?php 

namespace App\Services;

use App\Repositories\SkillsRespository;
use Exception;


class skillService {		

	/*
	Save
	 */	
	public function save( $candidateID, $skills )
	{
		try {

			foreach( $skills as $skill ) {
				//simplifying due to time restriction
				$skillRepo = new SkillsRespository;
				$skillRepo->save( $candidateID, $skill);
			}

			return true;

		} catch ( Exception $e ) {
			dd($e);
			return false;
		}
	}
}