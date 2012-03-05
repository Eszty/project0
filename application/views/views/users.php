<!doctype html>
<html>
    <head>
        <title>Users</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->id; ?></p>
        <?php endforeach; ?>
    </body>
</html>
