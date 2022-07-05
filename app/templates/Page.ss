<!DOCTYPE html>
<html lang="$ContentLocale">
<head>
    <% base_tag %>
    <meta charset="utf-8">
    <title>$Title</title>
    <meta name="description" content="$MetaDescription">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <% require themedCSS("build/app.min") %>
</head>

<body>
    $Layout
    <% require javascript("build/app.min.js") %>
</body>
</html>
