<html>
    <head>
        <?php include 'parts/stylesheets.html'; ?>
    </head>
    <body>
        <div class="container">
            <h1>Add a quest</h1>
            <a href="../prototype-mvc/index.php?controller=default&action=home">
                <button style="margin-bottom:10px;" class="btn btn-success">back</button>
            </a>

            <form method="POST" action="index.php?controller=quest&action=addQuest"> 
                <label>Title</label>
                <input type="text" name="title" class="form-control">
                <label>What Happens ?</label>
                <textarea name="content" class="form-control"></textarea>
                <input class="btn btn-primary" type="submit" value="submit">
            </form>
        </div>
        <?php
            include 'parts/scripts.html';
        ?>
    </body>
</html>