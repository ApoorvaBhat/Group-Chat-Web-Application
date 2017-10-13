<?php 
header('Content-Type:text/event-stream');
header('Cache-Control: no-cache');
ob_start();
$mod2=filemtime("chat.txt");
$mod1=filemtime("image.txt");
while(true)
{	
	if(filemtime("chat.txt")> $mod2 )
	{
		$f2=file("chat.txt");
		$d2=$f2[sizeof($f2)-1];
		echo "event:Data\n";
		echo "data:{$d2}\n\n";
		echo str_pad('',4096)."\n";
		ob_flush();
		flush();
		$mod2=filemtime("chat.txt");
	//	sleep(2);
		$count+=1;
	}
	if(filemtime("image.txt")> $mod1 )
	{
		$f2=file("image.txt");
		$d2=$f2[sizeof($f2)-1];
		echo "event:Image\n";
		echo "data:{$d2}\n\n";
		echo str_pad('',4096)."\n";
		ob_flush();
		flush();
		$mod1=filemtime("image.txt");
	//	sleep(2);
		$count+=1;
	}
	clearstatcache();
}
?>
