<?php
    include_once 'structure/index/head.php';
    include_once 'structure/index/body.php';
    ?>

<article>
    <h1> Click pour apparaitre en westeros !</h1>
    <?php
    // Permet d'appeller le programe qui donne un spawn au hasard
        if(!empty($_POST['envoyer'])) {
        include_once 'code/randomizer.php';
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="submit" id="envoyer" name="envoyer" value="envoyer">
        <form>
</article>
    <?php
        include_once 'structure/index/footer.php';
    ?>
