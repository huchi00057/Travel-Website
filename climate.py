import urllib.request as req
url="https://weather.yam.com/%E6%96%B0%E6%B8%AF%E9%84%89/%E5%98%89%E7%BE%A9%E7%B8%A3"       #從這個網頁去找你們那組的地點，然後把網址貼上來
request=req.Request(url,headers={
    "User-Agent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36"
})
with req.urlopen(request) as response:
    data=response.read().decode("utf-8")
    
import bs4

root=bs4.BeautifulSoup(data,"html.parser")

climate = root.find_all('div',attrs={'class':'detail'} )

fp1 = open("climate.txt", "w+",encoding="utf8")
# 寫入到檔案 climate.txt
for i in climate:
    if i.text != None:
        fp1.write(i.text)
        fp1.write('\n')
# 關閉檔案
fp1.close()


