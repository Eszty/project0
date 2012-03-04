<!doctype html>
<html>
    <head>
        <title>BlogIgniter - The Awesome Blog</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->id; ?></p>
            <p><?php echo $post->name; ?></p>
        <?php endforeach; ?>
    </body>
</html>
