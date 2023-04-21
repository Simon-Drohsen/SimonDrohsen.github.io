using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions;
using System.Reflection;
using System.Text;
using System.Threading.Tasks;

namespace BlackJack2
{
    class Program
    {
        static void Main(string[] args)
        {
            bool again = true;

            while(again == true)
            {
                Random rnd = new Random();
                int card = 0;
                int randomCard = 0;
                int players = 0;
                int ki = rnd.Next(2, 12);
                int kiSum = ki;
                int count = 0;
                bool kiGame = true;
                bool kiGame2 = true;
                bool wholeKi = true;
                string decision;
                List<List<int>> playerCardList = new List<List<int>>();
                List<int> kiCardList = new List<int>();

                do
                {
                    Console.Write("Wie viele Spieler seid ihr? ");
                } while (Int32.TryParse(Console.ReadLine(), out players) == false || players < 1);

                for (int i = 1; i <= players; i++)
                {
                    count++;
                    bool play = true;
                    List<int> cardList = new List<int>();
                    Console.WriteLine($"Player {i}");
                    card = rnd.Next(2, 12);
                    Console.Write($"{card} ");
                    cardList.Add(card);
                    randomCard = rnd.Next(2, 12);
                    Console.WriteLine(randomCard);
                    cardList.Add(randomCard);
                    card += randomCard;
                    playerCardList.Add(cardList);

                    if (card == 21)
                    {
                        Console.WriteLine($"Du hast gewonnen Player {i}!");
                        play = false;
                        wholeKi = false;
                    }

                    while (play == true)
                    {
                        Console.WriteLine($"Player {i} das sind jetzt deine Karten:");
                        YourCards(cardList);
                        Console.WriteLine($"Player {i} Willst du noch eine Karte ziehen? [j/n] ");
                        decision = Convert.ToString(Console.ReadLine());
                        if (decision == "j" || decision == "J")
                        {
                            cardList.Add(rnd.Next(2, 12));
                        }

                        if (playerCardList[i-1].Sum() > 21)
                        {
                            int cont = 0;
                            foreach (int number in cardList)
                            {
                                if (number == 11)
                                {
                                    cardList[cont] = 1;
                                    break;
                                }
                                cont++;
                            }
                            if (playerCardList[i - 1].Sum() > 21)
                            {
                                play = false;
                                Console.WriteLine($"Du bist draussen Player {i}!");
                                YourCards(cardList);
                            }
                        }
                        else if(decision == "n" || decision == "N")
                        {
                            play = false;
                        }
                    }
                }

                while (wholeKi == true)
                {
                    while (kiGame == true)
                    { 
                        Console.ForegroundColor = ConsoleColor.DarkBlue;
                        kiCardList.Add(ki);
                        ki = rnd.Next(2, 12);
                        kiSum += ki;
                        kiCardList.Add(ki);

                        if (kiSum == 21)
                        {
                            kiGame2 = false;
                        }
                        kiGame = false;
                    }

                    while (kiSum < 17)
                    {
                        ki = rnd.Next(2, 12);
                        kiSum += ki;
                        kiCardList.Add(ki);
                        foreach (int number in kiCardList)
                        {
                            int cunt = 0;
                            if (number == 11)
                            {
                                kiCardList[cunt] = 1;
                                break;
                            }
                            cunt++;
                        }
                    }
                    if(kiSum == 21)
                    {
                        Console.WriteLine($"Die Ki hat Gewonnen!");
                        Console.WriteLine("Die KI hat gezogen:");
                        YourCards(kiCardList);
                    }
                    else
                    {
                        Console.WriteLine("Die KI zieht:");
                        YourCards(kiCardList);
                    }

                    for (int i = 1; i <= players; i++)
                    {
                        Console.ForegroundColor = ConsoleColor.Black;
                        Console.WriteLine($"Player {i} das sind jetzt deine Karten.");
                        YourCards(playerCardList[i - 1]);
                        int playerScore = playerCardList[i - 1].Sum();
                        if (playerScore > kiSum && playerScore < 22 || (kiSum > 21 && playerScore < 22))
                        {
                            Console.WriteLine($"Du hast gegen die KI Gewonnen, Player {i}!");
                        }
                        else if ((i == playerCardList[i - 1].Count - 1 && kiSum > playerScore) || (kiSum < 22 && playerScore > 22))
                        {
                            Console.ForegroundColor = ConsoleColor.DarkBlue;
                            Console.WriteLine($"Die Ki hat gegen dich Gewonnen, Player {i}!");
                        }else
                        {
                            Console.WriteLine($"Unentschieden!");
                        }
                    }
                    wholeKi = false;
                }
                    

                Console.ForegroundColor = ConsoleColor.Black;
                Console.ReadLine();
                Console.Clear();
                Console.Write("Moechtest du ein neues Spiel starten? (j / n)");
                String answer = Console.ReadLine();
                if (answer == "n" || answer == "N")
                {
                    again = false;
                }
                else
                {
                    again = true;
                }
            }
        }

        public static void YourCards(List<int> list)
        {
            int count = 0;

            for (int i = 0; i < list.Count; i++)
            {
                count++;

                if (i == list.Count - 1)
                {
                    Console.Write($"{list[i]} = ");
                }
                else
                {
                Console.Write($"{list[i]} + ");
                }
            }
            Console.WriteLine(list.Sum());
        }
    }
}