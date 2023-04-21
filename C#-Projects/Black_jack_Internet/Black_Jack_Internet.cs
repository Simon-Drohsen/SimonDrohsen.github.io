using System;
using System.Collections;

namespace ConsoleApp1
{
    class Program
    {
        private static int index = 53; // record the number of cards in the current deck
        private static int cha_win = 0; // the number of times the player won
        private static int com_win = 0; // the number of computer wins
        private static int race = 0; // total number of rounds played
        public static int computer(ArrayList nums) // function of background computer automatic game
        {
            // Draw two cards at random (random number class) and remove this card from the deck
            int sum = 0;
            Random ran = new Random();
            int n = ran.Next(index--);
            int first = (int)nums[n];
            nums.RemoveAt(n);
            int m = ran.Next(index--);
            int second = (int)nums[m];
            nums.RemoveAt(m);
            sum += first + second;
            while (sum <= 15) // When the sum > 15, automatically quit the operation of continuing to draw cards
            {
                int k = ran.Next(index--);
                sum += (int)(nums[k]);
                nums.RemoveAt(k);
            }
            return sum; // Return the total points of the cards finally drawn by the computer
        }

        public static int Play(string name, ArrayList nums) // player draw operation
        {
            int sum = 0;
            Random ran = new Random();
            int n = ran.Next(index--);
            int first = (int)nums[n];
            nums.RemoveAt(n);
            int m = ran.Next(index--);
            int second = (int)nums[m];
            nums.RemoveAt(m);
            sum += first + second;
            Console.Write($"{name} : The first card: {first}\nThe second card: {second}\n");
            if (sum > 21)
            {
                Console.WriteLine($"{name} lost!");
                return 1;
            }
            else
            {
                Console.WriteLine($"The current sum is: {sum}");
                Console.WriteLine($"Does {name} need to draw another card? (Y/N)");
                while (Console.ReadLine() == "Y")
                {
                    int k = ran.Next(index--);
                    sum += (int)nums[k];
                    Console.WriteLine($"The card drawn by {name} is: {nums[k]}, the current sum is: {sum}");
                    nums.Remove(k);
                    Console.WriteLine($"Does {name} need to draw another card? (Y/N)");
                }
                if (sum == 21)
                {
                    Console.WriteLine($"{name} won!");
                    return 0;
                }
                else if (sum > 21)
                {
                    Console.WriteLine($"{name} you lost!");
                    return 1;
                }
            }
            return sum;
        }

        // Judge the final result of the game based on the total points of the computer and the player authority
        public static void check_result(int pla_result, int com_result, string name)
        {
            if (pla_result == 0)
            {
                Console.WriteLine($"The opponent's result is: {com_result}");
                if (com_result == 21)
                {
                    Console.WriteLine("Unfortunately, the opponent also won, and the two are tied");
                }

            }
            else if (pla_result == 1)
            {
                Console.WriteLine((com_result > 21) ? $"The result of the opponent is {com_result}, oh, the opponent also lost, the two are tied" : $"The result of the opponent is {com_result}, or {name} lost");
                com_win += (com_result > 21) ? 0 : 1;
            }
            else
            {
                Console.WriteLine($"The opponent's result is: {com_result}");
                if (com_result > 21)
                {
                    Console.WriteLine($"{name} won");
                    cha_win += 1;
                }
                else
                {
                    Console.WriteLine((pla_result > com_result) ? $"{name} won" : (pla_result < com_result) ? "The opponent won" : "Tie");
                    cha_win += (pla_result > com_result) ? 1 : 0;
                    com_win += (pla_result < com_result) ? 1 : 0;
                }

            }
        }


        static void Main(string[] args)
        {
            Console.WriteLine("Welcome to this game! What is your name?");
            string name = Console.ReadLine();
            ArrayList nums = new ArrayList();
            for (int i = 0; i < 4; i++)
            {
                for (int x = 1; x <= 13; x++)
                {
                    nums.Add(x); // Add 4 decks of playing cards to the collection (21 points only consider the points, not the suits)
                }
            }

            do
            {
                race += 1;
                int pla_result = Play(name, nums);
                int com_result = computer(nums);
                check_result(pla_result, com_result, name);
                Console.WriteLine("Do you want to play again? (Y/N)");
            } while (Console.ReadLine() == "Y");
            Console.WriteLine($"A total of {race} games were compared, and the final score is {name}: computer is {cha_win}:{com_win}");
            if (cha_win == com_win)
            {
                Console.WriteLine("The final two draw");
            }
            else if (cha_win > com_win)
            {
                Console.WriteLine("Finally {} won the final victory", name);
            }
            else
            {
                Console.WriteLine("The final computer wins");
            }

            Console.WriteLine("Bye!");
            Console.ReadKey();
        }

    }

}