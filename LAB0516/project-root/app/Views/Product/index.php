<?= $this -> extend('layouts/layout') ?>

<?= $this -> section('section') ?>

<h2><?= $str?></h2>
<p><?= $str2?></p>
<table>
<?php foreach ($arr as $key):?>
    <tr>
        <td>
            <?= $key['id']?>
        </td>
        <td>
            <?= $key['title']?>
        </td>
        <td>    
            <?= $key['amount']?>
        </td>
    </tr>
<?php endforeach;?>
</table>

<?= $this -> endSection('section') ?>