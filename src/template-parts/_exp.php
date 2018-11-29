<?php

include __DIR__ . '/datas/_exp_array.php';
?>

<div class="timeline">
    <?php foreach ($datas as $key => $value) { ?>  
        <div class="timeline-block">
            <div class="timeline-point">
                <span class="material-icons">check</span>
            </div>
            <div class="timeline-content">
                <div class="card">
                    <div class="card-title">
                        <span class="date"><?php echo $value['date']; ?></span>
                        <a class="name" href="<?php echo $value['site']; ?>" target="_blank"><?php echo $key ?></a>
                        <span class="job"><?php echo $value['job']; ?></span>
                    </div>
                    <ul class="card-content">
                        <?php foreach ($value['missions'] as $missions => $mission) { ?>  
                            <li><?php echo $mission ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>
</div>