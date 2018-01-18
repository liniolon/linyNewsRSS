
import sqlite3 as db
import feedparser


class newsRSS:
    def __init__(self, url):
        self.url = url

    def readRSS(self):
        con = db.connect('news.db')
        cursor = con.cursor()
        for l in self.url:
            feed = feedparser.parse(l)


            try:
                feed_title = feed['feed']['title']
            except:
                pass
            feed_entries = feed.entries

            for e in feed_entries:
                news_title = e.title
                news_link = e.link
                print(feed_title)
                try:
                    cursor.execute("INSERT INTO news (title, link) VALUES ('{}', '{}')".format(news_title, news_link))
                    con.commit()
                except:
                    pass

        con.close()

list_of_rss = ['http://www.javanonline.ir/fa/rss/allnews', 'http://www.yjc.ir/fa/rss/allnews', 'http://www.irna.ir/fa/rss.aspx?kind=-1',
               'http://www.farsnews.com/RSS', 'https://www.isna.ir/rss?pl=1', 'https://www.isna.ir/rss?pl=2',
               'http://www.varzesh3.com/rss/all', 'http://www.mizanonline.ir/fa/rss/allnews',
               'http://www.tabnak.ir/fa/rss/allnews', 'http://www.ibna.ir/rssb5.-er48r6--4qhfle2m.puirug.r.xml',
               'http://www.ilna.ir/feeds/' ,'https://www.tasnimnews.com/fa/rss/feed/0/7/0/%D8%A2%D8%AE%D8%B1%DB%8C%D9%86-%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%B1%D9%88%D8%B2',
               'http://shabestan.ir/RSS', 'http://www.shana.ir/Components/NewsAgency/View/Rss.aspx?imagesize=120&topcount=1000&lang=fa&id=0'
               , 'http://www.mojnews.com/feeds/', 'https://www.mehrnews.com/rss/pl/224', 'https://www.mehrnews.com/rss/pl/9',
               'http://fa.abna24.com/rss', 'http://www.khabaronline.ir/RSS', 'http://www.khabaronline.ir/RSS/Service/provinces', 'https://www.borna.news/feeds/',
               'http://www.alef.ir/rss/latest/all.xml', 'http://www.entekhab.ir/fa/rss/allnews', 'http://www.jahannews.com/rssb5.-er48r6--4qhfle2m.puirug.r.xml',
               'http://www.asriran.com/fa/rss/allnews', 'http://fararu.com/fa/rss/allnews', 'https://www.mashreghnews.ir/rss?pl=17',
             'http://www.rajanews.com/rss/all', ]


rss = newsRSS(list_of_rss)
rss.readRSS()
print('ok')