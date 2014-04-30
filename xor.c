/*
** xor.c for  in /home/ravane_a/stage/cq-stage
**
** Made by
** Login   <ravane_a@epitech.net>
**
** Started on  Wed Apr 30 09:25:07 2014
** Last update Wed Apr 30 09:26:13 2014 
*/

int		main(int ac, char **av)
{
  int i = -1;
  while (av[1][++i])
    putchar(av[1][i] ^ 'j');
  putchar('\n');
  return (0);
}
