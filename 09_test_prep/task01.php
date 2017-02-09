<?php 

// Създайте форма с възможност да изберете вeгетарианско или месно меню. Менюто трябва да включва поне пет вида ястия. /Може да бъдат и с имена veg1, veg 2 …/. В зависимост от това какво меню сте избрали се появява съответното – вегетарианско или месно, отпечатано в неномериран списък. Формата и РНР кода, с който ще обработите постъпилата информация, трябва да бъдат в един файл. След натискане на бутона за избор на меню, формата трябва да изчезне и на нейно място да се появи списъка с ястията/менюто/. 

$arr_veg = ['veg1', 'veg2', 'veg3', 'veg4', 'veg5'];
$arr_meat = ['meat1', 'meat2', 'meat3', 'meat4', 'meat5'];

if (empty($_GET)) {
	?>

	<form action="" method="get">
		<select name="meal" id="">
			<option value="--">choose meal</option>
			<option value="meat">meat</option>
			<option value="veg">vegetarian</option>
		</select>
		<input type="submit" value="choose" name="submit">

	</form>
	<?php

} else {
	if ($_GET['meal'] == 'veg') {
		// var_dump($arr_veg);
		
		echo "<ul>";

		foreach ($arr_veg as $value) {
			echo '<li>'.$value.'</li>';
		}
		
		echo "</ul>";
	}
	elseif($_GET['meal'] == 'meat') {
		echo "<ul>";
		foreach ($arr_meat as $value) {
			echo '<li>'.$value.'</li>';
		}
		echo "</ul>";
	}
}