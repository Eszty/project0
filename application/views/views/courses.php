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
                <p><?php echo form_checkbox('newsletter', 'accept', False); ?></p>
                <p><?php echo $input->cat_num; ?></p>
                <p><?php echo $input->title; ?></p>
                <p><?php echo $input->description; ?></p>
                <p><?php echo $input->instructor; ?></p>
                <p><?php echo '-----------------------------------'; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
    </body>
</html>
