if [ -d != "out" ]; then
  mkdir out
fi


groovy PhpFilesFromTemplate.groovy
mv -f out/*.* ../
