# DAIOFHP-EXTRA-PHP-inbyggda-funktioner
Definition av informationen och funktionerna hos programvaran. ***EXTRA*** PHP inbyggda funktioner.

# Instruktioner:

PHP övning: inbyggda funktioner i PHP
Bekanta dej med följande inbyggda PHP-funkioner. Gör en ny PHP-fil, kalla den tex. för php_ovn_func.php och börja experimentera.
Hjälp hittar du t.ex. på php.net eller w3schools med att använda sök-funktionen.
1.    date()
Skriv ut en paragraf med dagens datum i formen: dd/mm/YY
2.    htmlspecialchars()
Gör en variabel: $rad = ’ <p>Detta är en rad </p>  ’;
skriv ut en paragraf var du använder htmlspecialchars på variablen $rad
Kommentera vad funktionen gör (se html-sourcen också)
3.    strip_tags()
använd strip_tags() på $rad variabeln
Kommentera vad funktionen gör
4.    str_replace()
använd till variabeln $rad. Byt ut ”rad” till ”text”. Skriv ut i html-paragraf
5.    strtoupper()
Använd till $rad. Skriv ut i html-paragraf
6.    nl2br()
Gör ny variabel
$rad_byte = ‘<p>En ny
		rad</p>’;
använd nl2br(). skriv ut. kommentera vad som händer.
7.    md5()
använd till teckensträngen ’text’. Skriv ut paragraf. Kommentera händelsen, vad gör md5? Finns det andra liknande funktioner?
8. strlen()
Gör en variabel $text med en teckensträng. Använd strlen() och en if-sats för att kolla om $text har över 2 tecken.
9. strstr()
gör en variabel $url där du sparar en webbaddress. Kolla om med en if-sats med strstr() om $url har en ‘http://’- sträng, om inte tillägg den i början.
t.ex. prakticum.fi -> http://prakticum.fi
10. include() och require()
Gör två filer required.php och include.php. Gör också en ’text.html’ sida med en html-paragraf. Använd required() för att hämta innehållet av html-sidan på required.php och include() till included.php. Vad är skillnaden mella dessa?

