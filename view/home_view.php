<html>
    <head>
        <?php include 'parts/stylesheets.html'; ?>
    </head>
    <body>
        <div class="container">

            <h1>&diams;&diams;&diams;Welcome to the Kingdom &diams;&diams;&diams;</h1>

            <?php
                 $nbQuest = count($quests);
                 if($nbQuest===0){
                 echo('<a href="../prototype-mvc/index.php?controller=quest&action=resetIndex">
                 <button style="margin-bottom: 10px;" class="btn btn-warning">Reset index of register</button>
                    </a>');
                }
            ?>


            <a href="../prototype-mvc/index.php?controller=quest&action=addForm">
                <button style="margin-bottom: 10px;" class="btn btn-primary">Add a quest !</button>
            </a>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quest Title</th>
                    <th scope="col">What Happens</th>
                    <th scope="col">date</th>
                    <th scope="col">administration</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                   
                        foreach($quests as $quest){
                        
                    ?>
                        <tr>
                            <td><?php echo($quest->getId());?></td>
                            <td>&#147;<?php echo($quest->getTitle());?>&#148;</td>
                            <td><?php echo($quest->getContent());?></td>
                            <td><?php echo($quest->getSubmitDate());?></td>
                            <td>
                                <a href="../prototype-mvc/index.php?controller=quest&action=delete&id=<?php echo($quest->getId())?>">delete</a>
                                <a href="../prototype-mvc/index.php?controller=quest&action=updateForm&id=<?php echo($quest->getId())?>">edit</a>
                            </td>
                        </tr>   
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            include 'parts/scripts.html';
        ?>
    </body>
</html>