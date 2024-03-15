<div class="ImageTextBaseElement">
    <div class="ImageTextBaseElement-title">$Title</div>
    <div class="ImageTextBaseElement-content typography">$Content</div>
    <div class="ImageTextBaseElement-image">
        <%--

        Plugin jbennecker/silverstripe-webp verwenden
        Bilder (Headerbilder, normale Bilder etc) immer als ".Webp(SIZE)" ausgeben
        -> Bildurl ist damit automatisch nicht mehr in Großbuchstaben

        Bildgröße über verschiedene Viewports fix

        <img
            loading="lazy"
            src="$Image.Webp(300)"
            srcset="$Image.Webp(300) 1x, $Image.Webp(600) 2x" (2x ist für Retina)
            width="$Image.Width"
            height="$Image.Height"
            alt="$Image.Title"
            title="$Image.Title"
        >

        ODER

        Bildgröße ändert sich über verschiedene Viewports (Beispiel Headerbild)

        <picture>
            <source
                srcset="$Image.Webp(2500) 2500w (w (width) ist die Breite des Bildes),
                        $Image.Webp(1550) 1550w,
                        $Image.Webp(500) 500w"
                type="image/webp"
                sizes="(max-width: 370px) 500px, (max-width: 1250px) 1550px, 2500px"
            >
            <img loading="lazy" src="$Image.Webp(1500)" alt="$Image.Title" title="$Image.Title" width="$Image.Width" height="$Image.Height">
        </picture>

        --%>
    </div>
</div>
