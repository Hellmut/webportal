#!/bin/bash

while true; do
    fswebcam --no-banner --jpeg 85 -r 640x480 /srv/http/cimage.jpg;
    sleep 4;
done
