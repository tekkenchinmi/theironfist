import time
import telepot

def handle(msg):
    content_type, chat_type, chat_id = telepot.glance(msg)
    print(content_type, chat_type, chat_id)
    if content_type=='text':
        if msg['text']=='/start':
            bot.sendMessage(chat_id,"Welcome to MyBoot")
        if msg['text']=='hai':
            bot.sendMessage(chat_id,"Hello "+msg['chat']['first_name'])
        if msg['text']=='/Azure':
            bot.sendMessage(chat_id,"Microsoft Azure is an ever-expanding set of cloud services to help your organization meet your business challenges. It�s the freedom to build, manage, and deploy applications on a massive, global network using your favorite tools and frameworks."+msg['chat']['first_name'])



# Token of bot account
TOKEN = "343803324:AAGwdc5uWJz08ki1rO2lHRBRrr-X7BhYrWk"
bot = telepot.Bot(TOKEN)
bot.message_loop(handle)
print ('Listening ...')

# Keep bot running
while 1:
    time.sleep(10)
