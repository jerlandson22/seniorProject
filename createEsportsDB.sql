create database esportsDB;

create table ssbu(
	matchID int not NULL PRIMARY KEY,
	mountPlayer varchar(50),
	mountCharacter varchar(50),
	oPlayer varchar(50),
	oCharacter varchar(5),
	hasWon boolean,
	stock smallint(100),
	streamLink varchar(150));

create table rlPlayers(
	playerID int not NULL PRIMARY KEY,
    mountPlayer varchar(50),
	goals smallint(100),
	assists smallint(100),
	saves smallint(100),
	shots smallint(100),
	hasWon smallint(100),
	streamLink varchar(150));

create table lolPlayers(
	lolPlayerID int not NULL PRIMARY KEY,
	mountPlayer varchar(50),
	mountChamp varchar(50),
	kills smallint(1000),
	deaths smallint(1000),
	assists smallint(1000),
	minionScore smallint(10000),
	totalDamage mediumint(1000000),
	hasWon boolean,
	firstBlood boolean,
	firstDragon boolean,
    gameTime time,
	streamLink varchar(150));

create table owPlayers(
	owPlayerID int not NULL PRIMARY KEY,
	mountPlayer varchar(50),
	mountChar varchar(50),
	kills smallint(1000),
	deaths smallint(1000),
	assists smallint(1000),
	totalDamage mediumint(1000000),
	hasWon boolean,
	streamLink varchar(150));

create table lolTeam(
	teamID int not NULL PRIMARY KEY,
    foreign key lolPlayerID (mountPlayer) references lolPlayers);
    
create table owTeam(
	teamID int not NULL PRIMARY KEY,
    foreign key owPlayerID (mountPlayer) references owPlayers);