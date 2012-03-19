<!--
<!doctype html>
<html>
<!-- TODO: Make it look pretier 
    <head>
        <title>Search</title>
    </head>
    <body>
        <h1>Search for courses</h1>
        <form action="/search" method="post">
            <input type="text" name="catalog_number" placeholder="Catalog number" /><br />
            <input type="text" name="title" placeholder="Title" /><br />
            <input type="text" name="instructor" placeholder="Instructor's name" /><br />
            <input type="text" name="day" placeholder="Day" /><br />
            <input type="text" name="time" placeholder="Begin time" /><br />
            <input type="submit" value="Search" />
        </form>
    </body>
</html>-->

<div data-role = "page" id = "search" data-theme = "a">
        <div data-role = "header">
            <h1>Search</h1>
        </div>
        
        <div data-role = "content" >
        <h4>Search for courses:</h4>
            <form action="#results" method = "post" class="ui-body ui-body-d ui-corner-all">
                <fieldset>
                    <div data-role="fieldcontain">
	                    <label for="course_name">Course title:</label>
	                    <input type="text" name="name" id="name" value=""/>
			        </div>
			    </fieldset>
			</form>
        </div>
    
    <div data-role="footer" data-theme="a">
		<h5>Project0 by Eszter Fodor</h5>
	</div><!-- /footer -->
</div><!-- /page search -->
