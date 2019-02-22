
# coding: utf-8

# In[1]:


import requests
import time
import datetime

path = 'F:\\bitcoin1\\Live data in txt\\bitcoinprices.txt'
f = open(path,"a", encoding="utf-8")
keys = ["price_usd"]
vals = [0]*len(keys)

while True:
    f.write(datetime.datetime.now().strftime("%Y/%m/%d %H:%M"))
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

