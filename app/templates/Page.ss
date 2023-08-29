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

    <meta property="og:title" content="<% if $MetaTitle %>$MetaTitle<% else %>$Title | $SiteConfig.Title<% end_if %>">
    <meta property="og:description" content="$MetaDescription">
    <meta property="og:type" content="website">
    <meta property="og:url" content="$CanonicalUrl">
    <%--
    The URL of an image for the social snippet. 
    Note that this is perhaps the most essential Open Graph tag because it occupies the most social feed real estate.
    --%>
    <meta property="og:image" content="">

    <% require themedCSS("build/app.min") %>
    <% include Tracking %>
</head>

<body>
    $Layout
    <% require javascript("build/app.min.js") %>
</body>
</html>
