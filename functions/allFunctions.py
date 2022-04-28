import mysql.connector
import tkinter as tk

# SQL FUNCTIONS

def dbconnect():
    try:
        mysql.connector.connect("localhost", "root", "password")
    except mysql.connector.errors as err:
        return error(err)

def error(err):
    return ''

def select(con, items, db):
    if db == "Super Smash Bros. Ultimate":
        return con.execute("""SELECT """ + items + """ IN ssbuPlayers"""), con.close()
    elif db == "Rocket League":
        return con.execute("""SELECT """ + items + """ IN rlPlayers"""), con.close()
    elif db == "League of Legends":
        return con.execute("""SELECT """ + items + """ IN lolPlayers"""), con.close()
    else:
        return con.execute("""SELECT """ + items + """ IN owPlayers"""), con.close()

# GAME FUNCTIONS

def winRate():
    return """ """

def firstDrag():
    return """ """

def stockdif():
    return """ """

def mAppear():
    return """ """

def average():
    return """ """

# DISPLAY FUNCTIONS

def results():
    return "Test Display"
