<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate_area</title>
</head>
<body>
<form action="" method="post">
<div class="inputs">
        <label class="length_box" for="length_of_rectangle"
          >Length of Rectangle</label
        >
        <input
          type="text"
          id="length_value"
          name="length_of_rectangle"

        /><label> mtr</label><br /><br />

        <label class="width_box" for="width_of_rectangle"
          >Width of Reactangle</label
        >
        <input
          type="text"
          id="width_value"
          name="width_of_rectangle"
        /><label> mtr</label><br /><br /><br />

        <input type="submit" name="result" value="Calculate Area and perimeter">
    </div>

      <div id= result1></div><br>
      <div id= result2></div>
    

</form>

<?php
    $length_of_rect= $_POST['length_of_rectangle'];
    $width_of_rect= $_POST['width_of_rectangle'];

    $area='';
    $perimeter='';

    if(is_numeric($length_of_rect) && is_numeric($width_of_rect)){
        $area = $length_of_rect*$width_of_rect;

        $perimeter = 2*($length_of_rect + $width_of_rect);


    }
    else{
        // alert("please input number");
    }

    echo "Area of rectangle (in sq mtrs) is $area " ;
    echo "<br>";
    echo "Perimeter of rectangle (in mtrs) is $perimeter "

?>


    
</body>
</html>


      