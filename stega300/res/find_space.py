#!/usr/bin/python
## truc.py for  in /home/ravane_a
##
## Made by 
## Login   <ravane_a@epitech.net>
##
## Started on  Mon Feb 24 22:29:31 2014 
## Last update Sat Mar 22 11:24:44 2014 
##

x = []
truc = open("level2")
for line in truc:
    if line[len(line)-2] == ' ':
        x.append(1)
        print (1)
    else:
        x.append(0)
        print (0)
