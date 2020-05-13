import grovepi
import math
import time
import mysql.connector

config = {
  'host': "xx.xx.xx.xx",
  'user': "xxx",
  'passwd': "xxx",
  'database': "xxx",
  'raise_on_warnings': True
}

sensor = 4  # Selection du port Grove (ici 4)

blue = 0    # DHT Bleu
white = 1   # DHT Blanc

while True:
    try:
        [temp,humidity] = grovepi.dht(sensor,blue)  
        if math.isnan(temp) == False and math.isnan(humidity) == False:
            if temp > 0 and humidity > 0:
                time.sleep(10)
                print("temp = %.02f C humidity =%.02f%%"%(temp, humidity))
                mydb = mysql.connector.connect(**config)
                mycursor = mydb.cursor()
                sql = "INSERT INTO humidity_temp (temp, humidity) VALUES (%s, %s)"
                val = (temp, humidity)
                mycursor.execute(sql, val)

                mydb.commit()
                
                mydb.close()


    except IOError:
        print ("Erreur")
