<?php
// include 'db.php'; //only warning gives no error
// require 'db.php';//gives error compolasary file present


// give number output in last
// $a=readfile("my.txt");
// echo $a;

// readfile("my.txt");
// readfile("my.html");

// $fptr=fopen("my.txt","r");
// echo var_dump($fptr);  give resource(3) of type (stream)


// $content=fread($fptr,5); only show 5 character
// $content=fread($fptr, filesize("my.txt"));
// echo $content;
// fclose($fptr);

// echo fgets($fptr); //only give one line
// echo fgets($fptr); 

//reading the file line by line 
// while($a=fgets($fptr)){
//     echo $a;
//   echo "<br>";
// }

//reading the file characer by character
// while($a=fgetc($fptr)){
//     echo $a;
//   echo "<br>";
// }

//stop on any characer
// while($a=fgetc($fptr)){
//     echo $a;
//     echo "<br>";
//     if($a=="b"){
//         break;
//     }
// }
// fclose($fptr);


//write content by deleting before content in file
// $fptr=fopen("my.txt","w");
// fwrite($fptr,"this is the best file on this planet");
// fwrite($fptr,"\ni am boss");
// fclose($fptr);

//Appending to a file in php
// $fptr=fopen("my.txt","a");
// fwrite($fptr,"\nthis is the best file on this planet");
// fwrite($fptr,"\ni am boss");
// fclose($fptr);


//Cookies | sessions
// include 'db.php'; //only warning gives no error
// require 'db.php';//gives error compolasary file present


// give number output in last
// $a=readfile("my.txt");
// echo $a;

// readfile("my.txt");
// readfile("my.html");

// $fptr=fopen("my.txt","r");
// echo var_dump($fptr);  give resource(3) of type (stream)


// $content=fread($fptr,5); only show 5 character
// $content=fread($fptr, filesize("my.txt"));
// echo $content;
// fclose($fptr);

// echo fgets($fptr); //only give one line
// echo fgets($fptr); 

//reading the file line by line 
// while($a=fgets($fptr)){
//     echo $a;
//   echo "<br>";
// }

//reading the file characer by character
// while($a=fgetc($fptr)){
//     echo $a;
//   echo "<br>";
// }

//stop on any characer
// while($a=fgetc($fptr)){
//     echo $a;
//     echo "<br>";
//     if($a=="b"){
//         break;
//     }
// }
// fclose($fptr);


//write content by deleting before content in file
// $fptr=fopen("my.txt","w");
// fwrite($fptr,"this is the best file on this planet");
// fwrite($fptr,"\ni am boss");
// fclose($fptr);

//Appending to a file in php
// $fptr=fopen("my.txt","a");
// fwrite($fptr,"\nthis is the best file on this planet");
// fwrite($fptr,"\ni am boss");
// fclose($fptr);


//Cookies | sessions
// setcookie("category","books",time()+86400,"/"); // 1day =86400 sec
// echo "the cookeis set";

// session : information across difference pages


//verify the user login
// session_start();
// $_SESSION['username']="soham";
// $_SESSION['favcat']="books";
// echo "we have save";


// logggout session
// session_unset();
// session_destroy();

?>