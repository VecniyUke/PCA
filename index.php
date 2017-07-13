
 <?php include 'template/header.php'; ?>
<img class="main-page-img" src="http://momsdish.com/sites/default/files/styles/recipe_image_1600x900_scale/public/recipe/image/1375139332.JPG" alt="">

<!-- <?php

$names = array('Tom', 'Jack','Lily', 'Bill', 'Ivan');




?>

<table>
  <tr>
    <td>Имя</td>
    <td>Возраст</td>
    <td>Рулетка</td>
  </tr>

  <?php foreach($names as $key => $value):?>
<?php $age = rand(5,24);?>
  <?php if($age >= 12):?>
      <tr>
        <td><?php echo $value;?></td>
        <td><?php echo $age;?></td>
        <td><?php if((rand(1,6) == 3)){echo "Убит!";} else {echo "Выжил!";};?></td>
      </tr>
    <?php endif;?>
  <?php endforeach;?>
</table>

<?php
foreach ($names as $key => $value) {
?>

   <?php echo $value; ?>
   <br>

  <?php
}

$arraySize = count($names);
?> -->

 <?php include 'template/footer.php'; ?>
