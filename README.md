<p align="center"><img src="public\img\logo.png" width="400" height="100"></p>

# Projekt zaliczeniowy z przedmiotu: Aplikacje internetowe

# Temat projektu: Internetowy sklep odzieżowy Clothdiva

## Skład grupy: Krzysztof Karaś, Patrycja Gaweł

## Specyfikacja projektu

<br/>

## Cel projektu: Stworzenie platformy umożliwiające dokonywanie zakupów online. 
<br/>

Aplikacja służy do procesów zewnętrznych czyli komunikacja oraz sprzedaż.  Strona internetowa posiada elementy dynamiczne oparte o system CMS, służący do zarządzania treścią witryny. Dzięki temu administratorzy posiadają pełną kontrolę nad asortymentem sklepu poprzez możliwość dodawania, usuwania oraz modyfikacji między innymi produktów, promocji, zarejestrowanych użytkowników i zawartości bannera. Natomiast użytkownicy będą mieli kontrolę nad swoimi zakupami. Mają oni możliwość dodawania oraz usuwania produktów do ulubionych oraz dodawania, modyfikowania i usuwania zawartości koszyka. Aplikacja pobiera wszystkie produkty wybrane przez klienta, oblicza stan koszyka i po złożeniu zamówienia eksportuje wszystko do bazy danych. Wszystko to odbywa się po stronie serwera. Strona internetowa zawiera takie elementy jak krótki opis sklepu, stronę główną sklepu, stronę produktów, które zostały podzielone na różne kategorie i podkategorie oraz stronę kontaktową dzięki której, użytkownicy mogą zadawać pytania, zgłaszać problemy i komunikować się z administratorami sklepu. W szablonie jest dostępnych 48 produktów, wraz z informacjami takimi jak cena, rozmiar oraz kolor produktu, opis wraz z składem i konserwacją produktu oraz ilość danego produktu.  Aplikacja głównie służy do symulowania sklepu internetowego. <br/><br/>

## Cele szczegółowe:

1. Dokonywanie zakupów w sklepie internetowym przez klienta
2. Zarządzanie asortymentem sklepu przez administratorów.
<br/> <br/>

## Funkcjonalności
<br/>

### ADMINISTRATOR:
<br/>
                                      
•	Role i uprawnienia administratora. <br/>
•	Zarządzanie produktami na sklepie. (możliwość dodawania, usuwania oraz edycji)<br/>
•	Zarządzanie banerami. (możliwość dodawania oraz usuwania).<br/>
•	Zarządzanie zamówieniami (możliwość edycji oraz usuwania).<br/>
•	Zarządzenia kategoriami (możliwość dodawania oraz usuwania).<br/>
•	Zarządzanie użytkownikami(możliwość edycji oraz usuwania).<br/>
•	Zarządzanie promocjami(możliwość dodawania i usuwania).

### UŻYTKOWNIK:
<br/>

•	System logowania i rejestracji użytkowników (klientów).<br/>
•	Koszyk klienta.<br/>
•	Składanie wirtualnych zamówień.<br/>
•	Dodawanie produktów do ulubionych.<br/>
•	Możliwość komunikacji użytkownika z administratorem poprzez formularz kontaktowy<br/>
•	Filtrowanie produktów ze względu na cenę, rozmiar, kolor.

<br/>


## Interfejs serwisu
                                     EKRAN GŁÓWNY


<p align="center"> Strona główna aplikacji app.blade.php </p>
<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\1.jpg" width="400"></p>
<p align="center">Strona główna app.blade.php zawiera w sobie takie sekcje jak: header, banner oraz footer. Szablon tej strony jest powielany do wielu innych podstron za wyjątkiem sekcji banner.  Celem tej strony jest zaprezentowanie sklepu i ma ona charakter czysto wizualny. Jest to strona główna(home) nawigująca do innych podstron, która zarazem jest wizytówką sklepu internetowego Clothdiva.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\2.jpg" width="400"></p>
<p align="center">W sekcji header znajduję się menu nawigacyjne. To dzięki niemu użytkownik może swobodnie się poruszać po całym sklepie internetowym. Po lewej stronie widnieje logo firmy, po środku widoczne są zakładki prowadzące już bezpośrednio do produktów dostępnych na sklepie, które zostały podzielone na kategorie. Natomiast po prawej stronie widnieją ikony dotyczące użytkownika, wyszukiwarki, ulubionych produktów oraz koszyka.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\3.jpg" width="400"></p>
<p align="center">Sekcja footer strony głównej jest częścią statyczną.  Znajduję się tutaj logo firmy, krótki opis sklepu internetowego i przydatne linki dotyczące firmy oraz konta. Sklep jest również połączony z innymi portalami społecznościowymi m.in. z Facebookiem i za pomocą ikon SOCIALS można przedostać się na wybrane social media.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\4.jpg" width="400"></p>
<p align="center"> contact.blade.php </p>
<p align="center">Zakładka CONTACT przenosi nas na stronę kontaktową sklepu. Widoczne są informację kontaktowe oraz adres sklepu. Za pomocą API pobierana jest mapa i dzięki niej ukazana jest lokalizacja sklepu(są to fałszywe dane podstawione w celu zaprezentowania funkcjonalności). Strona ta posiada również formularz kontaktowy, dzięki któremu użytkownik może skontaktować się z administratorem. Wiadomość zostanie wysłana na e-mail sklepu odzieżowego.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\5.jpg" width="400"></p>


<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\6.jpg" width="400"></p>


<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\7.jpg" width="400"></p>


<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\8.jpg" width="400"></p>
<p align="center">Każda z kategorii (WOMEN, MEN, GIRLS, BOYS) posiada własne produkty podzielone również na podkategorie(np. DRESSES, SKIRTS, T-SHIRTS, JEANS). Po kliknięciu na interesujący nas przedmiot użytkownik zostanie przeniesiony na podstronę z wybranymi produktami. </p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\9.jpg" width="400"></p>
<p align="center"> wyszukiwarka app.blade.php </p>
<p align="center">W menu nawigacyjnym widoczna jest również wyszukiwarka. Przeszukuje ona nazwy produktów w poszukiwaniu słów zbliżonych do podanych przez użytkownika. Jeżeli natrafi na podobny rekord to wyświetla go na podstronie app.serachedproducts.php.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\10.jpg" width="400"></p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\11.jpg" width="400"></p>
<p align="center"> serachedproducts.php </p>
<p align="center">Przykład działania wyszukiwarki.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\12.jpg" width="400"></p>
<p align="center"> shop.blade.php</p>
<p align="center">Na tej stronie wyświetlane są wszystkie produkty z bazy danych. W zależności jaką kategorie wybierzemy na stronie wyświetlą się produkty o id przypisanym do wybranych kategorii oraz podkategorii. Zdjęcia w bazie danych są przechowywane w postaci ścieżki pliku. Po lewej stronie widoczne są filtry które możemy ustalić dla produktów m.in. kategorie, cene, rozmiar oraz kolor. Te informacje są również wypisywane z bazy danych. </p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\13.jpg" width="400"></p>
<p align="center"> product.blade.php</p>
<p align="center">Strona product.php pozwala użytkownikowi na dokładniejsze obejrzenie produktu oraz przeczytanie opisu. Użytkownik może wybrać ilość danej rzeczy, dodać go do koszyka lub do ulubionych. Cała zawartość strony jest generowana na podstawie informacji zawartych w bazie danych. Strona ta jest szablonem do którego podstawiane są wszystkie rzeczy z bazy danych w zależności co użytkownik wybierze.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\14.jpg" width="400"></p>
<p align="center"> favourites.blade.php</p>
<p align="center">Każdy zalogowany użytkownik ma możliwość dodawania produktów do ulubionych. Strona favourites.php wyświetla na ekranie informacje o polubionym produkcie przez użytkownika. Wszystko dzieje się za pośrednictwem bazy danych, ponieważ każdy polubiony produkt tam trafia i łączy się z identyfikatorem użytkownika oraz identyfikatorem produktu. </p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\15.jpg" width="400"></p>
<p align="center"> shopcart.blade.php</p>
<p align="center">W przypadku gdy użytkownik nie doda produktu do koszyka (czyli zmienna sesyjna jest pusta), na ekranie wyświetla się komunikat, że koszyk jest pusty. Przycisk „continue shopping” przenosi użytkownika z powrotem na stronę główną sklepu.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\16.jpg" width="400"></p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\17.jpg" width="400"></p>

<p align="center"> shopcart.blade.php</p>
<p align="center">Po dodaniu produktów do koszyka, użytkownik uzyskuje na ekranie dane o swoim aktualnym zamówieniu wraz z jego szczegółami. Ma możliwość usunięcia danego przedmiotu z koszyka lub zwiększenia jego ilości. Poniżej produktów zliczana jest kwota zamówienia.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\18.jpg" width="400"></p>
<p align="center"> checkout.blade.php</p>
<p align="center">Po zaakceptowaniu swojego zamówienia użytkownik zostanie przeniesiony na podstronę checkout.blade.php. Wymaganym etapem do złożenia zamówienia jest podanie swoich danych adresowych. Wszystkie pola muszą być obowiązkowo wypełnione, ponieważ system walidacji nie przepuści pustych i źle wypełnionych pól. Po ostatecznym zaakceptowaniu zamówienie zostaje dodane do bazy danych. </p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\19.jpg" width="400"></p>
<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\20.jpg" width="400"></p>
<p align="center"> dashboard.blade.php</p>
<p align="center">Użytkownik może zobaczyć swoje dane oraz zamówienia za pomocą podstrony Dashboard. Informacje są pobierane z bazy danych.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\21.jpg" width="400"></p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\22.jpg" width="400"></p>
<p align="center">Użytkownik poprzez stronę główną może zalogować się lub założyć nowe konto w sklepie. Zakładka zaloguj się (przycisk ludzika) jest dynamicznie kontrolowana przez status sesji. Gdy użytkownik posiada już konto oraz poprawnie się zaloguje to następuje podmiana przycisku zaloguj się, na przycisk wyloguj się oraz pod ikonką znajduję się nazwa użytkownika. Po kliknięciu przycisku wyloguj się, sesja zostaje zamknięta.</p>


<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\23.jpg" width="400"></p>
<p align="center"> login.blade.php</p>
<p align="center">Strona ta umożliwia zalogowanie się użytkownikom do systemu. Jeżeli użytkownik zapomni hasła lub chciałby je zmienić może to zrobić klikając na przycisk „forgot your password”.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\24.jpg" width="400"></p>
<p align="center"> reset.blade.php</p>

<p align="center">Ta podstrona umożliwia użytkownikom reset hasła. Wystarczy podać e-mail na które zostało założone konto i na niego zostanie wysłała wiadomość z linkiem do zresetowania hasła.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\25.jpg" width="400"></p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\26.jpg" width="400"></p>
<p align="center"> reset.blade.php</p>
<p align="center">Link z e-maila automatycznie przekieruję użytkownika na stronę zmiany hasła. W bazie danych stare hasło zostanie nadpisane nowo zmienionym hasłem. </p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\27.jpg" width="400"></p>
<p align="center"> register.blade.php</p>

<p align="center">W panelu rejestracyjnym użytkownik może założyć własne konto. Wszystkie pola muszą być obowiązkowo wypełnione, ponieważ system walidacji nie przepuści pustych i źle wypełnionych pól. Po rejestracji na e-mail użytkownika przychodzi mail z informacją, że rejestracja przebiegła pomyślnie.</p>

<br/>

                                # EKRAN ADMINISTRATORA 

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\28.jpg" width="400"></p>
<p align="center"> admin.blade.php</p>

<p align="center">Strona główna panelu administratora - admin.blade.php zawiera w sobie takie sekcje jak: header, menu-sidebar oraz main-content. Szablon tej strony jest powielany do innych podstron z panelu administratora.  Jest to strona główna nawigująca poprzez boczne menu do innych podstron.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\29.jpg" width="400"></p>
<p align="center"> promotionsManagament.blade.php </p>
<p align="center">Na tej stronie administrator ma możliwość zarządzania promocjami. Może dodać, edytować oraz usunąć wybraną promocję. Każda opcja zapisuje wszystko na nowo w bazie danych oraz wszystkie informacje na temat promocji są przekazywane z bazy.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\30.jpg" width="400"></p>
<p align="center"><p align="center"> promotionsManagament.blade.php </p>
<p align="center"> Na tej stronie administrator ma możliwość zarządzania produktami. Może dodać, edytować oraz usunąć wybrany produkt. Każda opcja zapisuje wszystko na nowo w bazie danych oraz wszystkie informacje na temat produktów są przekazywane z bazy. </p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\31.jpg" width="400"></p>
<p align="center"><p align="center"> productsManagament.blade.php </p>
<p align="center">Na tej stronie administrator ma możliwość zarządzania podkategoriami. Może dodać, edytować oraz usunąć wybraną podkategorię. Każda opcja zapisuje wszystko na nowo w bazie danych oraz wszystkie informacje na temat podkategorii są przekazywane z bazy.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\32.jpg" width="400"></p>
<p align="center"><p align="center"> ordersManagament.blade.php </p>
<p align="center">Na tej stronie administrator ma możliwość zarządzania zamówieniami. Może edytować oraz usunąć wybraną podkategorię. Każda opcja zapisuje wszystko na nowo w bazie danych oraz wszystkie informacje na temat zamówień są przekazywane z bazy.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\33.jpg" width="400"></p>
<p align="center"><p align="center"> usersManagament.blade.php </p>
<p align="center">Zakładka USERS służy do zarządzania wszystkimi zarejestrowanymi użytkownikami. Administrator może usunąć lub z edytować dane użytkownika. Administrator może również nadać rolę użytkownikowi. Cała zawartość strony jest importowana z bazy danych.</p>

<br/>

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\34.jpg" width="400"></p>
<p align="center"><p align="center"> sliderManagment.blade.php </p>
<p align="center">Na tej stronie administrator ma możliwość zarządzania banerami. Może dodać, edytować oraz usunąć wybraną podkategorię. Każda opcja zapisuje wszystko na nowo w bazie danych oraz wszystkie informacje na temat banerów są przekazywane z bazy.</p>

<br/>

# Baza danych

### Diagram ERD
<br/>
<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\DIAGRAM ERD.jpg" width="400"></p>

## Tabela roles <br/>
Encja przechowująca role, które są przypisywane do użytkowników i jest połączona z encją Shop_users relacją jeden do wielu, ponieważ każdy użytkownik musi mieć przypisaną rolę użytkownika lub administratora. 

•	id_role – identyfikator roli <br/>
•	role_name –  kolumna przechowująca nazwe roli (użytkownik lub administrator <br/> 
<br/>

## Tabela users_shop
Encja przechowująca informację na temat użytkowników czyli imię, login, hasło, e-mail. Jest połączona z encją Users_addresses relacją jeden do wielu.

•	id_ushop – identyfikator użytkownika. <br/>
•	name – kolumna przechowująca imię użytkownika. <br/>
•	surname - kolumna przechowująca nazwisko użytkownika. <br/>
•	mobile - kolumna przechowująca numer telefonu użytkownika. <br/>
•	email - kolumna przechowująca e-mail użytkownika. <br/>
•	login - kolumna przechowująca login użytkownika. <br/>
•	password - kolumna przechowująca hasło użytkownika. <br/>
•	id_role – klucz obcy, określający rolę danego użytkownika. <br/>
•	id_user_address – klucz obcy, przypisuję dane adresowe użytkownikowi. <br/> <br/>

## Tabela users_addresses
Encja przechowująca dane adresowe użytkowników. Jest połączona z encją Shop_users, ponieważ każdy użytkownik musi mieć adres zamieszkania.

•	id_user_address – identyfikator adresu użytkownika. <br/>
•	name_of_city - kolumna przechowująca nazwę miasta. <br/>
•	post_code - kolumna przechowująca  kod pocztowy. <br/>
•	name_of_street - kolumna przechowująca nazwę ulicy. <br/>
•	voideship - kolumna przechowująca nazwę województwa.  <br/>
•	county - kolumna przechowująca nazwę powiatu. <br/>
•	apartament_number - kolumna przechowująca numer mieszkania. <br/>
•	house_number - kolumna przechowująca numer domu. <br/> <br/>

## Tabela categories
Encja przechowująca nazwy kategorii i jest połączona z encją Sub_categories relacją jeden do wielu. <br/>

•	id_category – identyfikator kategorii. <br/>
•	name_of_category – nazwa kategorii. <br/>
<br/>

## Tabela sub_categories <br/>
Encja przechowująca nazwy podkategorii i jest połączona z encją Products relacją jeden do wielu.<br/>

•	id_sub_category – identyfikator podkategorii.<br/>
•	name_of_subcategory – kolumna przechowująca nazwę podkategorii.<br/>
•	id_category – klucz obcy, przypisuję podkategorii daną kategorię. 

## Tabela products <br/>
Encja przechowująca informację na temat danego produktu (np. nazwa, ilość produktów, rozmiar, kolor oraz do jakiej podkategorii oraz kategorii należy. Jest połączona z encją images relacją jeden do wielu. <br/>

•	id_product – identyfikator produktu. <br/>
•	name – kolumna przechowująca nazwę produktu. <br/>
•	quantity - kolumna przechowująca ilość produktu. <br/>
•	prize - kolumna przechowująca cenę produktu. <br/>
•	color - kolumna przechowująca kolor produktu. <br/>
•	size_of_products - kolumna przechowująca rozmiar produktu. <br/>
•	description - kolumna przechowująca opis produktu. <br/>
•	composition_and_conservation - kolumna przechowująca skład i konserwację produktu. <br/>
•	id_sub_category – klucz obcy, przypisuję produktowi daną podkategorię. <br/>
•	id_promotion – klucz obcy, przypisuję produktowi daną promocję. <br/>
•	id_order – klucz obcy, przypisuję produktowi dane zamówienie. <br/>

## Tabela images 
Encja przechowująca ścieżki do zdjęć, które będą przypisane do każdego produktu i wyświetlane na sklepie. <br/>

•	id_photo – identyfikator zdjęcia. <br/>
•	image - kolumna przechowująca ścieżkę pliku. <br/>
•	id_product – klucz obcy, przypisuję zdjęciom dany produkt. <br/><br/>

## Tabela promotions 
Encja przechowująca informację na temat promocji oraz rabatów, które będą występować na sklepie w określonym czasie. Jest połączona z encją products relacją jeden do wielu. <br/>

•	id_promotion – identyfikator promocji. <br/>
•	name_of_promotion - kolumna przechowująca nazwę promocji. <br/>
•	size_of_promotion - kolumna przechowująca rozmiar promocji. <br/>
•	promotion_start_date - kolumna przechowująca datę rozpoczęcia promocji. <br/>
•	promotion_end_date – kolumna przechowująca datę zakończenia promocji. <br/>
•	description - kolumna przechowująca opis promocji. <br/><br/>

## Tabela orders 

Encja ta jest jedną z główniejszych, ponieważ posiada informacja na temat złożonych zamówień. W tej encji znajdują się informacje na temat zamówionego produktu, na temat użytkownika który produkt zamówił oraz jest połączona z encją faktury relacją jeden do jednego. 
•	id_order – identyfikator zamówienia.
•	status - kolumna przechowująca status zamówienia.
•	date_of_placing_order - kolumna przechowująca datę złożenia zamówienia.
•	payment_method - kolumna przechowująca sposób płatności.
•	id_ushop – klucz obcy, przypisuję zamówieniom danego użytkownika.

Tabela favourite_products 
Encja przechowująca informacje na temat ulubionych produktów przez użytkowników. Każdy użytkownik ma możliwość zapisać na swoim koncie produkty, które mu się podobają. Tabela ta jest połączona z tabelą products oraz users_shop.

•	id_favourite_product – identyfikator ulubionego produktu.
•	id_user – klucz obcy, przypisuję ulubionym produktom danego użytkownika.
•	id_product – klucz obcy, przypisuję ulubionym produktom dany produkt.

<br/><br/>

# Wykorzystane technologie

•	 PHP v7.3.27 <br/>
•	Laravel Framework 8.37.0 <br/>
•	JQuery <br/>
•	HTML5 <br/>
•	CSS <br/>
•	Bootstrap4 <br/>
•	PL/SQL <br/>

<br/>

# Opis wymagań aplikacyjnych 

1.	Baza danych Oracle (najlepiej 19.3 wersja)
2.	Composer
3.	instantclient_19_10
4.	PHP w wersji minimum 7.3.27
5.	NPM w wersji minimum 6.14.12

<br><br>

#  Proces uruchomienia aplikacji

INSTALACJA OPROGRAMOWANIA
LARAVEL + ORACLE + COMPOSER

1.	Krok pierwszy to pobranie i zainstalowanie XAMPP’A 
https://www.apachefriends.org/pl/download.html
2.	Krok  drugi to pobranie i zainstalowanie Composera https://getcomposer.org
W trakcie instalacji w miejscu wybrania lokalizacji pliku trzeba wybrać lokalizacje pliku php.exe. Zazwyczaj jest on w lokalizacji XAMPP/php/php.exe
<br><br> Jeśli instalacja przebiegła pomyślnie, w terminalu po wpisaniu Composer powinien pojawić się komunikat taki jak poniżej:

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\IN.jpg" width="400"></p>

3. Krok trzeci to pobranie bazy Oracle w wersji 19.3 https://www.oracle.com/pl/database/technologies/oracle19c-windows-downloads.html

<br><br>

### NODE.JS(NPM)

1.	Pobrać i zainstalować  npm
2.	Aby sprawdzić czy instalacja przebiegła pomyślnie trzeba wpisać w terminalu poniższą komendę:
npm – v <br>
W wyniku powinny pojawić się takie informacje:

<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\NPM.jpg" width="400"></p>


<br><br>

1.	Uruchomić Oracle
2.	Utworzyć nową bazę danych o nazwie Clothdiva
3.	Zaimportować do niej bazę
4.	Przejść do głównego folderu Clothdiva i wpisać w terminalu następujące komendy:
composer install
php artistan storage: link
npm install
npm start
php artisan serve
5.	W przeglądarkę wpisać localhost:8000.
6.	Jeśli chcesz się zalogować jako administrator wpisz w formularzu logowania Email/Password: admin@gmail.com/Password123, natomiast jeśli chcesz się zalogować jako standardowy użytkownik wpisz w formularzu logowania Email/Password: user@gmail.com/User123

<br><br>

# Potrzebne nazwy użytkowników do uruchomienia aplikacji

<br>

W aplikacji istnieją już konta początkowe.

• 	ADMINISTRATOR<br>
E-MAIL: admin@gmail.com<br>
HASŁO: Password123

<br><br>

•	UŻYTKOWNIK(klient)

E-MAIL: user@gmail.com<br>
HASŁO: User123 <br>

<br><br>

Dostęp do bazy danych(Oracle)

LOGIN: system <br>
HASŁO: Password123



