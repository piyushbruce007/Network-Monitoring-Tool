#!/bin/bash
printf "$(grep 'IP' packet | cut -d$' ' -f1,3)";

