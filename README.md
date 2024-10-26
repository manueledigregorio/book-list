# Book-list

## Descrizione
Questo progetto è un'applicazione Laravel - Filament per la gestione di un elenco di libri. Permette agli utenti di aggiungere, modificare ed eliminare libri e di assegnarli a più categorie tramite una relazione molti-a-molti.

## Funzionalità
- Aggiunta, modifica ed eliminazione di libri.
- Creazione e gestione di categorie.
- Assegnazione di più categorie a ciascun libro.
- Interfaccia amministrativa costruita con Filament.

## Prerequisiti
Assicurati di avere installato:
- PHP >= 7.4
- Composer
- Laravel >= 8.x
- Un server MySQL o SQLite

## Installazione

1. **Installa le dipendenze**
   ```bash
   composer install
   ```

2. **Crea il file `.env`**
   Copia il file `.env.example` in un nuovo file `.env` e configura le variabili d'ambiente.
   ```bash
   cp .env.example .env
   ```

3. **Genera la chiave dell'app**
   ```bash
   php artisan key:generate
   ```

4. **Esegui le migrazioni**
   ```bash
   php artisan migrate
   ```

5. **Popola il database (opzionale)**
   Se hai dei seeders, puoi popolare il database eseguendo:
   ```bash
   php artisan db:seed
   ```

6. **Avvia il server di sviluppo**
   ```bash
   php artisan serve
   ```
   Accedi a `http://localhost:8000` nel tuo browser.

## Uso
Dopo aver avviato il server, puoi navigare nell'interfaccia dell'applicazione. Puoi gestire i libri e le categorie direttamente dal pannello di amministrazione.

### Interfaccia Amministrativa
Per accedere all'interfaccia amministrativa, vai su `http://localhost:8000/admin`. Qui puoi aggiungere, modificare ed eliminare libri e categorie.

## Contributi
Contributi sono benvenuti! Segui questi passaggi per contribuire al progetto:

1. **Fai un fork del progetto**
2. **Crea il tuo branch**
   ```bash
   git checkout -b feature/nome-feature
   ```
3. **Fai le tue modifiche e committa**
   ```bash
   git commit -m "Aggiungi una nuova funzionalità"
   ```
4. **Fai il push sul tuo branch**
   ```bash
   git push origin feature/nome-feature
   ```
5. **Crea una pull request**

## Licenza
Questo progetto è sotto la licenza MIT - vedi il file [LICENSE](LICENSE) per dettagli.

## Contatti
Per domande o suggerimenti, contatta [tuo-email@example.com].
