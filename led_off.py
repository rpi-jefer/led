import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)

ledPin = 17

GPIO.setup(ledPin, GPIO.OUT)
GPIO.output(ledPin, False)
