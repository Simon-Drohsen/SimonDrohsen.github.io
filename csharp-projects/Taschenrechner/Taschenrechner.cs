using System;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions;
using System.Text;
using System.Threading.Tasks;

namespace Taschenrechner
{
    class Program
    {
        static void Main(string[] args)
        {
            Programm2.Test();                           //Statischer Aufruf der Methode Test aus der klasse Programm2

            Programm2 programm2 = new Programm2();      // Klasseninstanzierung von Programm2
            programm2.WriteTest();                      // auf Instanz zugreifen



            Int16 ind = 16;
            double zahl1 = 0;
            double zahl2;
            double zahl3 = 0;
            double summe = 0;
            double pi = 3.1415;
            bool wiederholen = true;
            bool erste = true;
            bool normal = true;
            bool ende = true;
            bool runde = true;
            string zeichen;

            while (wiederholen)
            {

                if (erste)
                {
                    Console.Write("Erste Zahl: ");
                    zahl1 = Convert.ToDouble(Console.ReadLine());
                }

                if (runde == false)
                {
                    Console.Write("Möchtest du die Fläche eines Vierecks Berechnen? (j / n)");
                    String modus = Console.ReadLine();

                    if (modus == "J" || modus == "j")
                    {
                        ende = true;
                        normal = false;
                        zahl1 = WriteNumber("Erste");
                        zahl2 = WriteNumber("Zweite");
                        summe = zahl1 * zahl2;
                    }
                    else if (modus == "n" || modus == "N")
                    {
                        Console.Write("Moechtest du die Fläche eines Dreiecks Berechnen? (j / n)");
                        String modus2 = Console.ReadLine();

                        if (modus2 == "J" || modus2 == "j")
                        {
                            ende = true;
                            normal = false;
                            zahl1 = WriteNumber("Erste");
                            zahl2 = WriteNumber("Zweite");
                            summe = zahl1 * zahl2;
                            summe /= 2;
                        }
                        else if (modus2 == "n" || modus2 == "N")
                        {
                            Console.Write("Moechtest du den Unfamg eines Dreiecks Berechnen? (j / n)");
                            String modus3 = Console.ReadLine();

                            if (modus3 == "J" || modus3 == "j")
                            {
                                ende = true;
                                normal = false;
                                zahl1 = WriteNumber("Erste");
                                zahl2 = WriteNumber("Zweite");
                                zahl3 = WriteNumber("Dritte");

                                summe = zahl1 + zahl2 + zahl3;
                            }
                            else if (modus3 == "n" || modus3 == "N")
                            {
                                Console.Write("Moechtest du die Fläche eines Kreises Berechnen? (j / n)");
                                String modus4 = Console.ReadLine();

                                if (modus4 == "J" || modus4 == "j")
                                {
                                    ende = true;
                                    normal = false;
                                    Console.Write("Radius: ");
                                    zahl1 = Convert.ToDouble(Console.ReadLine());

                                    summe = (zahl1 * zahl1) * pi;
                                }
                                else if (modus4 == "n" || modus4 == "N")
                                {
                                    Console.Write("Moechtest du den Umfang eines Kreises Berechnen? (j / n)");
                                    String modus5 = Console.ReadLine();

                                    if (modus5 == "J" || modus5 == "j")
                                    {
                                        ende = true;
                                        normal = false;
                                        Console.Write("Radius: ");
                                        zahl1 = Convert.ToDouble(Console.ReadLine());

                                        summe = zahl1 * pi;
                                        summe *= 2;
                                    }
                                }
                            }
                        }
                    }
                }
                else
                {
                    Console.Write("Moechtest du die Fläche eines Vierecks Berechnen? (j / n)");
                    String modus = Console.ReadLine();

                    if (modus == "J" || modus == "j")
                    {
                        ende = true;
                        normal = false;
                        zahl2 = WriteNumber("Zweite");

                        summe = zahl1 * zahl2;
                    }
                    else if (modus == "n" || modus == "N")
                    {
                        Console.Write("Moechtest du die Fläche eines Dreiecks Berechnen? (j / n)");
                        String modus2 = Console.ReadLine();

                        if (modus2 == "J" || modus2 == "j")
                        {
                            ende = true;
                            normal = false;
                            zahl2 = WriteNumber("Zweite");

                            summe = zahl1 * zahl2;
                        }
                        else if (modus2 == "n" || modus2 == "N")
                        {
                            Console.Write("Moechtest du den Unfamg eines Dreiecks Berechnen? (j / n)");
                            String modus3 = Console.ReadLine();

                            if (modus3 == "J" || modus3 == "j")
                            {
                                ende = true;
                                normal = false;
                                zahl2 = WriteNumber("Zweite");
                                Console.Write("Dritte Zahl: ");
                                zahl3 = Convert.ToDouble(Console.ReadLine());

                                summe = zahl1 + zahl2 + zahl3;
                                summe /= 2;
                            }
                            else if (modus3 == "n" || modus3 == "N")
                            {
                                Console.Write("Moechtest du die Fläche eines Kreises Berechnen? (j / n)");
                                String modus4 = Console.ReadLine();

                                if (modus4 == "J" || modus4 == "j")
                                {
                                    ende = true;
                                    normal = false;
                                    summe = zahl1 * zahl1 * pi;
                                }
                                else if (modus4 == "n" || modus4 == "N")
                                {
                                    Console.Write("Moechtest du den Umfang eines Kreises Berechnen? (j / n)");
                                    String modus5 = Console.ReadLine();

                                    if (modus5 == "J" || modus5 == "j")
                                    {
                                        ende = true;
                                        normal = false;
                                        summe = zahl1 * pi * 2;
                                    }
                                }
                            }
                        }
                    }
                }

                while (normal)
                {
                    Console.Write("Operator (+, -, *, /, ^, c (wurzel): ");
                    zeichen = Convert.ToString(Console.ReadLine());

                    if (zeichen == "+" || zeichen == "/" || zeichen == "-" || zeichen == "*" || zeichen == "^")
                    {
                        zahl2 = WriteNumber("Zweite");

                        if (zeichen == "+")
                        {
                            summe = zahl1 + zahl2;
                            normal = false;
                            ende = true;

                        }
                        else if (zeichen == "-")
                        {
                            summe = zahl1 - zahl2;
                            normal = false;
                            ende = true;
                        }
                        else if (zeichen == "*")
                        {
                            summe = zahl1 * zahl2;
                            normal = false;
                            ende = true;
                        }
                        else if (zeichen == "/")
                        {
                            summe = zahl1 / zahl2;
                            normal = false;
                            ende = true;

                        }
                        else if (zeichen == "^")
                        {
                            summe = Math.Pow(zahl1, zahl2);
                            normal = false;
                            ende = true;
                        }
                        else
                        {
                            Console.WriteLine("Ungueltiger Operator");
                            ende = true;
                            continue;
                        }
                    }

                    if (zeichen == "c" || zeichen == "C")
                    {
                        summe = Math.Sqrt(zahl1);
                        normal = false;
                        ende = true;
                    }
                }

                Console.WriteLine(summe);

                while (ende)
                {
                    Console.Write("Moechtest du eine neue Rechnung starten oder mit der Summe fortfahren? (Reset = r, Mit der gleichen Summe Fortfahren = f, Abbrechen = a)");
                    String antwort = Console.ReadLine();
                    if (antwort == "r" || antwort == "R")
                    {
                        wiederholen = true;
                        erste = true;
                        normal = true;
                        summe = 0;
                        zahl1 = 0;
                        zahl2 = 0;
                        ende = false;
                        Console.Clear();
                    }
                    else if (antwort == "f" || antwort == "F")
                    {
                        erste = false;
                        wiederholen = true;
                        zahl1 = summe;
                        ende = false;
                        normal = true;
                        runde = true;
                    }
                    else if (antwort == "a" || antwort == "A")
                    {
                        wiederholen = false;
                        ende = false;
                    }
                    else
                    {
                        Console.Clear();
                        Console.WriteLine("Entscheide dich!");
                    }
                }
            }
        }

        static private double WriteNumber(string zahl) { 
            Console.Write(zahl + " Zahl: ");
            return Convert.ToDouble(Console.ReadLine());
        }
    }
    class Programm2
    {
        public void WriteTest()
        {
            Console.Write("test");
        }

        static public void Test()
        {
            Console.Write("test2");
        }
    }
}