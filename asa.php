
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>KriptoGrafi</title>

</head>

<body>
<div class="card">
<br />
<form action='' method='POST'>
<input type='text' name='as' value='' placeholder='Kunci 1'/>
<input type='text' name='ar' value='' placeholder='Kunci 2'/><br>
<textarea rows='10' cols='40' name='tulis' placeholder='Masukkan Kata Disini'>
</textarea>
<br />
<input type='submit' name='hit' value='Enkripsi' />
<br />
<textarea name="tulisan" cols="40" rows="10">
<?php
if (isset($_POST['hit']))
	{
		$text = $_POST['tulis'];
		$as = $_POST['as'];
		$ar = $_POST['ar'];
		

		for ($i=0; $i<=strlen($text)-1; $i++)
			{
		
	$isi = strtoupper($text);
	$data = substr($isi,$i,1);
	if($data=='A'||$data=='B'||$data=='C'||$data=='D'||$data=='E'||$data=='F'||$data=='G'||$data=='H'||$data=='I'||$data=='J'||$data=='K'||$data=='L'||$data=='M'||$data=='N'||$data=='O'||$data=='P'||$data=='Q'||$data=='R'||$data=='S'||$data=='T'||$data=='U'||$data=='V'||$data=='W'||$data=='X'||$data=='Y'||$data=='Z'){
    $plain = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    
	
	$enkripsi = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25');
    	
	$hasil = str_replace($plain, $enkripsi, $data);
	
	$akhir = (($as * $hasil) + $ar) % 26;
			
				
	$es = 	array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	
					$jun = $es[$akhir];	
						echo $jun;
	}
		else{ $jun=$data; echo $jun;
		} 
			}
		
	}
	?>
   </textarea>
    <br />
    
    <input type='text' name='ass' value='' placeholder='Kunci 1'/>
<input type='text' name='arr' value='' placeholder='Kunci 2'/><br>
    <input type="submit" name="art" value="Deskripsi" />
    <br />
    <?php
	if(isset($_POST['art']))
	{
		$tulisan = $_POST['tulisan'];
		$ass = $_POST['ass'];
		$arr = $_POST['arr'];
		function invers ($a, $b){
		$x=0;
		$y=0;
		while($y<>1)
		{
		$y=($a*$x)%$b;
		$x++;
		}
		return $x-1;
			}
				$tot = invers ($ass,26);
		for ($j=0; $j<=strlen($tulisan)-1; $j++)
			{
		
	$masuk = strtoupper($tulisan);
	$work = substr($masuk,$j,1);
if($work=='A'||$work=='B'||$work=='C'||$work=='D'||$work=='E'||$work=='F'||$work=='G'||$work=='H'||$work=='I'||$work=='J'||$work=='K'||$work=='L'||$work=='M'||$work=='N'||$work=='O'||$work=='P'||$work=='Q'||$work=='R'||$work=='S'||$work=='T'||$work=='U'||$work=='V'||$work=='W'||$work=='X'||$work=='Y'||$work=='Z'){
    $plaine = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    
	
	$des = array("0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25");
    	
	$sum = str_replace($plaine, $des, $work);
	
	$tiba = ( $tot *($sum - $arr)) % 26;
			if ($tiba < 0)
			{	$tiba = $tiba + 26;
				
				
			}
	$res = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	
					$june = $res[$tiba];	
					
						echo $june;
						
				
}
	else { $june=$work; echo $june;}
	}
	}
	?>
    </form>
    </div>
    </body>
    </html>