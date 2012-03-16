<!--<!doctype html>
<html>
<!--TODO: Same problem as shopping, must be able to add more courses
simultaniously
    <head>
        <title>Shopping</title>
    </head>
    <body>
    <h1>You have these courses in your shopping car:</h1>
        <form action="/taking" method="post">
        <?php
            foreach ($posts as $post):
                foreach ($post as $post_c): ?>
                    <p><?php echo $post_c->title; ?></p>
                    <input type="checkbox" name="shop[]" id="shop" value="<?php echo $post_c->id?>" > Take <br>
                    <input type="hidden" name="shopping" value="<?php echo $post_c->id?>" />
                <?php endforeach; ?>
            <?php endforeach; ?>
            <input type="submit" value="Enroll" />
        </form>
    </body>
</html>
-->




