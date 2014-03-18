/*
** crypto1.c for  in /home/ravane_a/stage
**
** Made by
** Login   <ravane_a@epitech.net>
**
** Started on  Fri Mar 14 19:35:32 2014
** Last update Tue Mar 18 13:48:11 2014 
*/

#include <stdlib.h>
#include <stdio.h>
#include <time.h>

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
  long int	c = (time(NULL) % 14 + 1);
  printf("%d\n",c);
  while (av[1][++i])
    {
      j = 0;
      while (j++ != c)
	av[1][i] += 1;
      putchar(av[1][i]);
    }
  putchar('\n');
}
