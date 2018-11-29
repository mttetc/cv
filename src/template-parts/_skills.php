<?php

include __DIR__ . '/datas/_skills_array.php';
?>

<?php foreach ($datas as $key => $value) { ?>
    <div class="chips">
        <?php foreach ($value as $skills => $skill) { ?>
            <span class="chip"><?php echo $skill ?></span>
        <?php } ?>
    </div> 
<?php } ?>