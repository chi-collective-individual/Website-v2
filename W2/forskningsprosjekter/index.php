<!DOCTYPE html>
<html lang="no-nb">
    
                
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../stylesheets/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&" rel="stylesheet">

        <title>SaP - Forskningsprosjekter</title>
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

                    <!--Mal:
                    <a href="" title="" class="two-split"><div class="hover-shadow"><h3></h3><p>...</p></div></a>
                    -->

                    <a title="Utlysning QuSpin" href="./Utlysning_QuSpin.pdf" target="_blank" class="two-split"><div class="hover-shadow"><h3>Utlysning QuSpin</h3><p>Hvordan ivaretas kvinneandelen i fysikkutdannelser? Det kan virke som at det er et stort frafall kvinner innenfor høyere nivå på fysikk, spesielt innenfor teoretisk fysikk. Vi ønsker å hente inn statistikk på kvinneandel innenfor teoretisk fysikk... Les mer</p></div></a>

                    <a href="./Utlysning_TEM.pdf" target="_blank" title="Research assistant" class="two-split mt"><div class="hover-shadow"><h3>Utlysning TEM: Programming/data processing</h3><p>In this project a student will apply, further refine or rewrite to a tutorial Juypter notebooks for the analysis of transmission electron microscopy data. Through the project you will become familiar with using open-source... Read more.</p></div></a>
                    <a href="./electron_propagation.pdf" target="_blank" title="Researh assistant" class="two-split mt"><div class="hover-shadow"><h3>Utlysning TEM: Programming/data processing</h3><p>Electrons propagating from extragalactic sources to Earth may loose energy, as they excite waves in the plasma filling the intergalactic space. In this project, the student will survey rates for this loss mechanism suggested in the literature and implement them in a numerical routine... Read more.</p></div></a>

                </div>
            </div>
            
            <!--Read about ongoing projects, keep this down to two or three-->
            <div class="bg-smaragd">
            <h1 class="mt">Pågående prosjekter</h1>
                <div class="flex-container">

                    <!--Mal:
                    <p class="split-narrow">...</p><br><a href="nyheter/***.php" class="white-arrow">&rarr;</a></p>
                    -->

                    <p class="split-narrow">Håvard fikk sommerjobb hos Justin Wells. Les hvilke erfaringer han tok med seg etter en sommer med forskningsprosjekt.<br><a href="nyheter/intervjuHavard.html" class="white-arrow">&rarr;</a></p>
                
                </div>
            </div>

            <!--Past/outdated project announcements-->
            <div class="bg-blue">
                <h1 class="mt">Tidligere prosjekter</h1>
                <p class="center-paragraph">Her kan du lese om tidligere forskningsprosjekter.</p>
                <div class="flex-container">

                    <!--Mal:
                       <a href="" title="" class="two-split"><div class="hover-shadow"><h3></h3><p>...</p></div></a>
                    -->
                </div>
            </div>

            <!--Footer-->
            <?php include("../footer_studentprosjekter.php"); ?>
        </div>
    </body>
</html>