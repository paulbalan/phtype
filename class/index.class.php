<?php

class Index
{
	private $index = array();

	public function rand_low_letter()
	{
		return chr(rand(97,122));
	}

	public function rand_upper_letter()
	{
		return chr(rand(65,90));
	}

	public function rand_number()
	{
		return chr(rand(48,57));
	}

	public function rand_symbol()
	{
		$seed = rand(0,2); 

		if($seed == 0)
			return chr(rand(33, 47));
		else if($seed = 1)
			return chr(rand(58, 64));
		else
			return chr(rand(123, 126));
	}

	public function full_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$index[$i] = chr(rand(33,126));
		}

		return implode("",$index);
	}

	public function letter_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			if(rand(0,1) == 0)
				$index[$i] = chr(rand(65, 90));
			else
				$index[$i] = chr(rand(97, 122));
		}

		return implode("",$index);
	}

	public function number_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$index[$i] = chr(rand(48, 57));
		}

		return implode("",$index);
	}

	public function basic_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$seed = rand(0,2);

			if($seed == 0)
				$index[$i] = chr(rand(48,57));
			else if($seed == 1)
				$index[$i] = chr(rand(65,90));
			else
				$index[$i] = chr(rand(97,122));
		}

		return implode("",$index);
	}

	public function number_of_possibilities($algorithm, $length)
	{
		if ($algorithm == "basic_index")
			return pow(62, $length);

		if ($algorithm == "full_index")
			return pow(94, $length);

		if ($algorithm == "letter_index")
			return pow(52, $length);

		if ($algorithm == "number_index")
			return pow(10, $length);
	}
}