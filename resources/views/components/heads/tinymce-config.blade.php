<script src="https://cdn.tiny.cloud/1/ic2z1zdhvj0vzyazri0jh2ph5w0kiij71y6q1by6h9x18nse/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#tiny-mce-editor',
        plugins: [
            'link', 'lists', 'charmap', 'preview', 'anchor',
            'searchreplace', 'code', 'fullscreen', 'insertdatetime', 'table', 'emoticons', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic ' +
            'bullist numlist | link | preview fullscreen | help',
        menubar: false,
        skin: 'bootstrap',
        setup: (editor) => {
            // Apply the focus effect
            editor.on("init", () => {
                editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
            });
            editor.on("focus", () => {
                (editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                    (editor.getContainer().style.borderColor = "#80bdff");
            });
            editor.on("blur", () => {
                (editor.getContainer().style.boxShadow = ""),
                    (editor.getContainer().style.borderColor = "");
            });
        },
    });
</script>
