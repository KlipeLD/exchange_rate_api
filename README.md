Zadanie
1. Zaimplementuj API dla prostego systemu do zapisywania kursu walut (EUR, USD, GBP).<br />
2. Zadanie rekrutacyjne powinno zostać umieszczone na gitlab/github jako publiczny projekt.<br />
3. Po ukończeniu zadania wyślij do nas wiadomość z linkiem do repozytorium.<br />
<br />
Założenia biznesowe<br />
• Kurs walut zapisywany jest raz dziennie<br />
• Odpytywanie endpoitów powinno być zabezpieczone autoryzacją i rolą dla API<br />
<br />
Wymagane endpointy<br />
• (POST) Autoryzacja<br />
• (POST) dodanie kursu waluty<br />
• (GET) Lista kursów walut z danego dnia<br />
<br />
[<br />
 {"currency": "EUR", "date": "2023-04-13", "amount": 4.66},<br />
 {"currency": "USD", "date": "2023-04-13", "amount": 4.86},<br />
 {"currency": "GBP", "date": "2023-04-13", "amount": 6.66}<br />
]<br />
<br />
• (GET) Pobranie kursu dla wybranej waluty z danego dnia<br />
