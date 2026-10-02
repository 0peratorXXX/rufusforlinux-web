#!/bin/bash
YEAR=$(date +%Y)
xgettext --package-version=0.1.0 --from-code=UTF-8 --copyright-holder="RufusForLinux contributors" --package-name="Rufus for Linux Homepage" --msgid-bugs-address=0peratorXXX@users.noreply.github.com -L PHP -c -d index -o ./locale/index.pot index.php 
sed --in-place ./locale/index.pot --expression="s/SOME DESCRIPTIVE TITLE/Rufus for Linux Homepage/"
sed --in-place ./locale/index.pot --expression="1,6s/YEAR/$YEAR/"
sed --in-place ./locale/index.pot --expression="1,6s/PACKAGE/Rufus for Linux/"
sed --in-place ./locale/index.pot --expression="1,6s/FIRST AUTHOR/RufusForLinux contributors/"
sed --in-place ./locale/index.pot --expression="1,6s/EMAIL@ADDRESS/0peratorXXX@users.noreply.github.com/"
sed --in-place ./locale/index.pot --expression="1,20s/CHARSET/UTF-8/"
