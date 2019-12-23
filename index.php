<?php 
echo "Example list 1: <br><br>";

$list1 = array(321,132,123,444,5412,2145,4125,616,166,1234,4321,4312,3412);

$re = '/(?<!\d)[1-3]{3}(?!\d)/';
$group_1= preg_grep($re, $list1);
	


		
$re = '/(?<!\d)4{3}(?!\d)/';	
$group_2= preg_grep($re, $list1);
				
	

$re = '/(?<!\d)(1|2|4|5){4}(?!\d)/';
$group_3 = preg_grep($re, $list1);

		

$re= '/(?<!\d)(1|6){3}(?!\d)/';
$group_4 = preg_grep($re, $list1);
	

$re= '/(?<!\d)[1-4]{4}(?!\d)/';
$group_5 = preg_grep($re, $list1);

	

// check wich array has more elements 

$check = array('Group 1' => $group_1, 'Group 2' => $group_2, 'Group 3' => $group_3, 'Group 4' => $group_4, 'Group 5' => $group_5);


$result = max($check);

// Get the key of the largest array
$key = array_search($result, $check);

//Count the elements of the array 
$count=count($result);

// Convert the largest array to string 
$string =  implode(", ",$result);



// Echo the answer 

echo 'List 1: '.implode(", ",$list1).'. <br><br>';

echo 'Group 1: '.implode(", ",$group_1).'. <br>';
echo 'Group 2: '.implode(", ",$group_2).'. <br>';
echo 'Group 3: '.implode(", ",$group_3).'. <br>';
echo 'Group 4: '.implode(", ",$group_4).'. <br>';
echo 'Group 5: '.implode(", ",$group_5).'. <br>';


echo 'The group with most numbers in it is '.$key.', with '.$count.' such numbers formed of the same digits: '.$string.'. <br><br><br>';














// List 2
echo "Example list 2: <br><br>";


$list2 = array(111,222,333);

echo 'List 2: '.implode(", ",$list2).'. <br><br>';


$re = '/(?<!\d)1{3}(?!\d)/';	
$group_1= preg_grep($re, $list2);
//echo result
echo 'Group 1: '.implode(", ",$group_1).' <br>';



$re = '/(?<!\d)2{3}(?!\d)/';	
$group_2= preg_grep($re, $list2);
//echo result
echo 'Group 2: '.implode(", ",$group_2).'<br>';


$re = '/(?<!\d)3{3}(?!\d)/';	
$group_3= preg_grep($re, $list2);
//echo result
echo 'Group 3: '.implode(", ",$group_3).'<br>';


if(count($group_1)===count($group_2) && count($group_2)===count($group_3)){

echo "Any of the 3 groups, since all of them have only 1 “member” <br><br><br>";

} else {

	$check = array('Group 1' => $group_1, 'Group 2' => $group_2, 'Group 3' => $group_3);


	$result = max($check);

	// Get the key of the largest array
	$key = array_search($result, $check);

	//Count the elements of the array 
	$count=count($result);

	// Convert the largest array to string 
	$string =  implode(", ",$result);

	echo 'The group with most numbers in it is '.$key.', with '.$count.' such numbers formed of the same digits: '.$string.'. <br><br><br>';

}



































// List 3 
echo "Example list 3: <br><br>";


$list3= array(775, 755, 757);
echo 'List 3: '.implode(", ",$list3).'. <br><br>';


$re = '/7\d?[^5]/';	
$group_1= preg_grep($re, $list3);
//echo result
echo 'Group 1: '.implode(", ",$group_1).' <br>';


$re = '/5[^7]/';
$group_2 = preg_grep($re, $list3);
//echo result
echo 'Group 2: '.implode(", ",$group_2).' <br>';

if(count($group_1)===count($group_2)){

echo "Any of the 2 groups, since all of them have only 1 “member” <br>";

} else {

	$check = array('Group 1' => $group_1, 'Group 2' => $group_2);


	$result = max($check);

	// Get the key of the largest array
	$key = array_search($result, $check);

	//Count the elements of the array 
	$count=count($result);

	// Convert the largest array to string 
	$string =  implode(", ",$result);

	echo 'The group with most numbers in it is '.$key.', with '.$count.' such numbers formed of the same digits: '.$string.'. <br>';

}



?>	