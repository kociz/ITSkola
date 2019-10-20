 
<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"" />
	<title>ITSkola</title>
	<meta name="description" content="Obuka programiranje">
    <meta name="keywords" content="IT,grafički dizajn,obuka,Adobe,Corel">
    <meta name="author" content="Kocis Jozef">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
		<div id="logo">
			<img src="logo.jpg" alt="logo">
		</div>
		<div id="naslov">
			<h1>IT ŠKOLA- KURS GRAFIČKOG DIZAJNA</h1>
		</div>
		
		
	</header>
<article #telo>
	
<div class="responsive-nav">
	<i class="fas fa-bars"></i>
	
			

</div>
		
	

	 <nav class="navigacija">
		<dl>
	    <dt>OSNOVNI KURS</dt>
	    <dd>
	    	 <span>Cena kursa: 200€</span>
             <span>Broj časova: 16</span>
            <span> Mogućnost plaćanja: plaćanje na 2 rate</span>
             <span>Trajanje: 2 meseca</span>
             <span>Popust: 10% za avansno plaćanje</span>
</dd>
	    <dt>NAPREDNI KURS</dt>
	    <dd><span>Cena kursa: 300€</span>
             <span>Broj časova: 16</span>
             <span>Trajanje: 2 meseca</span>
             <span>Mogućnost plaćanja: plaćanje na 2 rate</span>
             <span>Popust: 10% za avansno plaćanje</span></dd>
	    <dt>INDIVIDUALNI KURS</dt>
	    <dd><span>Cena kursa: po dogovoru</span>
             <span>Broj časova: po dogovoru</span>
             <span>Trajanje: po dogovoru</span>
             <span>Mogućnost plaćanja: po dogovoru</span>
             <span>Popust: 10% za avansno plaćanje</span></dd>
		    
		</dl>
	</nav>

	<div class="sadrzaj">
		<h2>Osnovni kurs grafičkog dizajna</h2>
		<p>Photoshop je jedna od najmoćnijih i najviše korišćenih alatki iz Adobe paketa, koji omogućava širok spektar rada i upotrebe u najrazličitije svrhe: od fotomontaže, retuširanja i editovanja fotografija, ilustovanja i kreiranja vizuelnog sadržaja, do dizajniranja i realizacije najrazličitijih ideja kojima biste preneli svoju poruku, ideju, ili iskazali svoj kreativni duh. U svoj svojoj raznolikosti koju pruža različitim i individualnim pristupima, na osnovnom nivou on je isti za sve. Upravo ovaj kurs omogućava vam da u kratkom roku upoznate njegove mogućnosti, da savladate njegove alate i razvijete sopstveni princip rada koji će vam olakšati put ka ostvarenju kreativnih ideja koje želite da realizujete, bilo da je to poboljšavanje svojih fotografija, fotomontaža, ili da planirate da uđete u profesionalne vode, kreirajući sadržaje koji će promovisati vaš, ili sadržaj vašeg klijenta – kako u štampi tako i u digitalnim medijima. Na ovom kursu, ćete kroz zadatke, vežbe i predavanja steći praktično i upotrebljivo znanje koje će vam uštedeti mnogo vremena u daljem radu i omogućiti da svoje talente i znanje naplatite uz mnogo manje muke i u daleko kraćem roku izrade, a na nivou koji se očekuje u danješnjem vremenu poznavanja tehnologija.</p>
		
		<h2>Napredni kurs grafičkog dizajna</h2>
		<p>U kombinaciji, ova dva programa iz Adobe paketa, pružaju gotovo bezgranične mogućnosti u sferi vizuelnih komunikacija, dizajna, ili ličnog i individualnog kreativnog stvaralaštva. Ovaj kurs namenjen je onima koji već poseduju osnovno znanje u baratanju bar jednim od ova dva programa (u suprotnom treba proći osnovni nivo). Kurs vam omogućava da se sa tehničke strane upoznate sa korelacijom ova dva programa, koji, svaki sa svoje strane, pruža najbolje mogućnosti, i da se takođe sa kreativne strane upoznate sa osnovama grafičkog dizajna. Tako ćete, kroz predavanja i vežbe, naučiti teorijske osnove dizajna i stvarati sopstveni dizajn, što će vam omogućiti da profesionalno i sa visokim kvalitetom kreirate logotipe, vizit karte i brošure, banere i postere, itd, i time uplivate u kreativni svet novog doba u kojem je ovakva vrsta znanja sve više tražena, pogotovo u oblasti marketinga – a najviše onog koji se tiče interneta. Sasvim je sigurno da ćete na taj način pospešiti kvalitet i primaljivost vašeg poslovanja, kao i poslovanja vaših klijenata.</p>

		<h2>Individualni kurs grafičkog dizajna</h2>
		<p>Ovaj kurs namenjen je firmama i pojedincima čija oblast delovanja podrazumeva daleko naprednije potrebe za grafičkim dizajnom i Adobe programima. Individualci ili zaposleni u firmama, koji poseduju određeno znanje iz ovih obasti, na idividualnom kursu pohađaju obuku specijalno prilagođenu njihovim potrebama i trenutnom poznavanju programa i time stiču zagarantovano veći nivo kvaliteta rada i poznavanja kako programa, tako i dizajna. Po završetku kursa posavetovaćemo vas šta je najbolje da dalje učite i u čemu da se usavršavate. Za više informacija i radi zakazivanja sastanka sa nama najbolje je da nas kontaktirate klikom na dugme POŠALJI UPIT. Takođe imate mogućnost da učite i od kuće preko skajpa 1 na 1 sa profesorom.</p>
	</div>


</article>

<article class="drugi">
	<div class="dugme"><button>PRIJAVI SE</button></div>
	<div class="forma">
		<form class="unos" action="unos.php" method="post" >
			<input type="text" placeholder="Unesite Vaše ime i prezime"  name="ime" value="<?php echo isset($_SESSION['ime'])?$_SESSION['ime']:""  ?>" required>
			<input type="text" placeholder="Unesite Vaš e-mail" name="email" value="<?php echo isset($_SESSION['email'])?$_SESSION['email']:""  ?>" required>
			<input type="number" placeholder="Unesite kontakt telefon" name="telefon" value="<?php echo isset($_SESSION['telefon'])?$_SESSION['telefon']:""  ?>" required >
			<select name="kurs"  id="">
				<option value="<?php echo isset($_SESSION['kurs'])?$_SESSION['kurs']:"osnovni"  ?>">Osnovni</option>
				<option value="<?php echo isset($_SESSION['kurs'])?$_SESSION['kurs']:"napredni"  ?>">Napredni</option>
				<option value="<?php echo isset($_SESSION['kurs'])?$_SESSION['kurs']:"individualni"  ?>">Individualni</option>
			</select>
			<textarea name="poruka" placeholder="Unesite Vašu poruku" id="" cols="30" rows="10" value="<?php echo isset($_SESSION['poruka'])?$_SESSION['poruka']:""  ?>"></textarea>
			
			
			<input class="dugme" type="submit" name="registracija" value="Registracija">

		</form>


	</div>
	<div id="podnaslov"><h2>RADOVI NAŠIH UČENIKA:</h2></div>
</article>
<atricle class="tri">
	<div class="slider">
		<ul>
			<li><img src="img/image1.gif" alt="image"></li>
			<li><img src="img/image2.jpg" alt="image"></li>
			<li><img src="img/image3.jpg" alt="image"></li>
			<li><img src="img/image4.jpg" alt="image"></li>
			<li><img src="img/image2.gif" alt="image"></li>
			<li><img src="img/image3.gif" alt="image"></li>
			<li><img src="img/image4.gif" alt="image"></li>
		</ul>
	</div>
	<div class="slider-nav">
		<button id="prev" data-dir="prev">Previous</button>
		<button id="next" data-dir="next">Next</button>

		
	</div>
	
	
</atricle>
<footer class="footer">
	
	©kjozef 2019
</footer>
	


	

<script src="jquery.js"></script>
<script src="script.js"></script>
<script src="slider.js"></script>	
	
</body>
</html>
 <?php 
session_unset();
   ?>