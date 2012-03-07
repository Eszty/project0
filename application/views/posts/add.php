<!doctype html>
<html>
    <head>
        <title>BlogIgniter - The Awesome Blog</title>
    </head>
    <body>
        <h1>Add a new (awesome) post</h1>
        <form action="/posts/add" method="post">
            <input type="text" name="title" placeholder="Title" /><br />
            <input type="text" name="author" placeholder="Author" /><br />
            <textarea name="content"></textarea><br />
            <input type="submit" value="Post!" />
        </form>
    </body>
</html>
