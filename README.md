# WP Starter Boilerplate

WP Starter è un boilerplate per lo sviluppo di temi Wordpress, utilizza Webpack con laravel.mix per gestire i bundle ed è ottimizzato per l'utilizzo di ACF Pro.

**Cosa contiene:**

- Tailwind 3
- Scss
- Alpine.js
- Gsap
- features per ACF Pro
- Deploy con LFTP

## Installazione e configurazione

### 1. Configura .lando.yml

- Modifica il nome del progetto "es. name: mioprogetto"
- attivare eventuali servizi (mailhog o phpMyAdmin)
- Modifica il proxy url di pma e mailhog "es. pma.mioprogetto.lndo.site"
- Controlla la versione di php

Avviare lando nel terminale dalla cartella del progetto: `lando start`

### 2. Installare Wordpress

Installare Wordpress nella root del progetto, puoi semplicemente usare la WP CLI con lando:

`lando wp core download`

### 3. Avviare il progetto

Nel file `webpack.mix.js` inserire il nome del proprio tema nella variabile **"themeName"**:

`const themeName = 'nomeDelTema'` 

Darà il nome alla cartella del tema in `'wp-content/themes/'`

- Dal terminale naviga dentro la cartella "dev": `cd dev`
- Installa le dipendenze: `npm i`
- Lancia il progetto con Laravel Mix: `npm run start`

### 4. MailHog

Se hai attivato il servizio di MailHog nel file di configurazione di lando:

- Su Wordpress Installa e attiva il plugin **WP Mail SMTP**
- Nei Settings del plugin seleziona **Other SMTP** in Mailer
- Nelle opzioni Other SMTP imposta **SMTP Host**: mailhog **port**: 1025

### 5. Deploy in FTP

<!-- > [!WARNING]
> **Importante: prima di configurare il file** `deploy.sh` **rimuovilo in** `.gitignore` **per non pubblicare dati sensibili nel repository** -->

Il file di deploy utilizza **lftp**, assicurarsi di averlo installato nel proprio sistema operativo (solo su macOS o Ubuntu)

⚠️ **Prima di configurarlo escludi il file deploy.sh nel .gitignore** ⚠️  

- Configura il file deploy.sh con i dati del tuo account FTP
- Assicurati che il file abbia i permessi per eseguirlo `chmod +x deploy.sh`
- Nel terminale nella cartella roots del progetto lancia il comendo `./deploy.sh`






