<!doctype html>
<html>
<!--TODO: If done is clicked, only the last course will be added,
even when more are checked and/or the last one is NOT checked -->
    <head>
        <title>Search Results</title>
    </head>
    <body>
        <form action="/shopping" method="post">
        <?php
            foreach ($posts as $post): 
                foreach ($post as $input): ?>          
                <p><?php echo $input->cat_num; ?></p>
                <p><?php echo $input->title; ?></p>
                <p><?php echo $input->description; ?></p>
                <p><?php echo $input->instructor; ?></p>
                <input type="checkbox" name="shop[]" id="shop" value="<?php echo $input->id?>" > Shop <br> 
                <input type="hidden" name="shopping" value="<?php echo $input->id?>" />
                <p><?php echo '-----------------------------------'; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
        <input type="submit" value="Done" />
        </form>
    </body>
</html>
