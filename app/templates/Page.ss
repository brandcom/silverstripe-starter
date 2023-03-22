<!DOCTYPE html>
<html lang="$ContentLocale" dir="ltr">
<head>
    <% base_tag %>
    <meta charset="utf-8">

    <% if $MetaTitle %>
        <title>$MetaTitle</title>
    <% else %>
        <title>$Title | $SiteConfig.Title</title>
    <% end_if %>

    <meta name="description" content="$MetaDescription">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="$CanonicalUrl">

    <meta property="og:title" content="">
    <meta property="og:description" content="$MetaDescription">
    <meta property="og:type" content="">
    <meta property="og:url" content="$CanonicalUrl">
    <meta property="og:image" content="">

    <% require themedCSS("build/app.min") %>
    <% include Tracking %>
</head>

<body>
    $Layout
    <% require javascript("build/app.min.js") %>
</body>
</html>
