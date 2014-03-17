/*
** crypto1.c for  in /home/ravane_a/stage
**
** Made by
** Login   <ravane_a@epitech.net>
**
** Started on  Fri Mar 14 19:35:32 2014
** Last update Mon Mar 17 11:23:24 2014 
*/

#include "stdio.h"

int		main(int ac, char **av)
{
  if (ac != 3)
    {
      printf("not the good number of argument\n");
      printf("usage : décalage then the flag\n");
      return (0);
    }
  int		i = -1;
  int		j;
  int		c = atoi(av[1]);
  while (av[2][++i])
    {
      j = 0;
      while (j++ != c)
	av[2][i] += 1;
      putchar(av[2][i]);
    }
  putchar('\n');
}
