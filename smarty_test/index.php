<?php
require_once("../libs/Smarty.class.php");

$smarty = new Smarty;


//Que 1. Write a function to check whether the value of a given variable is alphanumeric or not. 
$string = array("HelloWorld", "2023");

function checkAlphanumeric () {
    global $string;
    foreach($string as $value){
        if(!ctype_alnum($value)){
            return false;
        }
    }
    return true;
}
if(checkAlphanumeric()){
    echo "yes it is alphanumeric <br/>";
} else{
    echo "no it is not alphanumeric <br/>";
}

//Que 2. How do I count the number of elements in an array? Give an example.
$element = array("aman","ashu","dravinanshu");
$count = count($element);
echo "number of element in present in the array = ".$count;


//Que 3. Write a program to take a number and perform the following tasks on that. Here’s what you need to do.
$x = 10;
$y = 20;
$z = $x + $y;
echo "<br/> perform two number added task = ".$z;



//Que 4. Write a program to show 5 examples of truncate. Use the same content as given in Ques 5.
$smarty->assign('someContent', 'uCertify, headquartered in Pleasanton, CA, was founded on the belief that we "learn by doing" and interactivity is the key to effective learning, using virtual environments where students learn by doing. The virtual environment encourages safe exploration and experimentation resulting in better learning. uCertify platform is equally effective for self-paced, instructor-led or blended learning.');

$smarty->assign('someText','uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels. It offers cloud-based and device-enabled, teaching and learning management platforms for online, anywhere, anytime, competency-based learning. Courses delivered on uCertify LEARN include highly interactive lessons.');


//Ques 5. Que 5. Write the program to perform the following operations on the given content:
//Count number of characters
//Count number of paragraphs
//Count number of sentences
//Count number of words

$smarty->assign('countChar','uCertify, headquartered in Pleasanton, CA, was founded on the belief that we "learn by doing" and interactivity is the key to effective learning, using virtual environments where students learn by doing. The virtual environment encourages safe exploration and experimentation resulting in better learning. uCertify platform is equally effective for self-paced, instructor-led or blended learning.');

$smarty->assign('countPara','uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels. It offers cloud-based and device-enabled, teaching and learning management platforms for online, anywhere, anytime, competency-based learning. Courses delivered on uCertify LEARN include highly interactive lessons.');

$smarty->assign('countSen','With more than 400 titles and partnerships with major publishers, uCertify offers depth and breadth learning in its course offerings. uCertify provides this solution in a cloud base, hassle free hosted environment with powerful and scalable infrastructure and 24x7 support.');

$smarty->assign('countWord','At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning. Thus, we provide hands-on courses and labs. The courses come complete with Pre-Assessment, Exercises, Flashcards, Quizzes, and Post-Assessments. Hands-on labs are virtual and live environments where students learn by doing. Labs encourage exploration and experimentation in a risk-free environment resulting in better learning for students');

//Que 6. smarty foreach how to start at array 1 not 0? Give an example.
$smarty->assign('start',array(0,1,2,3,4,5));


//Que 7. Give an example of foreachelse.
$arr = array();
$smarty->assign('myColor', $arr);


//Ques 8. Write a program to print the values of a given Smarty array in proper format.

$smarty->assign('Contacts',array(
	array('fax' => '555-222-9876',
		'email' => 'megha@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
	array('fax' => '555-222-8876',
		'email' => 'pete.gupta@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	))
);



//Que 10. How do I count the number of elements in an array? Give an example.
$arr = array("jack","rayan","tom","harry");
$smarty->assign('count', $arr);


$smarty->display('template.tpl');
?>