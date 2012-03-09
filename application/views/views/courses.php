<!doctype html>
<html>
    <head>
        <title>Courses</title>
    </head>
    <body>
        <?php
            $this->load->helper('form');
            foreach ($posts as $post): 
                foreach ($post as $input): ?>
                <!--<p><?php echo form_checkbox('newsletter', 'accept', False); echo(' Shop '); 
                echo form_checkbox('newsletter', 'accept', False); echo(' Take'); ?></p> -->
                <input type="checkbox" name="options[]" value="shop" /> Shop <br> 
                <input type="checkbox" name="options[]" value="take" /> Take <p>           
                <p><?php echo $input->cat_num; ?></p>
                <p><?php echo $input->title; ?></p>
                <p><?php echo $input->description; ?></p>
                <p><?php echo $input->instructor; ?></p>
                <p><?php echo '-----------------------------------'; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
    </body>
</html>
