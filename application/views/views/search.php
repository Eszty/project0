<!doctype html>
<html>
    <head>
        <title>Search</title>
    </head>
    <body>
        <h1>Search for courses</h1>
        <form action="/search" method="post">
            <input type="text" name="catalog_number" placeholder="Catalog number" /><br />
        </form>
        <?php
            foreach ($posts as $post): ?>
            <p><?php echo $post->cat_num; ?></p>
            <p><?php echo $post->title; ?></p>
            <p><?php echo $post->description; ?></p>
            <p><?php echo $post->instructor; ?></p>
        <?php endforeach; ?>
    </body>
</html>
