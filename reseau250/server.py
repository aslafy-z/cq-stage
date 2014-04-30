#!/usr/bin/python
## server.py for  in /home/ravane_a/stage/cq-stage/reseau250
##
## Made by 
## Login   <ravane_a@epitech.net>
##
## Started on  Wed Apr 30 09:21:17 2014 
## Last update Wed Apr 30 09:48:34 2014 
##

import sys
import socket
import string
import pexpect

def end():
    target = pexpect.spawn("./last")
    target = target.expect(pexpect.EOF)
    sock.send(bytes(target.before))
    sock.send(bytes("well play man"))

host = "127.0.0.1"
port = 1337
chain = "guess what is it you may need others day binaries -> \"8<7;$%? :\""
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
sock.connect((host, port))
while 1:
    sock.send(bytes(chain, "utf-8"))
    buff = sock.recv(1024)
    if (buff == "IMTHEFLAG"):
        end()
