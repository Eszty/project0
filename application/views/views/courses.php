<!doctype html>
<html>
    <head>
        <title>Courses</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): ?>
<<<<<<< HEAD
            <p><?php echo $post->id; ?></p>
            <p><?php echo $post->title; ?></p>
=======
            <p><?php echo $post->cat_num; ?></p>
            <p><?php echo $post->title; ?></p>
            <p><?php echo $post->description; ?></p>
            <p><?php echo $post->instructor; ?></p>
>>>>>>> 4793a49f79c2f65dc7526ab5b5ace71c2c86d7be
        <?php endforeach; ?>
    </body>
</html>
