/**
 *  Dev: Shanila
 *  Des: add text editor
 *  Date: 17-4-2023
 */
function quillEditors() {

    Quill.register("modules/htmlEditButton", htmlEditButton);
    const editors = document.querySelectorAll('.quill-editor');
    editors.forEach(editor => {
        const quill = new Quill(editor, {
            bounds: editor,
            modules: {
                'syntax': true,
                'toolbar': [
                    [ 'bold', 'italic', 'underline', 'strike' ],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
                    [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
                    [ {'direction': 'rtl'}, { 'align': [] }],
                    [ 'link', 'image', 'video'],
                    [ 'clean' ]
                ],
                htmlEditButton: {}
            },
            theme: 'snow'
        });
    });
 }

 quillEditors();
