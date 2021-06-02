<?php
$date='02/06/2021'; 
$pseudo='Kaidjinn'; 
$msg='Bonjour tout le monde, konichiwaaa mina san !';
$nbi= 5; 
?>


<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-8"></th>
        </tr>
    </thead>
    <tbody>

    <?php
        for ($i = 0; $i < $nbi; $i++) {
    ?>
            <tr class="table-light">
                <td class="col-2"><?= $date ?></td>
                <td class="col-2"><?= $pseudo ?></td>
                <td class="col-8"><?= $msg ?></td>
            </tr>
            <?php }?>
    </tbody>
    
</table>