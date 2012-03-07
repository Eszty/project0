<!doctype html>
<html>
    <head>
        <title>Taking</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post):
                foreach ($post as $post_c): ?>
                    <p><?php echo $post_c->title; ?></p>
                <?php endforeach; ?>
            <?php endforeach; ?>
    </body>
</html>
