<?php
$title = 'Page d\'acceuil';
$nav = 'index';
require_once('header.php');
require_once('fonction.php');
?>
<?php
/* varDump($_GET['parfum']); */
?>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <h1>Composez votre glace</h1>

            <form action="/index.php" method="GET">
                <h2>Les parfums</h2>
                <?php foreach ($parfums as $parfum => $prix) : ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <?= checkbox('parfum', $parfum, $_GET) ?>
                            <?= $parfum ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach ?>

                <h2>Votre cornet</h2>

                <?php foreach ($cornets as $cornet => $prix) : ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <?= radio('cornet', $cornet, $_GET) ?>
                            <?= $cornet ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach ?>

                <h2>Les supplements</h2>

                <?php foreach ($supplements as $supplement => $prix) : ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <?= checkbox('supplement', $supplement, $_GET) ?>
                            <?= $supplement ?> - <?= $prix ?> €
                        </label>
                    </div>
                <?php endforeach ?><br>
                <button type="submit" class="btn btn-primary">Composer ma glace</button>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php if (!empty($ingredients)) : ?>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Votre glace composer</h5>
                        <ul>
                            <?php foreach ($ingredients as $ingredient) : ?>
                                <li class=""><?= $ingredient  ?></li>

                            <?php endforeach ?>

                        </ul>
                        <p>Total<strong> <?= $total  ?></strong> €</p>

                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
<?php endif ?>
<?php  ?>
<?php require_once('footer.php'); ?>