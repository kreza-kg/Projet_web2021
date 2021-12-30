<?php foreach($AllEvents as $key => $value): ?>
    <article class="all_events">
        <h2><?=$value->nom?></h2>
        <img id="ImgEvent" src="<?=$value->image_event?>" alt="">
        <a href="index.php?Rdv=<?=$value->nom;?>" >Prendre Rendez-vous</a>
    </article>
<?php endforeach; ?>
