#!C:\xampp\perl\bin\perl.exe
print "Content-type: text/html \n\n ";
$count_file="web.txt";
if(open(FILE,'<'.$count_file))
{
	$no_accesses=<FILE>;
	close(FILE);
	if(open(FILE,'>'.$count_file))
	{
		$no_accesses++;
		print FILE $no_accesses;
		close(FILE);
		print "no. of visitors:",$no_accesses;
	}
	else
	{
		print "[can't write to data file]";
	}
}
else
{
	print "[sorry file cannot be accessed]";
}
exit(0);