
<?php include("../header.php") ?>



<style>

	bal-container {
		display: block;
	}

	bal-container form {
		display: flex;
		flex-direction: column;
	}

</style>


<?php 


$BEERALC = 12;
$LIQALC = 14;




//make sure they entered the form
	if(isset($_POST['submit']) ) {
		//get all this information
		$ratio = $_POST['gender'];
		$weight = (float)$_POST['weight'];
		$beers = (float)$_POST['beers'];
		$cocktails = (float)$_POST['cocktails'];
		$time = (float)$_POST['hours'];
		
		
		//check what type of drinks they had and how many
		//multiply that by average abv
		$totalAlc = ($beers * $BEERALC) + ($cocktails * $LIQALC);
		$totalAlc = (float)$totalAlc;

		$weightGrams = $weight * 454;
		$timeGap = $time * .015;

		if($ratio && $weightGrams && $beers && $cocktails && $timeGap) {
			echo "yes";
			// BAC = [Alcohol consumed in grams / (Body weight in grams x R)] X 100
			
			//do math
			$bac = ($totalAlc/($weightGrams*$ratio))*100;
			$bac = $bac - $timeGap;
			var_dump($bac);

			if($bac >= .08) {
			//tell them the answer
			$DUI = "<p> Your blood alcohol level is $bac,  Better not drive!</p>";
			echo $DUI;

			} else {
				$goodTogo = "<p>Your blood alcohol level is $bac, I guess you can drive?</p>";
				echo $goodTogo;
			}
			if($bac >= .3) {
				//tell them the answer
				$DUI = "<p> Your blood alcohol level is $bac.  You're close to blackout.</p>";
				echo $DUI;
			}
			if($bac >= .45) {
				//tell them the answer
				$DUI = "<p> Your blood alcohol level is $bac.  You're very close to death and should probably go to the hospital.</p>";
				echo $DUI;
			}


		}
	} else {
		echo "<p>Form not competed</p>";
	}
 ?>







<bal-container>
	<div class="inner-column">
	
		<form method="POST">

			<label>Gender by Birth</label>
			<label>Male</label>
			<input selected type="radio" name="gender"  value=".73">
			<label>Female</label>
			<input selected type="radio" name="gender"  value=".66">

			<label>What is your weight in pounds?</label>
			<input type="number" name="weight" min="50" value="125">

			<label>How many beers did you drink?</label>
			<input type="number" name="beers" min="0" value="1">

			<label>How many cocktails and/or shots did you drink?</label>
			<input type="number" name="cocktails" min="0" value="1">

			<label>How many hours has it been since your lat drink?</label>
			<input type="number" name="hours" min="0" value="1">

			<button type="submit" name="submit">Submit</button>

		</form>


	</div>
</bal-container>