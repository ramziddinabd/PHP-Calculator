<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="calculator card">

<!--<input type="text" class="calculator-screen z-depth-1"  name="num1" value="" disabled />-->
<div>
  <form action="" method="post">
    <div style="border: 10px solid #85adad; " >
      <input type="text" style="width: 100%; height: 70px; padding:10px; font-size: 22px;" name="num1" value="" placeholder=" Enter the first number "><br>
    </div>  
    <div style="border: 10px solid #85adad; ">  
      <input type="text" style="width: 100%; height: 70px; padding:10px; font-size: 22px;" name="num2" value="" placeholder=" Enter the second number ">
    </div>  
    <br>
    <div class="calculator-keys">
      <button type="submit" class="operator btn btn-info" value="+" name="a">+</button>
      <button type="submit" class="operator btn btn-info" value="-" name="s">-</button>
      <button type="submit" class="operator btn btn-info" value="*" name="m">&times;</button>
      <button type="submit" class="operator btn btn-info" value="/" name="d">&divide;</button>

      <!--<button type="button" class="decimal function btn btn-secondary" value="." name="a">.</button>
      <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>
      <button type="button" class="equal-sign operator btn btn-default" value="=" name="a">=</button>-->
    </div>
    <div style="border: 5px solid #85adad; font-size: 30px; font-family:Sanserif; padding:10px;">
  </form>
  <?php
  if(isset($_POST['a'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $add = $num1 + $num2;
    echo "Result is   " .$add;
   }

  if(isset($_POST['s'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $s = $num1 - $num2;
    echo "Result is " .$s;
  }

  if(isset($_POST['m'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $mult = $num1 * $num2;
    echo "Result is " .$mult;
  }

  if(isset($_POST['d'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $div = $num1 / $num2;
    echo "Result is " .$div;
  }
 ?>
</div>