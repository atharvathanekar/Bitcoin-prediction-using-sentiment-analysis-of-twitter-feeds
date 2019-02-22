import pandas as pd

btc = pd.read_csv('bitcoinprices.txt')
btc.columns = ["Time","Price"]
sent = pd.read_csv('sentiment6.txt')
sent.columns = ["Time","Sentiment"]
merged = sent.merge(btc, left_index=False, right_index=False, how="inner")
merged.to_csv('merged_data_txt.csv')
