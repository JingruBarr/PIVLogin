openssl asn1parse -strparse $1 -in $2 | grep -A 2 "Microsoft Universal Principal Name" | cut -f4 -d":" |tail -1
