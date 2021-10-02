<html>
    <head>
        <title>Name searching database</title>
        <?php
if (isset($_GET["name"])) {
    // We don't want special chars in the search, it sometimes breaks things...
    // Also no animals :)
    $nono_bad = array(";", "&", "|", "cat", "dog", "bird");
    $e = explode(" ", $_GET["name"]);
    for($i = 0, $s = count($e); $i < $s; ++$i) {
        if(in_array($e[$i], $nono_bad)) {
            die("No! Bad searcher! Bad!");
        }
    }
    $names = shell_exec("grep " . $_GET["name"] . " names.txt");
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
