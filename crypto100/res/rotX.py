#!/usr/bin/env python3
## cesar.py for  in /home/beaune_a/perso
##
## Made by 
## Login   <beaune_a@epitech.net>
##
## Started on  Mon Mar 17 23:15:01 2014 
##

import sys

def getLetterNeg(char, letter, dec):
    if char.find(letter) >= 0:
        i = char.find(letter)
        if i <= dec:
            i -= 25
            i *= -1
        return char[i + dec]
    return ''


def getLetterPos(char, letter, dec):
    if char.find(letter) >= 0:
        i = char.find(letter) + dec
        if i >= 26:
            i -= 26
        return char[i]
    return ''

if __name__ == '__main__':
    low = 'abcdefghijklmnopqrstuvwxyz'
    up = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    if len(sys.argv) == 3:
        dec = (int)(sys.argv[1])
        end = ''
        for letter in sys.argv[2]:
            if sys.argv[1][0] == '-':
                end += getLetterNeg(low, letter, dec)
                end += getLetterNeg(up, letter, dec)
            else:
                end += getLetterPos(low, letter, dec)
                end += getLetterPos(up, letter, dec)
            if letter == ' ':
                end += letter
        print (end)
    else:
        print("Usage : %s [+/- dec] [string]" % sys.argv[0])
