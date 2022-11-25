<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peys App</title>
    </head>
    <body>

        <?php
               if (isset($_GET['btnProcess'])) {
                $imgSize = $_GET['rangeSize'];
                $color = $_GET['colorBorder'];
            }
      ?>
  
    <form method="get">
    
        <h2><u>PEYS APP</u></h2>
        <fieldset style="width: 310px;">
        <label><i>Select Photo Size:</i></label>
        <input type="range" name="rangeSize" id="rangeSize" min="10" max="100" step="10" value="60">

<br>

        <label for="colorBorder"><i>Select Border Color:</i></label>
        <input type="color" name="colorBorder" id="colorBorder">

        <button type="submit" name="btnProcess">Process</button>
        <img src="color.png" alt="color" style="width: 310px;">
        </fieldset> 
    </form>

    <br><br>

    <img src="love.png" alt="love.png" width="<?php echo $imgSize; ?>%" border="5%" style="color:<?php echo $color; ?>" class="center">
        

    
    </body>
</html>