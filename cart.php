<?php require 'inc/head.php';?>
<?php

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
}


//  Display shopping cart items from $_SESSION here.

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $id => $item) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg"
                    alt="<?= $item['name']; ?>"
                    class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $item['name']; ?>
                    </h3>
                    <p><?= $item['description']; ?>
                    </p>
                    <p><?= $item['quantity']; ?>
                    </p>
                    <a href="increment.php?id=<?= $id; ?>"
                        class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    <a href="decrement.php?id=<?= $id; ?>"
                        class="btn btn-primary">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </a>
                </figcaption>
            </figure>
        </div>
        <?php } ?>

    </div>
</section>
<?php require 'inc/foot.php';
