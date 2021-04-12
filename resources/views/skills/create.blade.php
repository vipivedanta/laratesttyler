<form method="POST" action="{{ route('skills.store') }}">

	@csrf

	<label>Name</label>
	<input type="text" name="name" value="{{ old('name') }}" />
	@if($errors->has('name'))
	<span style="color:red;">{{ $errors->first('name') }}</span>
	@endif
	<br/>

	<label>Age</label>
	<input type="text" name="age" value="{{ old('age') }}" />
	@if($errors->has('age'))
	<span style="color:red;">{{ $errors->first('age') }}</span>
	@endif
	<br/>

	<label>Gender</label>
	<select name="gender">
		<option value="">Select</option>
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>
	<br/>

	<label>Languages</label>
	<input type="checkbox" name="languages[]" value="PHP">PHP<br/>
	<input type="checkbox" name="languages[]" value="CSS">CSS<br/>
	<input type="checkbox" name="languages[]" value="HTML">HTML<br/>
	<input type="checkbox" name="languages[]" value="Javascript">Javascript<br/>

	<br/><br/>
	<input type="submit" value="Save" />

</form>