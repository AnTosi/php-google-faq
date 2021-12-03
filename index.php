<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->


<?php 
    $faqs = [
        "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" =>

        // fine primo testo

        "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br/>
        <br/>
        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br/>
        <br/>
        Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.<br/>
        <br/>
        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br/>
        <br/>
        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",

        // fine secondo testo

        "Why is my account associated with a country?" => 

        "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:<br/>
        <br/>
        The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:<br/>
        Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland
        Google LLC, based in the United States, for the rest of the world
        The version of the terms that govern our relationship, which can vary depending on local laws <br/>
        <br/>
        Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.",

        // fine terzo testo

        "Determining the country associated with your account" =>

        "When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.<br/>
        <br/>
        Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.<br/>
        <br/>
        If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think your country association is wrong.",

        //fine quarto testo

        "How can I remove information about myself from Google's search results?" => 

        "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information.",

        //fine quinto testo

        "Are my search queries sent to websites when I click on Google Search results?" =>

        "In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.",

        //fine sesto testo
        ];
    
    ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <img src="./assets/img/logo.png" alt="">
            <h4>Privacy e termini</h4>
        </div>
        <nav>
            <ul>
                <li>Overview</li>
                <li>Privacy Policy</li>
                <li>Terms of Service</li>
                <li>Technologies</li>
                <li class="active">FAQ</li>
            </ul>
        </nav>
    </header>

    <div class="main"> 
        <?php foreach ($faqs as $faq => $answer) { ?>
            <h2>  <?php echo $faq ?></h2>
            <p><?php echo $answer ?></p>
        <?php } ?>
    </div>
</body>
</html>