/*
** rot.c for  in /home/ravane_a/stage/cq-stage
**
** Made by
** Login   <ravane_a@epitech.net>
**
** Started on  Wed Apr 30 09:22:53 2014
** Last update Wed Apr 30 09:24:43 2014 
*/

int		main(int ac, char **av)
{
  int i = -1;
  while (av[1][++i]){
    putchar(av[1][i] + 9);}
  putchar('\n');
  return (0);
}
