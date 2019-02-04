import re, time, base64, sys, os, urllib, uuid
import requests, json
from requests_oauthlib import OAuth1


ConsumerKey    = 'OwnAccount'
ConsumerSecret = 'OwnAccount'

TokenKey       = 'd9bB4vgMC3FPVNcrjPgGeGxy-GRRUE'#MASTER
TokenSecret    = '2vpW3bgWSCCR9UUZVf2DAZnCVWKGS+XVFkRGAAMh' #Master
tenant         = '598ce78a-0cdf-46ee-8308-1198d982d91d' #passive branch
tenant         = '0c16d214-45b1-41a1-ba40-7b39e9d4f923' #master


fileContent = ' '
headers={}
headers['Accept'] = 'text/xml'
headers['Accept'] = 'applications/json'
headers['X-Tradeshift-TenantId'] = tenant
headers['Content-Type'] ='text/xml'

def get(url):
   auth = OAuth1(ConsumerKey, ConsumerSecret, TokenKey, TokenSecret)
   response = requests.get(url, headers=headers, auth=auth)
   return response.content
   #return response.status_code        

def delete(url):
   auth = OAuth1(ConsumerKey, ConsumerSecret, TokenKey, TokenSecret)
   response = requests.delete(url, headers=headers, auth=auth)
   return response.status_code

def post(url):
   auth = OAuth1(ConsumerKey, ConsumerSecret, TokenKey, TokenSecret)
   response = requests.post(url, headers=headers, auth=auth, data=fileContent)
   #return response.content
   print ("response.status_code, response.content")
   return response.content
   
def put(url):
   auth = OAuth1(ConsumerKey, ConsumerSecret, TokenKey, TokenSecret)
   response = requests.put(url, headers=headers, auth=auth, data=fileContent)
   print("response.status_code")
   return response.content
   


url ='https://api.tradeshift.com/tradeshift/rest/external/account/info'
print (get(url))

#'https://api.tradeshift.com/tradeshift/rest/external/account/branches/c6210ea0-c7a5-4163-b6a8-e256015714ae'