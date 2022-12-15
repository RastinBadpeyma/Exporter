<?php include "process.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exporter</title>
 
</head>


<body>
    <div class='main'>
        <h1>Exporter</h1>
        <form action="" method="post">
            <input type="text" name="title" style="height: 40px" placeholder="Title Here">
            <input name="content" placeholder="Content Here" style="height: 40px">
            <select name="format">
                <option value="Text">Text File</option>
                <option value="Json">Json File</option>
                <option value="Csv">Csv File</option>
              

            </select>
            <button type='submit'>Export to File</button>
        </form>
    </div>
</body>

</html>