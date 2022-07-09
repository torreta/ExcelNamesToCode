#!/bin/bash
#Input location
input="./CSV/DAVID LIbro 08-07-2022.csv"
 
#Output location
output="./RESULT/DAVID LIbro 08-07-2022.csv"

# arrays con los codigos a intercambiar
lectura=array
codes=array

# number
n=0

# leer linea por linea hasta fin de archivo
while IFS= read -r line
# while IFS= read -r -a lectura
do
    echo "Linea $n , osea: $line";
    # IFS=';' lectura=( $line ); done
    # (IFS=';'; for word in $string; do echo "$word"; done)
    # (IFS=';'; for word in $line; do lectura=("$word"); done)
    # lectura[$n]=$line
    # readarray -td '' a < <(awk '{ gsub(/, /,"\0"); print; }' <<<"$line, "); unset 'a[-1]';
    # declare -p a;

    n=$((n+1))
done < "$input"


# all lines
# echo "${lectura[@]}"
