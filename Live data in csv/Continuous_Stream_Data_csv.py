
# coding: utf-8

# In[1]:


import requests
import time
import datetime
import math

path = 'F:\\bitcoin1\\Live data in csv\\live_bitcoin_csv.csv'
f = open(path,"a", encoding="utf-8")
keys = ["price_usd","24h_volume_usd","percent_change_1h","percent_change_24h","percent_change_7d"]
vals = [0]*len(keys)

now = datetime.datetime.now()
present_quarter = int(math.ceil(now.month/3))

while True:
    f.write("Q"+str(present_quarter))
    f.write(","+datetime.datetime.now().strftime("%A"))
    f.write(","+datetime.datetime.now().strftime("%d-%m-%y %H:%M %p"))
    data = requests.get("https://api.coinmarketcap.com/v1/ticker/bitcoin/").json()[0] 
	
    for d in data.keys():
        if d in keys:
            indx = keys.index(d)
            vals[indx] = data[d]
    for val in vals:
        f.write(","+val)
      
    f.write("\n")
    f.flush()
    time.sleep(60)

