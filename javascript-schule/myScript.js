/*function greetVisitor() {
    var name = prompt('Bitte geben Sie Ihren Namen ein:');
    if (name !== null) {
        var greeting = 'Hallo ' + name + ', willkommen zum Modul M293!';
        alert(greeting);
    }
}

greetVisitor();

var variable1 = 420;
var variable2 = 'Hello';
var variable3 = true;

alert('Variable 1: Wert - ' + variable1 + ', Typ - ' + typeof variable1);
alert('Variable 2: Wert - ' + variable2 + ', Typ - ' + typeof variable2);
alert('Variable 3: Wert - ' + variable3 + ', Typ - ' + typeof variable3);

var value1 = prompt('Bitte geben Sie den ersten Wert ein:');
var value2 = prompt('Bitte geben Sie den zweiten Wert ein:');

var result = parseFloat(value1) * parseFloat(value2);

document.write('Das Ergebnis der Multiplikation ist: ' + result);

const username = 'admin';
const password = 'pass123';

var enteredUsername = prompt('Bitte geben Sie Ihren Benutzernamen ein:');
var enteredPassword = prompt('Bitte geben Sie Ihr Passwort ein:');

if (enteredUsername === username && enteredPassword === password) {
    alert('Anmeldung erfolgreich!');
} else {
    alert('Falscher Benutzername oder falsches Passwort!');
}

var points = 0;

for (var i = 1; i <= 5; i++) {
    var num1 = Math.floor(Math.random() * 10);
    var num2 = Math.floor(Math.random() * 10);
    var answer = prompt('Aufgabe ' + i + ': Was ist ' + num1 + ' + ' + num2 + '?');

    if (parseInt(answer) === num1 + num2) {
        points++;
    }
}

switch (points) {
    case 0:
    case 1:
    case 2:
    case 3:
        alert('Nicht schlecht, weiter so!');
        break;
    case 4:
        alert('Gute Leistung!');
        break;
    case 5:
        alert('Perfekt, volle Punktzahl!');
        break;
    default:
        alert('Ergebnis konnte nicht ermittelt werden.');
        break;
}

var vorname1 = prompt("Geben Sie Ihren Vornamen ein:");
var nachname1 = prompt("Geben Sie Ihren Nachnamen ein:");
var alter1 = prompt("Geben Sie Ihr Alter ein:");

var person = [vorname1, nachname1, alter1];
document.write(person);

var daten = [[], [], []];

for (var i = 0; i < 3; i++) {
    var vorname1 = prompt("Geben Sie den Vornamen der Person " + (i + 1) + " ein:");
    var nachname1 = prompt("Geben Sie den Nachnamen der Person " + (i + 1) + " ein:");
    var alter1 = prompt("Geben Sie das Alter der Person " + (i + 1) + " ein:");

    daten[i] = [vorname1, nachname1, alter1];
}

var personenNummer = prompt("Geben Sie die Nummer der Person ein (1-3):");
var informationIndex = prompt("Geben Sie den Index der gewünschten Information ein (0-2):");

var gewuenschteInformation = daten[personenNummer - 1][informationIndex];
document.write("Gewünschte Information: " + gewuenschteInformation);

var personen = {};

for (var i = 0; i < 3; i++) {
    var vorname1 = prompt("Geben Sie den Vornamen der Person " + (i + 1) + " ein:");
    var nachname1 = prompt("Geben Sie den Nachnamen der Person " + (i + 1) + " ein:");
    var alter1 = prompt("Geben Sie das Alter der Person " + (i + 1) + " ein:");

    personen["Person " + (i + 1)] = {
        Vorname: vorname1,
        Nachname: nachname1,
        Alter: alter1
    };
}

var personenName = prompt("Geben Sie den Namen der Person ein (Person 1-3):");
var eigenschaft = prompt("Geben Sie die gewünschte Eigenschaft ein (Vorname, Nachname, Alter):");

var gewuenschteInformation = personen[personenName][eigenschaft];
document.write("Gewünschte Information: " + gewuenschteInformation);

var values = [];

for (var i = 0; i < 5; i++) {
    var value = prompt("Geben Sie einen Wert ein:");
    values.push(value);
}

document.write("Array: " + values);*/

var values = [];
var count = 0;

while (count < 5) {
    var value = prompt("Geben Sie einen Wert ein:");
    values.push(value);
    count++;
}

document.write("Array: " + values);

var wordSet = new Set(["Apfel", "Banane", "Orange", "Erdbeere"]);

var searchWord = prompt("Geben Sie ein Wort ein:");

var isWordFound = false;

for (var word of wordSet) {
    if (word === searchWord) {
        isWordFound = true;
        break;
    }
}

if (isWordFound) {
    document.write(" Das Wort ist im Set enthalten.");
} else {
    document.write(" Das Wort ist nicht im Set enthalten.");
}
