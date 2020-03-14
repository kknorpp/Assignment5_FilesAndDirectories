<!DOCTYPE html>
<?php
require_once "DirectoryFunctionClass.php";
// function doesExist()
// {
//     echo ' <p>
//     <label>Folder Name
//         <br> 
//     <input type="text" name="folderName" size="92" required>
//     </label> </p>
    
//     <p>
//     <label>File Context 
//         <br>
//     <textarea name="fileContext" maxlength="500" cols="90" rows="5"></textarea>
//     </label>
//     </p>
//     <p><button type="submit" formmethod="post">Submit </button></p>';
   
//     if (file_exists($_POST("folderName"))) {
//         echo "<br>";
//         echo "A directory already exists with this name.";
//     } else {
//         mkdir($_POST("fileName", 0777));

       
//         echo "<br>";
//         echo "File and directory were created.";
//         echo "<br>";
//         echo "<a href=$_POST('folderName'+'/readme.txt')>Pathway to where file is located.</a>";
//     }
// };
// function write()
// {
//     touch("readme.txt", 0777);
// }





?>
<html lang="en">

<head>

    <title>Files and Directories</title>
 

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    


</head>
 
</head>
<header>
    <h1>File and Directory Assingment</h1>
</header>
<p>
    Enter a folder name and contents of a file. Folder names should be alpha numeric characters only.
</p>
<br>
<br>


<body>

    <form  method="post" enctype="application/x-www-form-urlencoded" action="sftp://kknorpp@69.55.49.156/var/www/html/FileandDirectoryPageAssignment6.php">
        <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>

  <p>
    <label>Folder Name
        <br> 
    <input type="text" name="folderName" size="92" required>
    </label> </p>
    
    <p>
    <label>File Context 
        <br>
    <textarea name="fileContext" maxlength="500" cols="90" rows="5"></textarea>
    </label>
    </p>
    <p><button type="submit" formmethod="post">Submit </button></p>
   
    
     <br>
       <a href=$_POST('parent/folderName'+'/readme.txt')>Pathway to where file is located.</a>
    
    </form>

</body>

</html>