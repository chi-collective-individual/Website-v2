<!DOCTYPE html>
<html land="no-nb">
    
                
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../stylesheets/styles.css">
        <link rel="stylesheet" href=""> 
        <link href="https://fonts.googleapis.com/css?family=Raleway&" rel="stylesheet"><!--stylesheet for font family here-->
        <script src="scripts/slideshow.js" defer></script>

        <title>SaP - Emneutvikler</title>
    </head>
    <body>
    <!--Menu-->
    <?php include("../menu.php"); ?> 
      
        <div class="indent">
            <img src="../images/emneutvikler_cellebio4.jpg">

            <!--Information about emneutvikler-->
            <h1>Emneutvikler</h1>
            <p class="center-paragraph">Vil du bidra til å utvikle læringsressurser for kommende studentkull? Ønsker du å få mer kunnskap om god pedagogisk praksis og å videreutvikle undervisningen av fysikk? I Students as Partners (SaP) prosjektet er vi interesserte i å komme i kontakt med studenter som kan tenke seg å bidra til å utvikle morgendagens emner og undervisningen av disse. Du vil samarbeide med faglærere og ressurspersoner innen SaP-prosjektet, som alle jobber mot det samme målet: god undervisning. </p>
            
            <!--Active project announcements-->
            <div class="bg-blue">
                <h1>Aktive utlysninger</h1>
                <p class="center-paragraph">Her publiseres nye prosjekter fortløpende.</p>
                <div class="flex-container">

                    <!--Mal: 
                    <a href="" title="" class="two-split"><div class="hover-shadow"><h3></h3><p></p></div></a>
                    -->
                    <a title="Utlysning kvantefysikk" href="./Studentprosjekt_TFY4215.pdf" target="_blank" class="two-split"><div class="hover-shadow"><h3>Utlysning kvantefysikk</h3><p>Ingjald Øverbøs tillegg, regneøvinger og løsningsforslag i emnet TFY4215 Innføring i kvantefysikk representerer uvurderlige læringsressurser for studentene. Noe av dete kan kanskje bli enda bedre hvis det formuleres som Jupyter Notebooks?... Les mer</p></div></a>

                    <a href="./TFY4163_demonstrasjoner.pdf" target="_blank" title="Demonstrasjoner i TFY4163" class="two-split mt"><div class="hover-shadow"><h3>Demonstrasjoner i TFY4163</h3><p>Våren 2020 starter ett nytt emne opp ved Institutt for fysikk: TFY4163 Bølgefysikk og fluidmekanikk. Innen bølgefysikk er det mange spennende fysiske fenomener med viktige teknologisk anvendelser som relativt enkelt kan realiseres med små fysiske oppsett... Les mer.</p></div></a>
                    <a href="./versjonskontrollsystem.pdf" target="_blank" title="Versjonskontrollsystem" class="two-split mt"><div class="hover-shadow"><h3>Versjonskontroll</h3><p>For å effektivt samarbeide om programvareutvikling brukes det nesten alltid et såkalt versjonskontrollsystem. Et slikt system er Git, og dette er noe flere studenter vil komme borti senere i studiet eller i arbeidslivet. ... Les mer.</p></div></a>
                </div>
            </div>
            
            <!--Read about ongoing projects, keep this down to two or three-->
            <div class="bg-smaragd">
                <h1 class="mt">Pågående prosjekter</h1>
                <div class="flex-container">
                    <!--Mal:
                    <p class="split-narrow">...</p><br><a href="nyheter/***.php" class="white-arrow">&rarr;</a></p>
                    -->
                    <p class="split-narrow">Rasmus Tranås var med å utvikle de numeriske øvingene i mekanisk fysikk sommmeren 2019. Les om hans sommer ved Institutt for fysikk.<br><a href="../nyheter/intervjuRasmus.php" class="white-arrow">&rarr;</a></p>
                </div>
            </div>

            <!--Past/outdated project announcements-->
            <div class="bg-blue">
                <h1 class="mt">Tidligere utlysninger</h1>
                <p class="center-paragraph">Her kan du lese om tidligere utlysninger. Disse er ikke lenger mulige å søke på, men gir deg en pekepinn på hva som kan utlyses og hvordan utlysningene ser ut. </p>
                <div class="flex-container">
                <!--Mal: <a href="" title="" class="two-split"><div class="hover-shadow"><h3></h3><p></p></div></a>-->
                    <a href="Sommerjobb ved Institutt for fysikk 2019.pdf" title="Sommerjobb IFY" class="two-split"><div class="hover-shadow"><h3>Emneutvikler IFY</h3><p>Er du interessert i en sommerjobb ved IFY? Institutt for fysikk søker studenter med interesse for programmering og numerisk fysikk til sommerjobb. Arbeidet omfatter utvikling av læringsmateriell i forbindelse med økt fokus på numerisk beregninger i grunnkursene i fysikk.</p></div></a>

                </div>
            </div>

            <!--Footer-->
            <?php include("../footer_studentprosjekter.php"); ?>
        </div>
    </body>
</html>
