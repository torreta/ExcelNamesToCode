#!/bin/bash
input="./CSV/DAVID LIbro 08-07-2022.csv"
while IFS= read -r line
do
  echo "$line"
done < "$input"