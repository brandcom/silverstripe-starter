module.exports = {
    extends: ["stylelint-config-standard-scss"],
    rules: {
        "at-rule-no-unknown": null,
        "scss/at-rule-no-unknown": [
            true,
            {
                ignoreAtRules: ["tailwind", "apply", "variants", "responsive", "screen"],
            },
        ],
    },
};
