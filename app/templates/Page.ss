<!DOCTYPE html>
<html lang="de-DE">
<head>
    <% base_tag %>
    <meta charset="utf-8">
    <title>$Title</title>
    <meta name="description" content="$MetaDescription">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <% require themedCSS("app.min") %>
</head>

<body>
    <main>
        $Layout
    </main>

    <% require javascript("js/app.min.js") %>
</body>
</html>
