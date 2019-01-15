<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="width: 92% margin: 0px auto padding: 10px 
  border: 1px solid #a94442 
  color: #a94442 
  background: #f2dede 
  border-radius: 5px 
  text-align: left"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>