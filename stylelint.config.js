module.exports = {
    extends: ["stylelint-config-standard-scss"],
    plugins: ["stylelint-selector-bem-pattern"],
    rules: {
        "at-rule-no-unknown": null,
        "scss/at-rule-no-unknown": [
            true,
            {
                ignoreAtRules: ["tailwind", "apply", "variants", "responsive", "screen"],
            },
        ],
        "selector-class-pattern": null,
        "plugin/selector-bem-pattern": {
            preset: "suit",
            implicitComponents: ["public_src/BaseElements/**/*.scss"],
        },
    },
    overrides: [
        {
            files: ["**/*.scss"],
            customSyntax: "postcss-scss"
        }
    ]
};
