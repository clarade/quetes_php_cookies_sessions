<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php
var_dump($_SESSION['cart']);
if (isset($_GET['add_to_cart'])) {
    // checking in the url if one of the cookies have been added
    if (isset($_SESSION['loginname'])) {
        $id = $_GET['add_to_cart'];
        $cookie = $catalog[$id];
        if (array_key_exists($id, $_SESSION['cart'])) {
            // if it already exists, increment
            $_SESSION['cart'][$id]['quantity']++;
        } else {
            $cookie['quantity'] = 1;
            // pushing  a new value in $cookie array initialized as 1, with quantity key name
            $_SESSION['cart'][$id] = $cookie;
            // pushing cookie value to $_SESSION['cart'] array with additionnal []
        }
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg"
                    alt="<?= $cookie['name']; ?>"
                    class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $cookie['name']; ?>
                    </h3>
                    <p><?= $cookie['description']; ?>
                    </p>
                    <a href="?add_to_cart=<?= $id; ?>"
                        class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php';
