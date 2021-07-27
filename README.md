# WP-QR-code-redirect
Plugin Wordpress che permette di redirezionare il traffico proveniente da un link (solitamente QR code) verso la lingua adeguata 
## Intro
Questo plugin nasce dell'esigenza di un cliente di utilizzare dei QR code su cartellonistica esterna e stampati. I visitatori di tale località parlano diverse lingue.
Per evitare la creazione di una quantità enorme di QR code per ogni idioma, si è pensato di creare un automtismo per smistare il traffico verso la lingua corretta, mantenedo al contempo un solo QR code per tutti.

Su WordPress i plugin multilingua (Es. WPML o Polylang) permettono già di smistare il traffico secondo la lingua, ma solo una prima volta. Se il visitatore scansiona altri QR code, il plugin lo interpreta come un cambio di lingua e l'utente atterrerà su una pagina in un idoma diverso dal suo.

## Il plugin
Questo plugin essenzialmente prende in carico dal backend un file CSV, dove sono elencate le associazioni tra link in entrata, lingua e landing corrisondente.

Formato file .csv:  link in ingresso ; sigla della lingua ISO 639-2 Alpha 2 ; url in uscita
Esempio:            /orari-apertura/ ; de ; https://miosito.com/de/oeffnungszeiten

Per attivare il plugin nel frontend è necessario che il link in ingresso porti con se l'attributo ?qr-code=true, questo per evitare che ad ogni visita venga caricato il server di lavoro inutile.

Esempio:            https://miosito.com/orari-apertura?qr-code=true

## To Do
Per ora il plugin è molto basico e funziona solamente con le lingua IT,FR,DE e EN. I prossimi passi che mi piacerebbe intraprendere saranno:
- Rendere configurabile il supporto alle lingue
- Rendere il plugin traducibile
