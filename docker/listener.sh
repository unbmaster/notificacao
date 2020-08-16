#!/bin/bash

docker exec -it $(docker container ls | grep notificacao-prd | cut -c 1-12) php var/www/src/app/UI/Listener/InscricaoRealizada.php