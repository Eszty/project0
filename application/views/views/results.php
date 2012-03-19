<!--<!doctype html>
<html>
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
</html>-->

<div data-role = "page" id = "results" data-theme = "a">
    <div data-role = "header">
        <h1>Results</h1>
    </div>
    <div data-role = "content">
        <?php
            foreach ($res as $post):
                foreach ($post as $post_c): ?>
                    <p><?php echo $post_c->cat_num; ?></p>
                    <p><?php echo $post_c->title; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <div data-role="footer" data-theme="a">
		<h5>Project0 by Eszter Fodor</h5>
	</div><!-- /footer -->
</div>
