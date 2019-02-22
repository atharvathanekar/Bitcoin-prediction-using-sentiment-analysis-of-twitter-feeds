# import tweepy library for twitter api access and textblob libary for sentiment analysis
import csv
import tweepy
import numpy as np
from textblob import TextBlob
import datetime
import time
import math

def main():

    # set twitter api credentials
    consumer_key= 'rRGr40YURcl7yynew04AhGLcY'
    consumer_secret= 'RJdVUgnoywDLH5h8znznUMfpiEQsyaoqpdsnmV5HdI947Six39'
    access_token='2943500323-znqQ3vL49mgSLDfvwAGX4nE2DXpe9IHGn79VNr6'
    access_token_secret='b6ttC0ccd9NXsS5hn307lij5i5oXglYhfVQingO4gn71R'

    # set path of csv file to save sentiment stats
    path = 'F:\\bitcoin1\\Live data in csv\\live_tweet_csv.csv'
    f = open(path,"a", encoding="utf-8")
    f1 = open('tweet_data','a', encoding="utf-8")
	
    # access twitter api via tweepy methods
    auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_token, access_token_secret)
    twitter_api = tweepy.API(auth)
	
    now = datetime.datetime.now()
    present_quarter = int(math.ceil(now.month/3))
	

	
    while True:

        # fetch tweets by keywords
        tweets = twitter_api.search(q=['bitcoin, price, crypto'], count=100)

        # get polarity
        polarity = get_polarity(tweets,f1)
        sentiment = np.mean(polarity)

        # save sentiment data to csv file
        f.write("Q"+str(present_quarter))
        f.write(","+datetime.datetime.now().strftime("%A"))
        f.write(","+datetime.datetime.now().strftime("%d-%m-%y %H:%M %p"))
        f.write(","+str(sentiment))
        f.write("\n")
        f.flush()
        time.sleep(60)
    

def get_polarity(tweets,f):
    # run polarity analysis on tweets

    tweet_polarity = []

    for tweet in tweets:
        f.write(tweet.text+'\n')
        analysis = TextBlob(tweet.text)
        tweet_polarity.append(analysis.sentiment.polarity)

    return tweet_polarity

main()
