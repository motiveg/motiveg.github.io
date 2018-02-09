import tweepy


consumer_key = 'dEdH4uk95GF5tbl5ilB6xeDiJ'
consumer_key_secret = 'gej7zzOVdlOovnWHmnBGmNNA1EczYB5BPOjuesC4G4dsLNMaNv'
access_token = '924529874118746112-386PwJsVyseOErUQmRErXTkwrEk2WpP'
access_token_secret = '2OROouDgC7yK2wp9OKlh1rSoP02W87JVbDBP0a9A6xAn0'

class TweetListener(tweepy.StreamListener):
    def on_status(self, status):
        print('Tweet text: ' + status.text)
        return True

    def on_error(self, status_code):
        print('Got an error with status code:' + str(status_code))
        return True

    def on_timeout(self):
        print('TImeout...')
        return True

if __name__ == '__main__':
    listener = TweetListener()
    auth = tweepy.OAuthHandler(consumer_key, consumer_key_secret)
    auth.set_access_token(access_token, access_token_secret)

    stream = tweepy.Stream(auth, listener)
    stream.filter(follow=[], track=['#SFGiants','#Athletics','#'])