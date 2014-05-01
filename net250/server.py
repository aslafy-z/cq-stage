#!/usr/bin/env python2

from socket import *
import thread
import sys

FLAG = "IMTHEFLAG"
HOST = '0.0.0.0'
PORT = int(sys.argv[1]) if (len(sys.argv) > 1) else 1337

def handler(client, addr):
    client.send("guess what is it you may need others day binaries -> \"8<7;$%? :\"\n")
    while 1:
        data = client.recv(1024)
        if not data: break
        if FLAG == data.rstrip():
            client.send("You win ! flag is \"C00k1e4Y0u\"")
            print addr[0] + " - flagged - " + repr(data.rstrip())
        else:
            client.send("You loose ! Try again ...\n")
            print addr[0] + " - loosed - " + repr(data.rstrip())
        if "" == data.rstrip(): break

    client.close()
    print addr[0], "- connection stoped"

if __name__=='__main__':
    ADDR = (HOST, PORT)
    sock = socket(AF_INET, SOCK_STREAM)
    sock.setsockopt(SOL_SOCKET, SO_REUSEADDR, 1)
    sock.bind(ADDR)
    sock.listen(5)
    print "listening on port", PORT
    while 1:
        client, addr = sock.accept()
        print addr[0] + " - connection started"
        thread.start_new_thread(handler, (client, addr))
