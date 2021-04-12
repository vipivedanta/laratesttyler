<?php 

namespace App\Repositories;

use App\Models\Candidate;
use Exception;

class CandidateRepository {

	/**
	 * Save candidate  to mysql
	 */
	public function save($name,$age,$gender)
	{

		try {
			$candidate = new Candidate;
			$candidate->name = $name;
			$candidate->age = $age;
			$candidate->gender = $gender;

			$candidate->save();
			return $candidate->id;

		} catch (Exception $e ) {
			return false;
		}
	}

	/**
	 * All
	 */
	public function all()
	{
		return Candidate::with('skills')->paginate(20);
	}
}