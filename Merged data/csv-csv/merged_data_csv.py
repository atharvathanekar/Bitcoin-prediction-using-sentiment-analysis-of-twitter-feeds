import pandas as pd

btc = pd.read_csv('F:\\bitcoin1\\Live data in csv\\live_bitcoin_csv.csv')
btc.columns = ["Quater","Day","Time","Price","24h_volume_usd","percent_change_1h","percent_change_24h","percent_change_7d"]
sent = pd.read_csv('F:\\bitcoin1\\Live data in csv\\live_tweet_csv.csv')
sent.columns = ["Quater","Day","Time","Sentiment"]
merged = sent.merge(btc, left_index=False, right_index=False, how="inner")
merged.to_csv('F:\\bitcoin1\\Merged data\\csv-csv\\merged_data_csv.csv')
