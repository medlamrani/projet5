<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

    <header class="masthead">
    </header>

    <div class="bloc">
        <h2 class="text-center" style="36px">Jeux du moment</h2>
    </div>

<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>

<section id="articles">

    <div class="container bg-white shadow">
        <div class="container">
            <div class="container-flex">
                <?php 
                foreach ($listOfGames as $game)
                {
                    if (strlen($game->getResume()) <= 40)
                    {
                        $resume = $game->getResume();
                    }
                    
                    else
                    {
                      $debut = substr($game->getResume(), 0, 40);
                      $debut = substr($debut, 0, strrpos($debut, ' ')) . '...';
                      
                      $resume = $debut;
                    }
                ?>
                    <div class="game-card">
                        <h3 class="card-title text-center"> <?= $game->getName() ?></h3>
                        <p class="card-text"><?= nl2br($resume) ?></p>
                        <div class="platform"><?= $game->getPlatform() ?></div>
                        <div class="editor"><?= $game->getEditor() ?></div>
                        <a href="http://localhost/projet5/controller/game/<?= $game->getId() ?>" class="btn btn-primary">Go</a>
                    </div>                        
                <?php
                }
                ?>
            </div>    
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require(__DIR__ . "/template/frontLayout.php"); ?>