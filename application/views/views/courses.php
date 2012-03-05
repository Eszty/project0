<!doctype html>
<html>
    <head>
        <title>Courses</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->id; ?></p>
            <p><?php echo $post->title; ?></p>
        <?php endforeach; ?>
    </body>
</html>
