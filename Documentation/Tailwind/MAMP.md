# TailwindCSS (MAMP)

1. TailwindCSS installieren

```sh
yarn add -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

2. Füge Tailwind zur Webpack-Konfiguration hinzu

Bearbeite die Datei webpack.config.js und füge in Zeile 26 Tailwind als PostCSS-Option hinzu:

```javascript
"css-loader",
{
    loader: "postcss-loader",
    options: { postcssOptions: { plugins: ["tailwindcss", "autoprefixer"] } },
},
```

3. Konfiguriere die Template-Pfade

Füge die Pfade zu deinen Template-Dateien zur `tailwind.config.js` hinzu.

```javascript
module.exports = {
    content: ["./app/templates/**/*.ss", "./public_src/**/*.js"],
    theme: {
        extend: {},
    },
    plugins: [],
};
```

4. Füge die Tailwind-Direktiven zu deinen Styles hinzu

In der Datei `public_src/style.scss`

```scss
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5. Jetzt kannst du TailwindCSS verwenden.

Starte Webpack

```sh
yarn run start
```

Und verwende TailwindCSS in deinen Templates.

```html
<h1 class="text-3xl font-bold underline">Hello world!</h1>
```

Oder deinen SCSS-Components

```scss
.TextBaseElement-title {
    @apply text-3xl font-bold underline;
}
```
