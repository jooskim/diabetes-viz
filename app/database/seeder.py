import re, csv, json, urllib2
import sqlite3 as sqlite

BGList = []
BasalList = []
BolusList = []

bg = 0
basal = 0
bolus = 1

if(bg > 0):	
	try:
		with open('bg_seeder.csv', 'rU') as f_bg:
			rawdata = csv.reader(f_bg)
			for line in rawdata:
				BGList.append(line)
	except IOError:
		print "Failed to read the file"
	else:
		f_bg.close()

	with sqlite.connect(r'production.sqlite') as con:
		cur = con.cursor()
		cur.executemany("INSERT INTO BG (createdDate, createdTime, level) VALUES(?, ?, ?)", BGList)
		con.commit()

if(basal > 0):
	try:
		with open('basal_seeder.csv', 'rU') as f_basal:
			rawdata = csv.reader(f_basal)
			for line in rawdata:
				BasalList.append(line)
	except IOError:
		print "Failed to read the file"
	else:
		f_basal.close()

	with sqlite.connect(r'production.sqlite') as con:
		cur = con.cursor()
		cur.executemany("INSERT INTO insulin (type, createdDate, createdTime, hourlyBasalDose, note) VALUES('basal', ?, ?, ?, ?)", BasalList)
		con.commit()

if(bolus > 0):
	try:
		with open('bolus_seeder.csv', 'rU') as f_bolus:
			rawdata = csv.reader(f_bolus)
			for line in rawdata:
				BolusList.append(line)
	except IOError:
		print "Failed to read the file"
	else:
		f_bolus.close()

	with sqlite.connect(r'production.sqlite') as con:
		cur = con.cursor()
		cur.executemany("INSERT INTO insulin (type, createdDate, createdTime, carbDose, correctionDose, note) VALUES('bolus', ?, ?, ?, ?, ?)", BolusList)
		con.commit()