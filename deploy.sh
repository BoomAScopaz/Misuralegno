#!/bin/bash
#command from console: ./deploy.sh

#⚠️ rimuovere questo file da gitignore prima della configurazione ⚠️

# Configurazione
HOST='ftp.yourhost'
USER='user'
PASS='password'
LOCAL_DIR='./wp-content/themes/misuralegno'
REMOTE_DIR='/htdocs/misuralegno/wp-content/themes/misuralegno'

# Comando lftp
lftp -e "
set ssl:verify-certificate no
open $HOST
user $USER $PASS
mirror -R --only-newer --parallel=20 --verbose $LOCAL_DIR $REMOTE_DIR
bye
"

# Verifica se lftp è stato eseguito correttamente
if [ $? -eq 0 ]; then
  echo "✅ Deploy completato con successo!"
else
  echo "❌ Si è verificato un errore durante il deploy."
  exit 1
fi