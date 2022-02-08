<?php
	//1
	function result($length, $width)
	{
		echo "The area of Rectangle: ". $length*$width . "<br>"."Perimeter: ". 2*($length+$width) . "<br>";

	}	
	result(3,11);
	//2
	function VAT($num)
	{
		echo "VAT= ". $num*0.15 . "<br>";

	}	
	VAT(11);

	//3
	$value=34;
		if($value % 2 == 0 )
		{
		echo "EVEN"."<br>";
		}
		else
		{
			echo "ODD"."<br>";
		}
	//4

		  $a=45;
	      $b=153;
	      $c=20;
		      if($a>$b && $a>$c)
		      {
		        echo $a;
		      }
		      else
		      {
		        if($b>$a && $b>$c){
		          echo $b;
		        }
		        else
		          echo $c;
		      }
		      echo "<br>";

	//5
		      for($i=10; $i<=100; $i++)
		      {
            	if($i%2 != 0)
            	{
            		echo $i."<br>";
            	}
            	else
            	{

            	}
        	  }
        	  echo "<br>";

	//6

        	  $array = ['id'=>20-42406-1, 'name'=>'Rima, Samira Kabir', 'cgpa'=>3.84, 'email'=>'rima@gmail.com'];
			  $search="20-42406-1";
			  		foreach ($array as $s) 
			  		{

						if($search==$s)
		            	{
		            		echo "Found";
		            	}
		            	else
		            	{
		            		echo "Not Found";
		            	}

					}

	//7

				/*	$arr = 
					[
					'a1'=> ['point'=>*, 'num'=>'1 2 3', 'text'=>'A'],
					'a2'=> ['point'=>**, 'num'=>'1 2', 'text'=>'B C'],
					'a3'=> ['point'=>***, 'num'=>'1 ', 'text'=>'D E F']
					];
					for ($i = 1; $i <4; $i++) 
					{
					    for ($j = 1; $j <= $i; $j++)
					    {
					    	echo $i["point"].$i["num"].$i["text"]
					       
					    }
					    echo '<br>';
					}
					*/
	//8





?>