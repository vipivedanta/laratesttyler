<?php 

namespace App\Services;
use Exception;
use Log;
use App\Repositories\CandidateRepository;

class candidateService {



	public function save( $name, $age, $gender ) 
	{

		try {

			$candidateRepo = new CandidateRepository;
			return $candidateRepo->save( $name, $age, $gender );

		} catch ( Exception $e ) {

			Log::info($e->getMessage());
			return false;
		}
	}

	public function all()
	{
		$candidateRepo = new CandidateRepository;
		return $candidateRepo->all();
	}
}