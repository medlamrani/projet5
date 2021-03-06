<?php $title = htmlspecialchars($news->getTitle()); ?>

<?php ob_start(); ?>
    <header>
    <div class="bloc mt-5 container">
            <div class="col-lg-7 headtext">
                <div class="header-content mx-auto">
                    <h1 class="mb-5 text-center text-black">
                        <?= $news->getTitle() ?>
                    </h1> 
                </div>
            </div>
        </div> 
    </header>  
<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>

    <section id="article">
        <div class="container bg-white shadow">
            <div class="row">
                <div class="col-10 offset-1 mb-5 mt-5">
                    <div class="text-justify mb-5">Publié le <?= $news->getAddDate()->format('d/m/Y à H\hi') ?></div>
                    <div class="text-justify article-text text-reader"><?= nl2br($news->getContent()) ?></div>
                    <a class="btn btn-primary btn-lg active" href="http://localhost/projet5/controller/listofnews">Retour</a>
                </div>    
            </div>
        </div>
    </section>


    <section id="commentaire">
        <div class="container bg-white shadow">
            <div class="row">
            <?php
            foreach ($listOfComments as $comment)
            {
            ?>
                <div class="col-10 offset-1 mb-5 mt-5">
                
                    <div class="text-justify mb-5">Posté par <strong><?= $comment->getUser() ?></strong> le <?= $comment->getCommentDate() ?></div>
                    <div class="text-justify article-text text-reader"><?= nl2br($comment->getContent()) ?></div>
                    <a class="btn btn-primary btn-lg active" href="http://localhost/projet5/controller/reportcomment/<?= $comment->getId() ?>">Signaler</a>
                    <hr>
                </div>    
            <?php
            }
            ?>
            </div>
        </div>
    </section>

    <section id="comment">
        <div class="container bg-white shadow">
            <div class="row">
                <div class="col-10 offset-1 mb-5 mt-5">
                <?php
                        if(isset($_SESSION['id']))
                        {
                    ?>
                    <div class="text-justify mb-5">Laisser un commentaire</div>
                    <form action="http://localhost/projet5/controller/addcomment<?= $news->getId() ?>" method="post" class="form-signin">
                        <div>
                            <label for="content">Commentaire</label><br />
                            <textarea class="form-control" id="content" name="content" ></textarea>
                        </div>
                        <div>
                            <input class="btn btn-lg btn-primary btn-block mt-3" type="submit" name="addcomment" value="ajouter" />
                        </div>
                    </form>
                </div>   
                <?php
                        }else
                        {
                        ?>
                            <div class="text-justify mb-5">Vous devez etre connecter pour laisser un commentaire</div>
                    <?php            
                        } 
                        ?>  
            </div>
        </div>
    </section>


    

    

<?php $content = ob_get_clean(); ?>

<?php require(__DIR__ . "/template/frontLayout.php"); ?>