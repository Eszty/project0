<!doctype html>
<html>
    <head>
        <title>Search Results</title>
    </head>
    <body>
        <form action="/shopping" method="post">
        <?php
            $this->load->helper('form');
            foreach ($posts as $post): 
                foreach ($post as $input): ?>          
                <p><?php echo $input->cat_num; ?></p>
                <p><?php echo $input->title; ?></p>
                <p><?php echo $input->description; ?></p>
                <p><?php echo $input->instructor; ?></p>
                <input type="checkbox" name="shop" id="shop" value="1" > Shop <br> 
                <input type="hidden" name="shopping" value="<?php echo $input->id?>" />
                <p><?php echo '-----------------------------------'; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
        <input type="submit" value="Done" />
        </form>
    </body>
</html>
