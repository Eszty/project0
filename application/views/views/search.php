<!doctype html>
<html>
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
</html>
