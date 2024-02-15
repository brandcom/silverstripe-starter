<div class="ImageTextBaseElement">
    <div class="ImageTextBaseElement-title">$Title</div>
    <div class="ImageTextBaseElement-content typography">$Content</div>
    <div class="ImageTextBaseElement-image">
        <!--

        $Image.Picture

        ODER

        <img class="image" loading="lazy" src="$Image.Webp(1550)" alt="$Image.Title" title="$Image.Title" width="$Image.Width" height="$Image.Height">

        ODER

        <picture>
            <source
                srcset="$Image.Webp(1500) 1920w,
                        $Image.Webp(750) 760w,
                        $Image.Webp(500) 370w"
                type="image/webp"
                sizes="(max-width: 370px) 500px, (max-width: 750px) 750px, 1500px"
            >
            <img class="image" loading="lazy" src="$Image.Webp(1500)" alt="$Image.Title" title="$Image.Title" width="$Image.Width" height="$Image.Height">
        </picture>

        //-->
    </div>
</div>
