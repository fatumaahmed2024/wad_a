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
print "<br>";//Using HTML <br> to break a line

$age = $current_year-$yob;//Using subtraction to find the age.
print "45+96";
print "<br>";//Using HTML <br> to break a line

print 45+98;
print "<br>";//Using HTML <br> to break a line

$birthday= new DateTime($user_dob);
$today = new DateTime('today');

$interval = $birthday->diff($today);

echo '<pre>';
print_r($interval);
echo '</pre>';
print "<br>";//Using HTML <br> to break a line

print $fname . " is, actually, " . $interval->y . " years " .$interval->m . " months, and " . $interval->d . " days old.";

