import time
import math
import grovepi
import mysql.connector

config = {
  'host': "xx.xx.xx.xx",
  'user': "xxx",
  'passwd': "xxx",
  'database': "xxx",
  'raise_on_warnings': True
}

print("Lecture des mesures:")

grovepi.dust_sensor_en()

old_val = [0, 0.0, 0.0]

while True:

	new_val = grovepi.dust_sensor_read()
	if old_val[0] != new_val[0]:
		time.sleep(10)
		print("LPO time = {:3d} | LPO% = {:5.2f} | pcs/0.01cf = {:6.1f}".format(*new_val))
		LPOT = new_val[0]
		LPOP = round(new_val[1],2)
		PCS = round(new_val[2],2)
		print(LPOT)
		print(LPOP)
		print(PCS)
		mydb = mysql.connector.connect(**config)
		mycursor = mydb.cursor()
		
		sql = "INSERT INTO dust (lpo_time, lpo_percentage, pcs) VALUES (%s, %s, %s)"
		val = (LPOT, LPOP, PCS)
		mycursor.execute(sql, val)

		mydb.commit()
		
		mydb.close()
		old_val = new_val

grovepi.dust_sensor_dis()
