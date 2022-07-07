<!DOCTYPE html>
<html class='v2' dir='ltr' lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b'
    xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'
    xmlns:og='https://ogp.me/ns#'>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>CSS Minifier</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/img/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="192x192" href="/img/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/img/android-chrome-512x512.png">
    <link href="style.css" rel="stylesheet">
</head>


<body>

    <div id="cssminifier">

        <textarea autofocus="" id="cssField" placeholder="Paste your CSS code here..." spellcheck="false">
/**********************************
            TESTING
***********************************/
.ec-page-detail .ec-cat-bnr a span {
    width: 100%;
    height: 250px;
    display: block;
    background-size: cover;
    background-position: left center;
    background-repeat: no-repeat;
}

.ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-block-item input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    z-index: 999;
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
}

@media (max-width: 1024px) {
    .header-phone {
        display: none;
    }

    .top-bar p {
        font-size: 13px;
    }

    .product-category {
        min-height: 290px;
    }

    .home-featured-products,
    .home-best-selling-products {
        padding: 50px 0 0;
    }

    .ec-test-section {
        padding: 50px 0;
    }
}

@media (max-width: 768px) {

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        border-top: initial;
    }

    .handheld-navigation .menu li a {
        border-bottom: 1px solid #e9e9e9;
    }

    .category-section-row .col {
        flex: 0 0 auto;
        width: 33%;
    }

    .ec-main-slider .slider-bg {
        height: 80vh;
    }

    .ec-slide-content .ec-slide-stitle:after {
        height: 2px;
    }

    .ec-main-slider .align-self-center {
        align-self: flex-start !important;
    }

}
</textarea>
        <div class="button-container">
            
            <div class="checkbox-container">
                <input class="opt1" id="stripAllComment" type="checkbox">
                <label for="stripAllComment">Remove Comments</label>

                <input class="opt2" id="superCompact" type="checkbox">
                <label for="superCompact">Super Compact</label>

                <input checked="" class="opt2" id="spaceAfterSemicolon" type="checkbox">
                <label for="spaceAfterSemicolon">Add Space After Semicolon</label>

                <!-- <input checked="" class="opt2" id="spaceAfterColon" type="checkbox">
                <label for="spaceAfterColon">Add Space After Colon</label> -->

                <input checked="" class="opt3" id="betterIndentation" type="checkbox">
                <label for="betterIndentation" title="Best for @media queries">Keep Indentation</label>

                <input class="opt4" id="keepLastComma" type="checkbox">
                <label for="keepLastComma">Remove Last Semicolon</label><br><br>
            </div>

            <div class="button-group">
                <button onclick="compressCSS('cssField');">Compress CSS</button>
                <button onclick="clearField('cssField');">Clear Field</button>
                <button onclick="selectAll('cssField');">Select All</button>
            </div>

        </div>

    </div>

    <script type="text/javascript" src="script.js"></script>
    <script src="/ace/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("cssField");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/css");
        editor.setOptions({
            fontFamily: "JetBrains Mono",
            fontSize: "10pt",
            showPrintMargin: false
        });
    </script>
</body>

</html>