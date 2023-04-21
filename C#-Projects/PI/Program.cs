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
        public static decimal NilakanthaGetPI(int n)
        {
            decimal sum = 0;
            decimal temp = 0;
            decimal a = 2, b = 3, c = 4;
            for (int i = 0; i < n; i++)
            {
                temp = 4 / (a * b * c);
                sum += i % 2 == 0 ? temp : -temp;
                a += 2; b += 2; c += 2;
            }
            return 3 + sum;
        }

        public static decimal GregoryLeibnizGetPI(int n)
        {
            decimal sum = 0;
            decimal temp = 0;
            for (int i = 0; i < n; i++)
            {
                temp = 4m / (1 + 2 * i);
                sum += i % 2 == 0 ? temp : -temp;
            }
            return sum;
        }

        static void Main(string[] args)
        {
            const decimal pi = 3.1415926535897932384626433832m;
            Console.WriteLine($"PI = {pi}");

            //Nilakantha Series
            int iterationsN = 1000000000;
            decimal nilakanthaPI = NilakanthaGetPI(iterationsN);
            decimal CalcErrorNilakantha = pi - nilakanthaPI;
            Console.WriteLine($"\nNilakantha Series -> PI = {nilakanthaPI}");
            Console.WriteLine($"Calculation error = {CalcErrorNilakantha}");
            int numDecNilakantha = pi.ToString().Zip(nilakanthaPI.ToString(), (x, y) => x == y).TakeWhile(x => x).Count() - 2;
            Console.WriteLine($"Number of correct decimals = {numDecNilakantha}");
            Console.WriteLine($"Number of iterations = {iterationsN}");

            //Gregory-Leibniz Series
            int iterationsGL = 1000000000;
            decimal GregoryLeibnizPI = GregoryLeibnizGetPI(iterationsGL);
            decimal CalcErrorGregoryLeibniz = pi - GregoryLeibnizPI;
            Console.WriteLine($"\nGregory-Leibniz Series -> PI = {GregoryLeibnizPI}");
            Console.WriteLine($"Calculation error = {CalcErrorGregoryLeibniz}");
            int numDecGregoryLeibniz = pi.ToString().Zip(GregoryLeibnizPI.ToString(), (x, y) => x == y).TakeWhile(x => x).Count() - 2;
            Console.WriteLine($"Number of correct decimals = {numDecGregoryLeibniz}");
            Console.WriteLine($"Number of iterations = {iterationsGL}");

            Console.ReadKey();
        }
    }
}