$(function () {
    'use strict'
    $('#languageSelect').change(function () {
        var currentUrl = window.location.href;
        var language = $(this).val();
        var parts = currentUrl.split("/");
        parts[4] = language
        var newUrl = parts.join("/");
        window.location.href = newUrl;
    });
});