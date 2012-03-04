<!doctype html>
<html>
    <head>
        <title>BlogIgniter - The Awesome Blog</title>
    </head>
    <body>
        <?php foreach ($posts as $post): ?>
            <h1><?php echo $post->title; ?></h1>
            <h2><?php echo $post->title; ?></h2>
            <p><?php echo $post->content; ?></p>
        <?php endforeach; ?>
    </body>
</html>
