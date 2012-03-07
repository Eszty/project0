<!doctype html>
<html>
    <head>
        <title>Taking</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->title; ?></p>
        <?php endforeach; ?>
    </body>
</html>
