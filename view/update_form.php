<?php 
    // var_dump($_GET);
    // var_dump($quest); 
?>
<html>
<head>
    <?php
        include 'parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Update the quest !<?php echo $quest->getTitle();?></h1> 

    <a href="../prototype-mvc/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">back</button>
    </a>

    <form method="post" action="index.php?controller=quest&action=updateQuest&id=<?php echo $quest->getId()?>">
        <label>Title</label>
        <input name="title" value="<?php echo $quest->getTitle()?>" class="form-control">

        <label>What happens ?</label>
        <input name="content" value="<?php echo $quest->getContent()?>" class="form-control">
        <input class="btn btn-success" type="submit" value="submit">
    </form>
</div>
<?php
include 'parts/scripts.html'
?>
</body>
</html>