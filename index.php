<!DOCTYPE html>
<html>
<head>
    <title>Web Portfolio of Michael Feinbier</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

	<script src="bower_components/platform/platform.js"></script>

    <link rel="stylesheet" href="elements/styles.css">
    <link rel="import" href="elements/feinbier-page.html">
    <link rel="import" href="elements/feinbier-footer.html">
    <link rel="import" href="bower_components/core-media-query/core-media-query.html">
    <link rel="import" href="bower_components/paper-fab/paper-fab.html">

</head>
<body fullbleed>
    <feinbier-page>
        <div layout horizontal class="content-section dark intro">
	        <figure flex>
                <span class="flaticon-circuit4"></span>
		        <?php #echo file_get_contents('images/lego3.svg'); ?>
	        </figure>
	        <div flex three>
		        <h3>Herzlich Willkommen</h3>
				<p>Ich bin Michael Feinbier und ich mache was mit Medien. Gefangen als Rockstar im K&ouml;rper eines Informatikers besch&auml;ftige ich mich
                seit nun &uuml;ber 10 Jahren mit den Themen <em>PHP, Symfony, TYPO3, Laravel</em> und <em>Sencha (Touch)</em>.
                Dazu gekommen sind in den letzten Jahren Buzzwords wie <em>iOS &amp; Android-Entwicklung, HTML5, WebApps</em> und <em>Node.js</em>.
                Das was Sie hier sehen, ist mit <em>Polymer</em> realisiert.
                "Aufgewachsen" bin ich in der Werbung und habe f&uuml;r Kunden wie die Deutsche Post, Praktiker, Johnson&amp;Johnson, O<sub>2</sub> oder BMW gearbeitet.<br>
                Auf den folgenden Seiten m&ouml;chte ich einen kleinen Einblick in Teile meiner Arbeit geben.</p>
	        </div>
        </div>

	    <div class="content-section light">
            <paper-fab raisedbutton icon="arrow-drop-down"></paper-fab>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, libero!</p>
	    </div>

        <feinbier-footer></feinbier-footer>
    </feinbier-page>

    <core-media-query id="mediaQueryMobile" query="max-width: 640px"></core-media-query>

    <script>

        document.querySelector('#mediaQueryMobile').addEventListener('core-media-change',
            function(e) {
                console.info('core-media-change', e.detail);
                document.body.classList.toggle('core-narrow', e.detail.matches);
            });

    </script>

</body>
</html>