<?php /* 

Template Name: notre équipe

*/
?>

<?php get_header() ?>
<hr>
<!-- bloc notre équipe-->
<div class="container">
    <div class="container__all_team">
        <h2 class="title_activite">Notre équipe</h2>

        <div class="fonction">
            <h6>Membres du CODIR</h6>
        </div>
        <div class="container__equipe" id="notre_equipe_dirigeante">

            <?php if (have_rows('notre_equipe_dirigeante')) :
                $i = 1;
                while (have_rows('notre_equipe_dirigeante')) : the_row(); ?>

                    <div class="card card_equipe">
                        <img class="photo_staff" src="<?php the_sub_field('image'); ?>" class="card-img-top" alt="staff remove">
                        <div class="card-body card_body_staff">
                            <h5 class="card-title"><?php the_sub_field('titre'); ?></h5>
                            <p class="card-text"><?php the_sub_field('texte'); ?></p>

                        </div>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>



        </div>

        <br>
        <div class="fonction">
            <h6>Collaborateurs</h6>
        </div>
        <div class="container__equipe container_collaborateur" id="nos_collaborateurs">
            <?php if (have_rows('nos_collaborateurs')) :
                $i = 1;
                while (have_rows('nos_collaborateurs')) : the_row(); ?>

                    <div class="card card_equipe">
                        <img class="photo_staff" src="<?php the_sub_field('image'); ?>" class="card-img-top" alt="staff remove">
                        <div class="card-body card_body_staff">
                            <h5 class="card-title"><?php the_sub_field('titre'); ?></h5>
                            <p class="card-text"><?php the_sub_field('texte'); ?></p>

                        </div>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>

            <div class="texte_team_additionnel">
                <p><?php the_field('texte_additionnel_team'); ?></p>
            </div>
        </div>
    </div>
</div>



<?php get_footer() ?>