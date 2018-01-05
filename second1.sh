#!/bin/bash
func(){
echo $(awk '{print $5,"||",$1}' packet10)
}


