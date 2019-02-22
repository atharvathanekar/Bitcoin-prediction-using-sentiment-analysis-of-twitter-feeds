
# coding: utf-8

# In[1]:


import requests
import time
import datetime

path = 'live_bitcoin_txt.txt'
f = open(path,"a", encoding="utf-8")
keys = ["price_usd"]
vals = [0]*len(keys)

while True:
    data = requests.get("https://api.coinmarketcap.com/v1/ticker/bitcoin/").json()[0] 
	
    for d in data.keys():
        if d in keys:
            indx = keys.index(d)
            vals[indx] = data[d]
    for val in vals:
        f.write(val+",")
    f.write(datetime.datetime.now().strftime("%y%m%d%H%M"))  
    f.write("\n")
    f.flush()
    time.sleep(60)
