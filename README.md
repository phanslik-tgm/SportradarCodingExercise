# SportradarCodingExercise
Getestet habe ich das ganze auf einer Ubuntu-Server VM
* Webbrowser: Apache2
* Database:   Mysql
## ERD
![alt text](ERD.png "ERD")

## index.php
index.php zeigt alle Event-Einträge in einer Tabelle an.
![alt text](index.png "index.php")

## search.php
In search.php kann man nach Sportarten filtern. Dazu gibt man die gesuchte Sportart in das Suchfeld ein und bekommt eine Liste aller Events dieser Sportart.
![alt text](search.png "search.php")

## Erweiterungen
### Datenbank
Falls man zusätzliche Daten (Wie z.B. Statistiken,etc.) zu den Teams oder Sportarten speichern will, muss man die Datanbank erweitern.  
Es müssen dann neue Tabellen für die Teams oder Sportarten erstellt werden und mit den Events über ForeignKeys verbunden werden.  

```mysql


```
