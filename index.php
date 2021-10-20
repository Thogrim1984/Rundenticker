<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Titel</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/kingdomRound.js"></script>
</head>

<body>

    <main>
        <div class="BaseValueContainer">
            <?php include("baseValues.php"); ?>
        </div>
        <div class="contentContainer">
            <aside>
                <?php include("phases/overview.php") ?>
            </aside>
            <div id="contentContainer">
                <h1 id="contentHeadline"></h1>
                <section id="content"></section>
            </div>
        </div>
    </main>

    <?php include("phases/resultDialog.php") ?>

</body>

</html>