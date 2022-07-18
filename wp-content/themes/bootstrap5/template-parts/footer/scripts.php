<script>
    var scroll = new SmoothScroll('a[href*="#section"]');

    // Highlight JS
    // hljs.highlightBlock(document.querySelector('pre code'));
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });
</script>