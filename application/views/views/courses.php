<!doctype html>
<html>
    <head>
        <title>Courses</title>
    </head>
    <body>
        <?php
            foreach ($posts as $post): 
                foreach ($post as $input): ?>
                <input type="checkbox" name="check"> Shopping car <br>
                <input type="checkbox" name="check"> Take <br>
                <p><?php echo $input->cat_num; ?></p>
                <p><?php echo $input->title; ?></p>
                <p><?php echo $input->description; ?></p>
                <p><?php echo $input->instructor; ?></p>
                <p><?php echo '-----------------------------------'; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
    </body>
</html>
