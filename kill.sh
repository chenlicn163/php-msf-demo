#!/usr/bin/env sh


msf=$( ps -ef | grep msf-demo-Master |grep -v grep | awk {'print $2'} )
echo "msf process id is: "${msf}
$( kill ${msf} )
echo "kill msf process id:"${msf}