<!--<!doctype html>
<html>
<!--TODO: home page with links to other pages
    <head>
        <title>Home</title>
    </head>
    <body>
        <h2>You're currently taking these courses</h2>
        <a href="/taking">Taking</a></br>
        <a href="/shopping">Shopping</a></br>
        <a href="/search">Search</a></br>
    </body>
</html>
-->

<div data-role="page"  id = "home" data-theme = "a">

	<div data-role="header">
		<h1>Home</h1>
	</div><!-- /header -->

	<div data-role="content" >	
        <h4>You're currently taking these courses:</h4>
        <?php
            foreach ($posts as $post):
                foreach ($post as $post_c): ?>
                    <p><?php echo $post_c->title; ?></p>
                <?php endforeach; ?>
        <?php endforeach; ?>
        
        <p><a href="#shops" data-role="button">Shopping cart</a></p>
        <p><a href="#search" data-role="button">Search</a></p>
    
	</div><!-- /content -->
    <div data-role="footer" data-theme="a">
		<h5>Project0 by Eszter Fodor</h5>
	</div><!-- /footer -->
</div><!-- /page one -->
	

<!----------------------------------------------------------------->
<div data-role = "page" id = "search" data-theme = "a">
        <div data-role = "header">
            <h1>Search</h1>
        </div>
        
        <div data-role = "content" >
        <h4>Search for courses:</h4>
        <!--TODO: Form for searching -->
    </div>
    
    <div data-role="footer" data-theme="a">
		<h5>Project0 by Eszter Fodor</h5>
	</div><!-- /footer -->
</div><!-- /page search -->
	

	


