/*
** xor.c for  in /home/ravane_a/stage/cq-stage/reseau250
**
** Made by
** Login   <ravane_a@epitech.net>
**
** Started on  Wed Apr 30 10:02:30 2014
** Last update Wed Apr 30 10:04:45 2014 
*/

int		main(int ac, char **av)
{
  int i = 0;
  while (i <= 255){
    int j = -1;
    while (av[1][++j]){
      putchar(av[1][j] ^ i);}
    putchar('\n');
    ++i;}
  return (0);
}
