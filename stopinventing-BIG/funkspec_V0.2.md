# Funkcionális specifikáció

## A weboldal célja

A fejlesztés célja az, hogy lefejlesszünk egy XD.org nevezeetű viccportált, melyet a fiatalabb generációnak szánt a megrendelő.
A felület ismerős lesz mindenki számára, aki használt már közösségi portált.
A weboldalra az emberek csak regisztrációval töltehetnek fel tartalmat; ehhez egy felhasználónév, e-mail cím és egy jelszó szükséges.
Továbbá a weboldal rendelkezik egy Admin fiókkal is (neki a megadott adatai hardcode-olva vannak a szerrverkódban).
Az admin képes posztokat törölni, más emberek bejegyzéseit módosítani és kitiltani fiókokat.
A normál felhasználók csak posztolni és saját adataikat módosítani képesek, nem rendelkeznek annyi jogosultsággal, mint az Admin.
A weboldalra nem csak szöveget lehet feltölteni, hanem képeket is, kifejezetten mémek megosztására (amely a weboldal tartalmának másik jelentős részét képezi).
Továbbá lehet posztokat szűrni felhasználók alapján is, amelyet egy, az adatbázisban folyamatosan kereső keresőmező old meg.

## Használati esetek

ADMIN: Az ADMIN(OK) azok az ember(ek) akik tulajdonában van az oldal. Ő(k) felelnek a szerepkörökhöz tartozó szabájok meghatérozására és azok betartására. Hozzá férnek a teljes oldal rendszeréhez és ezért a problémamentes működés fentartása az egyik feladatuk. Ellenőrizniük kell, hogy hibamentesen működjön az oldal.

MODERÁTOR: A MODERÁTOR(OK) olyan felhasználok akik az ADMIN(OK)-tól kapták ez a speciális jogot, hogy moderálják a oldal tartalmát és a egyébb felhasználokat. Nincs hozzá férésük a rendszerhez, csak annyit van hogy tudjanak moderálni. Ezt a szerepkört ki kell érdemelni és nagyon szigorú szabájokat kell betartani, hogy meg tartsa a szerepkörét.

USER: Az USER szerepkör egy általános. Csak az alap funkciókhoz fér hozzá az oldalon. A saját dolgain kívül nem tud mást szerkeszteni.

GUEST: A GUEST az egy még általánosabb szerepkör aki(k) csak az oldal főoldalát látogathatja. Nincs hozzá férése az oldal egyébb funkcióihoz. Regisztráció után meg kapja az USER szerepkört és a hozzá tartozó jogokat is.

## Követelmény-megfeleltetés

- K01: Az oldalnak rendelkeznie kell egy modern gerinccel, nem nézhet ki az oldal úgy,
mintha a 90-es évekből származna.
- K02, K03: A weboldal dinamikus létéhez elengedhetetlen az adatokat adatbázisban tárolni,
annak tartalmát pedig a weboldalon kezelni.
- K04: Legyen egy funkcionális főoldal, az aloldalakhoz tartozó linkeket tartalmazó szalagsávból
és a legjobban értékelt posztokból áll.
- K05, K06: Egy felhasználói profil létrehozásához és kezeléséhez szükséges aloldal létre lesz hozva,
továbbá egy, a profilkép kicsinyített változatát és a felhasználónevet megjelenítő gomb hozzáadása,
ami a profilbeállításokkal kapcsolatos legördülő menüt hozza be.
- K07: Létrehozunk egy aloldalt az összes feltöltött viccnek,
ami kilistázza (csökkentett számú találatokkal) a feltöltött tartalmakat.

## Képernyőterv

A képernyőterv megtalálható a mellékeelt PPT fájlban.

## Forgatókönyv

Szereplők: A weboldalnak 2 szereplője van. Az első szereplő az maga a webböngésző amin fut az oldal. Ezzel együtt kezeli az oldal funkcióit. A második szereplő meg a felhazsnálók akik használják az oldalt. Olyan módon mint egy fórumot ami extrákkal bír.

A felhasználó meg tudja látogatni az oldalt vendég ként, de így nem tud letölteni, meg fel. A regisztráció után vagy a bejelentkezés után már elérhetők ezek a funkciók. Az oldalon moderétorok is vannak akik a felhasználókat felügyelik, azzal a céllal, hogy ne legyen egy romhalmaz az oldal.
