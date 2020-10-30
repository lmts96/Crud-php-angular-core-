para subir o servidor de php você deve acessar a pasta via CMD usando: 
cd C://caminhodapasta/backend

após chegar dentro de backend rodar o comando

php -S 127.0.0.1:4200

(é importante subir o php nessa porta pois é a porta que está configurada 
para conexão no front end)

após subir o php, abrir outro cmd e fazer o mesmo processo, só que dessa vez usar o caminho:

cd C://caminhodapasta/frontend

após chegar no destino, rodar o comando:
ng serve -port 8080

(caso não funcione, verificar se a maquina possui o node instalado)
obs: a mesma coisa pode acontecer no php

(é importante verificar também se o node está nas variaveis de ambiente)