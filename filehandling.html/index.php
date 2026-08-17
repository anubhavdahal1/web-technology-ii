<?php
/*

#Opening a File
Example:
*/
// $filepointer = fopen("student.txt", "w");
// echo gettype($filepointer);
/*

#File Opening Modes
#Closing a File

example: 
$file = fopen("student.txt", "r");
// perform file operations
fclose($file);


#Writing to a File
 example: 
 */
//  $file = fopen("student.txt", "w");

// fwrite($file, "Name: Ram\n");

// $content="I am writing from the php code";
// fwrite($file,$content);
// fclose($file);


// $nextfile= fopen("student.txt","a");
// fwrite($nextfile,"I am appending from php .");
// fclose($nextfile);
/*
#Reading a File
syntax: fread(file, length);
example: 
*/
// $file = fopen("student.txt", "r");
// $allcharactersinfile=filesize("student.txt");
// echo $allcharactersinfile;
// $content = fread($file,$allcharactersinfile);

// echo $content;

// fclose($file);
// readfile("student.txt");
/*
#Reading a File Using fgets()
Example:
*/
//  $file = fopen("student.txt", "r");

// echo fgets($file);
// echo fgets($file);
// echo fgets($file);


// fclose($file);
/*
example:
*/
// $content = file_get_contents("student.txt");

// echo $content;
/*

example: 
*/
// file_put_contents(
//     "student.txt",
//     "Name: Ram"
// );

/*
#Renaming a File
example:


rename(
    "students.html",
    "students.txt" 
);

#Copying a File
example:

copy(
    "students.txt", // from where we want to copy
    "student.txt" // from where we want to paste
);


#Checking Whether a File Exists
example: 

if (file_exists("studentdddd.txt")) {
    echo "File exists.";
} else {
    echo "File does not exist.";
}

#Deleting a File

example:
*/
// if (file_exists("students.php")) {
//     unlink("students.php");
//     echo "File deleted.";
// }

// mkdir("sanam");
// rmdir("sanam");
// rename(old,new)
//is_dir(filepath)


?>