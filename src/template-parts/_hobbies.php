<?php

include __DIR__ . '/datas/_hobbies_array.php';
?>

<ul class="hobbies collection">
    <?php foreach ($datas as $key => $value) { ?>    
      <li class="collection-item"><?php echo $value ?></li>
    <?php } ?>
</ul>