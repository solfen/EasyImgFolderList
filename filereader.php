
<?php
/*
    @author Maxime Lo Re (delete this line or change the name if you want to act like you did this)
*/
    
//$path the folder where your images and subfolder of images are
//$pattern the regex all your images must match
//$callback the function that will be called for each file found
function find_files($path, $pattern, $callback)
{
    $path = rtrim(str_replace("\\", "/", $path), '/') . '/*'; // make the path
    foreach (glob($path) as $fullname) // see the doc for glob
    {
        if (is_dir($fullname))
        {
            find_files($fullname, $pattern, $callback); // to search into subfolder
        }
        else if (preg_match($pattern, $fullname))
        {
          	$fullname = str_replace('bin/','',$fullname); // I wanted the src of the files to start at assets
            call_user_func($callback, $fullname); 
        }
    }
}
function my_handler($filename) {
  echo "'".$filename."',"."\n"; // the line breaks dont work
}
find_files('bin/assets', '/png$/', 'my_handler'); // change the parameter to match your project
?> 