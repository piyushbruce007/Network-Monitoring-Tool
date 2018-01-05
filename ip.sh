#!/bin/bash
func1(){
grep 'IP' totalpacket>ippackets
echo "$(awk '{print $1,$3,$4,$6,$7,$9,$19}' ippackets>ipresult)"
}
