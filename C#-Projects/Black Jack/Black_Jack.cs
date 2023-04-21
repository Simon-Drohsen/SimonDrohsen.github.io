using System;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions;
using System.Text;
using System.Threading.Tasks;

namespace BlackJack
{
    class Program
    {
        static void Main(string[] args)
        {
            Random rnd = new Random();
            bool again = true;


            while (again == true)
            {
                int playerNum = 0;
                int firstCard;
                int secondCard;
                string decision;
                int card = 0;
                int storage = 0;
                int storageFirstCard = 0;
                int storageSecondCard = 0;
                bool play = true;
                bool kiGame = true;
                bool firstRound = true;
                int ki = 0;
                firstCard = rnd.Next(2, 12);
                secondCard = rnd.Next(2, 12);

                if (firstCard == 11)
                {
                    Console.WriteLine(firstCard);
                    Console.Write("Willst du eine 11 oder 1? ");
                    firstCard = Convert.ToInt32(Console.ReadLine());
                    storageFirstCard = 11;
                }
                Console.WriteLine(firstCard);

                if (secondCard == 11)
                {
                    Console.WriteLine(secondCard);
                    Console.Write("Willst du eine 11 oder 1? ");
                    secondCard = Convert.ToInt32(Console.ReadLine());
                    storageSecondCard = 11;
                }
                Console.Write($"{firstCard} + {secondCard} = ");
                playerNum = firstCard + secondCard;

                if(firstCard + secondCard == 21)
                {
                    Console.WriteLine("Du hast Black Jack!");
                    play = false;
                    kiGame = false;
                    firstRound = false;
                    Console.ReadLine();
                }

                while (play == true)
                {
                    Console.WriteLine(playerNum);
                    Console.WriteLine("Willst du noch eine Karte ziehen? [j/n] ");
                    decision = Convert.ToString(Console.ReadLine());

                    if (decision == "j" || decision == "J")
                    {
                        card = rnd.Next(2, 12);
                        if (card == 11)
                        {
                            Console.WriteLine(card);
                            Console.Write("Willst du eine 11 oder 1? ");
                            card = Convert.ToInt32(Console.ReadLine());
                            storage = 11;
                        }
                        Console.WriteLine($"{playerNum} + {card}");
                        playerNum += card;
                        card = 0;
                    }
                    else
                    {
                        play = false;
                    }
                    if (playerNum > 21)
                    {
                        if (storage == 11 || storageFirstCard == 11 || storageSecondCard == 11)
                        {
                            playerNum -= 10;
                            Console.Write($"{playerNum + 10} - 10 = ");
                            storage = 0;
                            storageFirstCard = 0;
                            storageSecondCard = 0;
                        }
                    }
                    if (playerNum > 21)
                    {
                        Console.WriteLine("Du hast Verloren!");
                        Console.ReadLine();
                        play = false;
                        kiGame = false;
                    }
                }
                while(kiGame == true)
                {
                    Console.WriteLine("Die KI zieht: ");
                    while (ki < playerNum)
                    {
                        if (firstRound == true)
                        {
                            firstCard = rnd.Next(2, 12);
                            secondCard = rnd.Next(2, 12);
                            Console.Write($"{firstCard} + {secondCard} = ");
                            ki += firstCard + secondCard;
                            if (firstCard + secondCard == 21)
                            {
                                Console.WriteLine("Die KI hat Black Jack!");
                                play = false;
                                kiGame = false;
                                firstRound = false;
                                Console.ReadLine();
                            }
                        }
                        else
                        {
                            card = rnd.Next(1, 12);
                            Console.Write($"{ki} + {card} = ");
                            ki += card;
                        }
                        firstRound = false;
                        Console.WriteLine(ki);
                    }
                    if (ki <= 21)
                    {
                        if (playerNum <= 21 && playerNum > ki)
                        {
                            Console.WriteLine("Du hast Gewonnen!");
                        }
                        else if(playerNum == ki)
                        {
                            Console.WriteLine("Unentschieden!");
                        }
                        else
                        {
                            Console.WriteLine("Du hast Verloren!");
                        }
                    }
                    else
                    {
                        Console.WriteLine("Du hast Gewonnen!");
                    }

                    kiGame = false;
                    Console.ReadLine();
                }

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
    }
}