<p align="center"><img src="public\img\logo.png" width="400"></p>

## About Clohdiva

# Projekt zaliczeniowy z przedmiotu: Aplikacje internetowe

# Temat projektu: Internetowy sklep odzieżowy Clothdiva

## Skład grupy: Krzysztof Karaś, Patrycja Gaweł

## Specyfikacja projektu
## Cel projektu: Stworzenie platformy umożliwiające dokonywanie zakupów online.

Aplikacja służy do procesów zewnętrznych czyli komunikacja oraz sprzedaż.  Strona internetowa posiada elementy dynamiczne oparte o system CMS, służący do zarządzania treścią witryny. Dzięki temu administratorzy posiadają pełną kontrolę nad asortymentem sklepu poprzez możliwość dodawania, usuwania oraz modyfikacji m.in. produktów, promocji, zarejestrowanych użytkowników i zawartości bannera. Natomiast użytkownicy będą mieli kontrolę nad swoimi zakupami. Mają oni możliwość dodawania oraz usuwania produktów do ulubionych oraz dodawania, modyfikowania i usuwania zawartości koszyka. Aplikacja pobiera wszystkie produkty wybrane przez klienta, oblicza stan koszyka i po złożeniu zamówienia eksportuje wszystko do bazy danych. Wszystko to odbywa się po stronie serwera. Strona internetowa zawiera takie elementy jak krótki opis sklepu, stronę główną sklepu, stronę produktów, które zostały podzielone na różne kategorie i podkategorie oraz stronę kontaktową dzięki której, użytkownicy mogą zadawać pytania, zgłaszać problemy i komunikować się z administratorami sklepu. W szablonie jest dostępnych 48 produktów, wraz z informacjami takimi jak cena, rozmiar oraz kolor produktu, opis wraz z składem i konserwacją produktu oraz ilość danego produktu.  Aplikacja głównie służy do symulowania sklepu internetowego. 

## Cele szczegółowe:

1. Dokonywanie zakupów w sklepie internetowym przez klienta
2. Zarządzanie asortymentem sklepu przez administratorów.


## Funkcjonalności

### ADMIN:
                                      
•	Role i uprawnienia administratora.
•	Zarządzanie produktami na sklepie. (możliwość dodawania, usuwania oraz edycji)
•	Zarządzanie banerami. (możliwość dodawania oraz usuwania).
•	Zarządzanie zamówieniami (możliwość edycji oraz usuwania).
•	Zarządzenia kategoriami (możliwość dodawania oraz usuwania).
•	Zarządzanie użytkownikami(możliwość edycji oraz usuwania).
•	Zarządzanie promocjami(możliwość dodawania i usuwania).

### USER DASHBOARD:

•	System logowania i rejestracji użytkowników (klientów).
•	Koszyk klienta.
•	Składanie wirtualnych zamówień.
•	Dodawanie produktów do ulubionych.
•	Możliwość komunikacji użytkownika z administratorem poprzez formularz kontaktowy
•	Filtrowanie produktów ze względu na cenę, rozmiar, kolor.

## Interfejs serwisu
### EKRAN GŁÓWNY 

### Strona główna aplikacji app.blade.php
<p align="center"><img src="photos\ZDJĘCIA DO DOKUMENTACJI\1.jpg" width="400"></p>
<p align="center">Strona główna app.blade.php zawiera w sobie takie sekcje jak: header, banner oraz footer. Szablon tej strony jest powielany do wielu innych podstron za wyjątkiem sekcji banner.  Celem tej strony jest zaprezentowanie sklepu i ma ona charakter czysto wizualny. Jest to strona główna(home) nawigująca do innych podstron, która zarazem jest wizytówką sklepu internetowego Clothdiva.</p>