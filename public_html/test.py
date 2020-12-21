import os

with open('dns.txt', 'r', encoding='utf-8') as f:
   text =  f.readlines()

f = open('new_dns.txt', 'w', encoding='utf-8')

for i in text:
    new_text = "0.0.0.0 " + i
    f.write(new_text)

f.close()