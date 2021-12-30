
<?php foreach($content as $key => $value): ?>
    <a href="index.php?Sujet=<?=$value->Nom;?>"><?=$value->Nom;?></a>
<?php endforeach; ?>
