#! /bin/bash

echo Updating...

touch scss/*.scss

sass --no-cache --style compressed --update scss:css