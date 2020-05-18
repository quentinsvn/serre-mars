# Capteurs

Programmes du capteur de [poussière](https://www.seeedstudio.com/Grove-Dust-Sensor-PPD42NS.html) et du [DHT11](https://www.seeedstudio.com/Grove-Temperature-Humidity-Sensor-DHT11.html) compatible GrovePi+ pour Raspberry Pi fait en Python.

## Installation des modules Python

GrovePi

```pip
pip install grovepi
```
MySQL Connector

```pip
pip install mysql-connector-python
```

**PS: Ne pas oublier de modifier les informations de la base de données dans les scripts**

## Lancer les scripts

Capteur de poussière
```python
python grove_dust_sensor.py
```
DHT11
```python
python grove_dht_sensor.py
```

© Quentin Savéan
