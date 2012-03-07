<!doctype html>
<html>
    <head>
        <title>Faculty</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->title; ?></p>
        <?php endforeach; ?>
    </body>
</html>
