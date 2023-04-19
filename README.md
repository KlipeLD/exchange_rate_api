Zadanie
1. Zaimplementuj API dla prostego systemu do zapisywania kursu walut (EUR, USD, GBP).
2. Zadanie rekrutacyjne powinno zostać umieszczone na gitlab/github jako publiczny projekt.
3. Po ukończeniu zadania wyślij do nas wiadomość z linkiem do repozytorium.

Założenia biznesowe
• Kurs walut zapisywany jest raz dziennie
• Odpytywanie endpoitów powinno być zabezpieczone autoryzacją i rolą dla API

Wymagane endpointy
• (POST) Autoryzacja
• (POST) dodanie kursu waluty
• (GET) Lista kursów walut z danego dnia

[
 {"currency": "EUR", "date": "2023-04-13", "amount": 4.66},
 {"currency": "USD", "date": "2023-04-13", "amount": 4.86},
 {"currency": "GBP", "date": "2023-04-13", "amount": 6.66}
]

• (GET) Pobranie kursu dla wybranej waluty z danego dnia
