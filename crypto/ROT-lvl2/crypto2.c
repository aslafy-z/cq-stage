/*
** crypto1.c for  in /home/ravane_a/stage
**
** Made by
** Login   <ravane_a@epitech.net>
**
** Started on  Fri Mar 14 19:35:32 2014
** Last update Mon Mar 17 11:29:41 2014 
*/

#include "stdio.h"

int		main(int ac, char **av)
{
  if (ac != 2)
    {
      printf("not the good number of argument\n");
      printf("usage : flag and that's all\n");
      return (0);
    }
  int		i = -1;
  int		j;
  long int	c = (random() % 26);
  while (av[1][++i])
    {
      j = 0;
      while (j++ != c)
	av[1][i] += 1;
      putchar(av[1][i]);
    }
  putchar('\n');
}
