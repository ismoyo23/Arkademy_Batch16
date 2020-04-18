<?php 

echo Biodata('M Ismoyo Setyonowidagdo', '19');

function Biodata($nama, $age)
{
	$data = [
			'name' => $nama,
			'age' => $age,
			'adrress' => 'Trenggalek',
			'Hobblies' => ['swiming', 'badmintoon'],
			'is_married' => false,
			'list_school' => ['Name : SMKN 2 Trenggalek', 'Year_in : 2017', 'Year_out : 2020'],
			'skills' => 'Php, javascript',
			'interest_in_coding' => True
		];

		return json_encode($data);
	}

