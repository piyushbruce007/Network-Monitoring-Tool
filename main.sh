#!/bin/bash
sudo tcpdump -n>/var/www/html/packet3
aip=$(grep 'IP' packet1>/var/www/html/ippackets3)
echo $aip
ip()
{
aip=$(grep 'IP' packet1 |awk '{print}'>/var/www/html/ippackets1)
echo "$aip"
}
arp()
{
arp=$(grep 'ARP' packet1 |awk '{print}'>/var/www/html/arppackets1)
echo "$arp"
}
desip()
{
ip=$(awk '{print $5,"k",$1}' ippackets>ipdesip1)
echo "$ip"
}
srcip()
{
sip=$(awk '{print $5,"f",$3}' ippackets>ipscrip1)
echo $sip
}
echo "yo"





