<!--<!doctype html>
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
-->

<div data-role = "page">
    
    <div data-role = "header">
        <h1>Faculty</h1>
    </div>
    
    <div data-role = "content">
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->title; ?></p>
        <?php endforeach; ?>
    </div>
