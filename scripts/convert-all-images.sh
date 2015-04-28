#!/bin/bash
IMAGES_ORIGINAL=../assets/images/*.*
IMAGES_OPTIMIZED=../assets/images_optimized/*.*

# copy original images
for f in $IMAGES_ORIGINAL
do
	cp -f $f ../assets/images_optimized
	#convert -quality 85% $f 
done
# compress all images
for f in $IMAGES_OPTIMIZED
do
	echo "converting $f"
	convert -quality 85% $f $f
done