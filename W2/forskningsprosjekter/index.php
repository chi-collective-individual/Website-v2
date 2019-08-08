<!DOCTYPE html>
<html lang="no-nb">
    
                
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../stylesheets/styles.css">
        <link rel="stylesheet" href=""> 
        <link href="https://fonts.googleapis.com/css?family=Raleway&" rel="stylesheet"><!--stylesheet for font family here-->
        <script src="scripts/slideshow.js" defer></script>

        <title>Students as Partners</title>
    </head>
    <body>
        <!--container for the header that is in all pages-->
        <?php include('../menu.php'); ?>


        <div class="indent">
            <img src="../images/Lab070819.jpg">

            <!--Information about SaP-->
            <h1>Forskningsprosjekter</h1>
            <p class="center-paragraph">Hvis du ønsker å prøve deg som forsker er dette perfekt for deg! Du får muligheten til å arbeide med vitenskapelig ansatte sine prosjekter på egenhånd. Prosjektene varierer mye, fra numerisk analyse til å reprodusere eksperimentelle forsøk. Dette er en ypperlig måte å bruke og videreutvikle kunnskapen du lærer i emnene på instituttet. Det er også en super forberedelse til prosjekt- og masteroppgave.</p>
            
            <!--Active project announcements-->
            <div class="bg-blue">
                <h1>Aktive utlysninger</h1>
                <p class="center-paragraph">Her publiseres nye prosjekter fortløpende.</p>
                <div class="flex-container">

                    <a title="Utlysning QuSpin" href="./Utlysning_QuSpin.pdf" target="_blank" class="two-split"><div class="hover-shadow"><h3>Utlysning QuSpin</h3><p>Hvordan ivaretas kvinneandelen i fysikkutdannelser? Det kan virke som at det er et stort frafall kvinner innenfor høyere nivå på fysikk, spesielt innenfor teoretisk fysikk. Vi ønsker å hente inn statistikk på kvinneandel innenfor teoretisk fysikk... Les mer</p></div></a>

                    <a href="./Utlysning_TEM.pdf" target="_blank" title="Forskningsassistent" class="two-split mt"><div class="hover-shadow"><h3>Utlysning TEM: Programming/data processing</h3><p>In this project a student will apply, further refine or rewrite to a tutorial Juypter notebooks for the analysis of transmission electron microscopy data. Through the project you will become familiar with using open-source... Read more.</p></div></a>

                </div>
            </div>
            
            <!--Read about ongoing projects, keep this down to two or three-->
            <div class="bg-smaragd">
            <h1 class="mt">Pågående prosjekter</h1>
            <div class="flex-container">

               <p class="split-narrow">Håvard fikk sommerjobb hos Justin Wells. Les hvilke erfaringer han tok med seg etter en sommer med forskningsprosjekt.<br><a href="nyheter/intervjuHavard.html" class="white-arrow">&rarr;</a></p>
            </div>
            </div>

            <!--Past/outdated project announcements-->
            <div class="bg-blue">
                <h1 class="mt">Tidligere prosjekter</h1>
                <p class="center-paragraph">Her kan du lese om tidligere forskningsprosjekter.</p>
                <div class="flex-container">
                    <!--"mal" for hvilke klasser som trengs for å legge inn tidligere prosjektutlysninger:
                       <a href="link til PDF" title="" class="two-split"><div class="hover-shadow"><h3></h3><p>Kort prosjektbeskrivelse</p></div></a>
                    -->
                </div>
            </div>

            <!--Footer-->
            <?php include("../footer_studentprosjekter.php"); ?>
        </div>
    </body>
</html>