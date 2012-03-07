<!doctype html>
<html>
    <head>
        <title>Courses</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->cat_num; ?></p>
            <p><?php echo $post->title; ?></p>
            <p><?php echo $post->description; ?></p>
            <p><?php echo $post->instructor; ?></p>
        <?php endforeach; ?>
    </body>
</html>
