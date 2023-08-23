<?php 
include "project-data.php";


$projectData = file_get_contents('projects.json');
var_dump($projectData);

$enter = null;
$projectName = "";
$update = null;
$lang = "";
$function = "";
$validate = "";

$hasName = false;
$hasUpdate = false;
$hasLang = false;
$hasFunction = false;

$nameError = false;
$updateError = false;
$langError = false;
$functionError = false;


//if enter is pushed do this
if ( isset($_POST['enter']) ) {
	$enter = $_POST['enter'];
//if its submitted say added
	

	if ( isset($_POST['project-name']) ){
		$projectName = $_POST['project-name'];

		if (strlen($projectName) > 0){
			$hasName = true;
		} else {
			$nameError = "Please add a name.";
		}
	}

	//if update is added say the date
	//(checkdate($month, $day, $year)); but how do I loop through countless years?
	

	if ( isset($_POST['update']) ){
		$update = $_POST['update'];
		if ($update !== null){
			$hasUpdate = true;
		} else {
			$updateError = "Please add a date.";
		}
	}
	//if the laguages was added say the language
	

	if ( isset($_POST['language']) ){
		$lang = $_POST['language'];

		if (strlen($lang) > 0){
			$hasLang = true;
		} else {
			$langError = "Please add a language.";
		}
	}
	//if the functon is added list description
	
	if ( isset($_POST['function']) ){
		$function = $_POST['function'];

		if (strlen($function) > 10){
			$hasFunction = true;
		} else {
			$functionError = "Please add the function.";
		}
	}

	if ($hasName && $hasUpdate && $hasLang && $hasFunction){
		$validate = "Form validated.";
	} else{
		$validate = "Form unfinished.";
	}

	$newProject = array(
		"name" => $projectName,
		"date" => $update,
		"languages" => $lang,
		"funtion" => $function,

	);

	var_dump($newProject);

	$projectsJson = json_encode($newProject);

	file_put_contents("projects.json", $projectsJson);

} 

//if enter is pushed enter says form validated 
//if enter isn't set then say form incomplete.





 ?>

 <section class="project-form">
 	<div class="inner-column">

		<h1>Add a Project!</h1>

		<form class="project-adder" method="post">
			<div class="field">

				<label>Project Name</label>
				<input type="text" name="project-name" value="<?=$projectName?>">
				<?php if($nameError){?>
					<p><?=$nameError?></p>
				<?php }?>

			</div>

			<div class="field">

				<label>Last Updated</label>
				<input type="date" name="update" value="<?=$update?>">
				<?php if($updateError){?>
					<p><?=$updateError?></p>
				<?php }?>


			</div>

			<div class="field">

				<label>Languages Used</label>
				<input type="text" name="language" value="<?=$lang?>">
				<?php if($langError){?>
					<p><?=$langError?></p>
				<?php }?>
				

			</div>

			<div class="field">

				<label>Function of Project</label>
				<textarea name="function" type="text"id="" cols="30" rows="10" placeholder="<?=$function?>"></textarea>
				<?php if($functionError){?>
					<p><?=$functionError?></p>
				<?php }?>
				

			</div>

			<button type="submit" name="enter"> Add project</button>

		</form>

	<section class="form-validation">
		<div class="inner-column">
			
			<h2>Form validation</h2>

			<h3><?=$projectName?></h3>
			<p><?=$validate?></p>
			<p><?=$update?></p>
			<p><?=$lang?></p>
			<p><?=$function?></p>


		</div>
	</section>
		
	</div>
</section>









 