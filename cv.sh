 #!/bin/bash
 F1=$(find /root/wordpress)
F2=$(find . | grep php$ | grep -v conversao.php)

echo "\<?php" > conversao.php
for f in $F2
do
    O=$(echo $f | sed "s/\.\//\//gi")
    fi=$PWD$O
    fo=$PWD/wppg$O
    mkdir -p $PWD/wppg
    R=$(fgrep "\$wpdb->" -A 2 $f)
    if [ -n "$R" ]; then
        echo "Arquivo origem: $PWD$O"
        echo "#Arquivo $fi"  >> conversao.php
        #fgrep "global \$wpdb" $f | sed "s/global \$wpdb/global \$wpdb,\$wpdbpg/gi"
        echo "\$aq = file_get_contents('$fi');" >> conversao.php
        echo "\$aq = convertSQL2pg(\$aq);" >> conversao.php
        #fgrep "\$wpdb->" $f | sed "s/\$wpdb->/\$wpdbpg->/gi"
        #fgrep "\$wpdb->" -A 3 $f | sed 's/^"/__QT__/gi' | xargs -iitr -n 1 echo "\$rp = str_replace('itr','itr',\$rp);"
        #| sed "s/\\$/\\\\$/gi" | sed "s/[\][$]rp/\$rp/gi"
        echo "/*" >> conversao.php
        fgrep "\$wpdb->" -A 2 $f >> conversao.php
        echo "*/">> conversao.php
        echo "file_put_contents('$fo',\$aq);" >> conversao.php
    fi
done