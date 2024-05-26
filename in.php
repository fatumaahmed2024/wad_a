<?php
date_default_timezone_set("Africa/Nairobi");
echo "'This is my first php code ";//Displaying a sentence or a string
print "<br>";//Using HTML <br> to break a line
print"Today is <span style='color: #ff4856; text-transform: uppercase;'>Thursday</span> ";
print "<br>";//Using HTML <br> to break a line
print 1999;//This is an integer or a digit
print "<br>";//Using HTML <br> to break a line
print "5475";//This is a string
print "<br>";//Using HTML <br> to break a line
print date ('1');//Displaying the current day of the week
print "<br>";//Using HTML <br> to break a line
print date('1,F js Y', strtotime('+5 months'));
print "<br>";//Using HTML <br> to break a line
print "Today is ".date('1, F js Y H:i:s');
print "<br>";//Using HTML <br> to break a line

//Creating (Declaring) a varible 

$fname ="Alex Okama";//Declaring of a variable or a string or a group of words

$yob =2006;//Declaring of digit or an integer

print "<br>";//Using HTML <br> to break a line

print $fname;

print "<br>";//Using HTML <br> to break a line

$user_dob ="$yob-08-16";

echo $fname . " was born in ". $yob;

print "<br>";//Using HTML <br> to break a line

echo $fname ." was actually born on " .date('1, F js Y', strtotime($user_dob));
print "<br>";//Using HTML <br> to break a line

$current_year= date('Y');
echo $current_year;

