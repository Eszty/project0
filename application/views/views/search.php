
<!doctype html>
<html>
    <head>
        <title>Shopping</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post):?>
                <p><?php echo $post_c->title; ?></p>
            <?php endforeach; ?>
    </body>
</html>
