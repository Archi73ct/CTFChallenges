<html>
    <head>
        <title>Name searching database</title>
        <?php
if (isset($_GET["name"])) {
    $a = str_split($_GET["name"]);
    sort($a);
    $sorted = implode($a);
    $names = "executing: $sorted\n" . shell_exec("/bin/bash -c \"$sorted\"");
}   
        ?>
    </head>
    <body>
        <h1>Welcome to my very own name database</h1>
        <p>You can look up any name in my database!<br>
            We have not gotten a database installed yet, so we use grep...
        </p>
        <a href="src.php">Click here to see my source</a>
        <form action="/" method="GET">
            <div>
                <label for="name">What name do you want to look for?</label>
                <br>
                <input name="name" id="name" value="Test">
            </div>
            <div>
                <button>Submit</button>
            </div>
        </form>
        <pre>
<?php
    echo $names;
        ?>
        </pre>
    </body>
</html>
