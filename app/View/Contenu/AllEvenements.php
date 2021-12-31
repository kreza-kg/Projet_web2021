
<div class="evenement_div">
    <?php foreach($AllEvents as $key => $value): ?>
        <div class="event_each">
            <article class="all_events">
                <h2><?=$value->nom?></h2>
                <img id="ImgEvent" src="<?=$value->image_event?>" alt="">
                <a href="index.php?Rdv=<?=$value->nom;?>" >Prendre Rendez-vous</a>
            </article>
        </div>
    <?php endforeach; ?>
</div>
