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

            int players;
            string decision;

            Console.Write("Anzahl Spieler:");
            players = Convert.ToInt32(Console.ReadLine());
            Random rnd = new Random();

            // Players with List
            List<int>[] listPlayers = new List<int>[players];

            for (int i = 0; i < players; i++)
            {
                listPlayers[i] = new List<int>();
                listPlayers[i].Add(rnd.Next(2, 12));
                listPlayers[i].Add(rnd.Next(2, 12));

                System.Console.WriteLine("Spieler {0}: {2} + {3} -> Summe {1}.", i, listPlayers[i].Sum(), listPlayers[i][0], listPlayers[i][1]);
            }

            for (int i = 0; i < players; i++)
            {
                System.Console.WriteLine("Spieler {0}: {2} + {3} -> Summe {1}.", i, listPlayers[i].Sum(), listPlayers[i][0], listPlayers[i][1]);
                Console.WriteLine("Willst du noch eine Karte ziehen? [j/n] ");
                decision = Convert.ToString(Console.ReadLine());

                if (decision == "j" || decision == "J")
                {
                    listPlayers[i].Add(rnd.Next(2, 12));
                }

                  
                System.Console.WriteLine("Spieler {0} -> Summe {1}.", i, listPlayers[i].Sum());
        
            }

            System.Console.WriteLine("Press any key to exit.");
            System.Console.ReadKey();
        }
    }
}