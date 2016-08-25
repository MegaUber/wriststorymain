<?php 

	for($i = 0; $i < 6; $i++){
	 		$test[$i] = new stdClass;
	}

	$test[0]->data = "What a great teaching moment! The students freely hung around after the race and earned their Liberty Day Constitution Booklet an Constitution bracelet (American pride) and vowed that they would pass this knowledge on to others and will challenge others with their new expanded knowledge about the United States Constitution";
	$test[0]->author = "– Joseph Cofield, Florida State Coordinator, Liberty Day Institute";


	$test[1]->data = "The Veterans bracelets are an awesome idea and thank you for supplying them. We are selling them and the proceeds will be donated to COATA(Children's Organ Transplant Association). We are raising the funds for our Department President, this is her year and this is her program. So far they have been a great fund raiser and we have raised a lot of money. Thank you again.";
	$test[1]->author = "-Annie Anderson, American legion Auxiliary, 5th District President";

	$test[2]->data = "While parking cars at our post for a downtown event, we sold 52 American Veteran Bracelets in 4 hours and parked 66 cars.";
	$test[2]->author = "-Elaine M., American Legion Auxiliary, #38, Ft Myers, FL";

	$test[3]->data = "Wow! Wow! This is the best fundraiser that I and the American Legion Auxiliary have ever had. We ordered 100 bracelets, and sold them in a day and a half... and just like that we made over $400 dollars. Then we orderd 100 more and all were gone within 2 days. I recommend this fundraiser to everyone. Men women and children are wearing them with American Pride." ;
	$test[3]->author ="-J.P. Decker, Sergeant at Arms, American Legion Auxiliary Unit 158 Florida";


	$test[4]->data = "The armed forces & military bracelets sell themselves. my only delay was casused by me not ordering them soon enough! You will not find a quicker nor more successful fundraiser.";
	$test[4]->author = "-John Vernon Peterson";

	$test[5]->data = "Best fund raising tool we have had. Sold all of our 400 in 2 months. I am ordering more. Thanks.";
	$test[5]->author = "-Larry Nelson, American Legions Post 413, Grand Blanx MI";

	//$test = file_get_contents('C:/Users/Jon/Desktop/testimonial.json');
	//$jsonDecode = json_decode($test, true);;
	
	//shuffle($testimonials);

	var_dump($test);

	echo "<br> <br>";

	var_dump($test[3]->author);


	
?>