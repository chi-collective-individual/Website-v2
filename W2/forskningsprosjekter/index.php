<!DOCTYPE html>
<html lang="no-nb">
    
                
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147425276-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-147425276-1');
        </script>
        <!--Tag ends-->
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../stylesheets/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&" rel="stylesheet">

        <title>SaP - Forskningsprosjekter</title>
    </head>
    <body>
        <!--container for the header that is in all pages-->
        <?php include('../menu.php'); ?>


        <div class="indent">
            <img src="../images/Lab070819.jpg" alt="Picture can't load" id="top-content">

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
                    <a title="Utlysning Skolelaboratoriet" href="./realfagsloyper_skolelab.pdf" target="_blank" class="two-split"><div class="hover-shadow"><h3>Utlysning skolelaboratoriet</h3><p>Prosjektet innebærer å evaluere og foreslå endringer i Fysikkløypa (6. trinn) og Energiløypa (VG1). Evalueringen skal bygge på undersøkelse gjennom observasjon og samtaler med elever som deltar i disse Realfagløypene, deres lærere og studentassistenter som veileder elevene... Les mer</p></div></a>
                    <a title="Utlysning Skolelaboratoriet" href="./Elektrisitet_skolelab.pdf" target="_blank" class="two-split mt"><div class="hover-shadow"><h3>Utlysning skolelaboratoriet</h3><p>Vi har undersøkt studenters forståelse for grunnleggende elektrisitetslærer, og ønsker hjelp med å systematisere og analysere datamaterialet. Vi ønsker at studien skal ende opp med en hensiktsmessig oversikt over resultatene, samt hvilke trender... Les mer</p></div></a>
                    <a title="Utlysning QuSpin" href="./Utlysning_QuSpin.pdf" target="_blank" class="two-split"><div class="hover-shadow"><h3>Utlysning QuSpin</h3><p>Hvordan ivaretas kvinneandelen i fysikkutdannelser? Det kan virke som at det er et stort frafall kvinner innenfor høyere nivå på fysikk, spesielt innenfor teoretisk fysikk. Vi ønsker å hente inn statistikk på kvinneandel innenfor teoretisk fysikk... Les mer</p></div></a>

                    <a href="./Utlysning_TEM.pdf" target="_blank" title="Research assistant" class="two-split mt"><div class="hover-shadow"><h3>Utlysning TEM: Programming/data processing</h3><p>In this project a student will apply, further refine or rewrite to a tutorial Juypter notebooks for the analysis of transmission electron microscopy data. Through the project you will become familiar with using open-source... Read more.</p></div></a>

                </div>
            </div>
            
            <!--Read about ongoing projects, keep this down to two or three-->
            <div class="bg-smaragd">
            <h1 class="mt">Pågående prosjekter</h1>
                <div class="flex-container">

                    <!--Mal:
                    <p class="split-narrow">...</p><br><a href="nyheter/***.php" class="white-arrow">&rarr;</a></p>
                    -->
                    <p class="split-narrow">Electrons propagating from extragalactic sources to Earth may loose energy, as they excite waves in the plasma filling... Read more<br><a href="electron_propagation.pdf" class="white-arrow">&rarr;</a></p>
                  
                
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
                    <a href="nyheter/intervjuHavard.html" title="Intervju" class="two-split"><div class="hover-shadow"><h3>Håvard fikk sommerjobb hos Justin Wells</h3><p>Dette er den første sommeren jeg jobber som forskningsassistent i laboratoriet, og prosjektet jeg jobber med er å sette opp et nytt system som skal hente målt trykk i et vakuumkammer. Dette skal det lages backup av... Les mer.</p></div></a>    
                </div>
            </div>
            <a href="#top-content"><img src="../images/up-arrow.PNG" style="display: block; margin-left: auto; margin-right: auto; width: 5%; margin-top:80px;"></a> 
            <!--Footer-->
            <?php include("../footer_studentprosjekter.php"); ?>
        </div>
    </body>
</html>