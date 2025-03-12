@props(['id', 'model', 'path'])
@php
$id = $id ?? md5($attributes->wire('model'));
$model = $model ?? 'content';
$path = $path ?? asset('/board/store-image');
@endphp
@push('scripts')
    <!-- Jquery -->
    <script src="{{asset('storage/froala/jquery-3.7.1min.js')}}"></script>
    <script src="{{asset('storage/froala/jquery-ui-min.js')}}"></script>
    <!-- Style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css" rel="stylesheet" />
    <!-- Froala editor -->
    <script src="{{asset('storage/froala/froala_editor.pkgd.min.js')}}"></script>    
    <script src="{{asset('storage/froala/languages/ko.js')}}"></script>
    <!--Froala editor style. -->
    <link href="{{asset('storage/froala/css/froala_editor.pkgd.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('storage/froala/css/froala_style.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
<div class="rounded-md min-h-fit border shadow-sm" wire:ignore>
    <textarea
        id="{{ $id }}"
        class=""
    >{{ $slot }}</textarea>
</div>
<script>
    $(document).ready(function(){
        var oldcontent;
        $('#{{ $id }}').froalaEditor({
            key: 'gB2F2B1I2xC4B3B3E4B5A1D1E4F1C2sd1Te1LXe1URVJe1DWXG==',
            language: 'ko',
            heightMin: 800,
            toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', '|', 'paragraphFormat', 'align', 'outdent', 'indent', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertTable', '|', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'print', 'help', 'html', '|', 'undo', 'redo'],
            imageInsertButtons: ['imageBack', '|', 'imageUpload', 'imageByURL'],
            imageDefaultWidth: 0,
            imageMaxSize: 30 * 1024 * 1024,
            imageUploadURL: "{{ $path }}",
            requestHeaders:{
                'x-csrf-token': '{{ csrf_token() }}'
            },
            imageUploadMethod: 'POST',
            requestWithCORS: true,
            videoUpload: false,
            fontFamily: {
                'MalgunGothic,sans-serif': '맑은고딕',
                'Gulim,sans-serif': '굴림',
                'Batang,serif': '바탕',
                'Dotum,sans-serif': '돋움',
                'Gungsuh,serif': '궁서',
                'Arial,Helvetica,sans-serif': 'Arial',
                'Georgia,serif': 'Georgia',
                'Impact,Charcoal,sans-serif': 'Impact',
                'Tahoma,Geneva,sans-serif': 'Tahoma',
                'Times New Roman,Times,serif,-webkit-standard': 'Times New Roman',
                'Verdana,Geneva,sans-serif': 'Verdana'
            },
            toolbarSticky: true,
            htmlAllowedStyleProps: ['font-family', 'font-size', 'background', 'color', 'width', 'height', 'text-align', 'vertical-align', 'background-color']
        }).on('froalaEditor.focus', function (e, editor, error, response){
            oldcontent = editor.html.get();
        }).on('froalaEditor.blur', function (e, editor)
        {
            if(oldcontent != editor.html.get())
            {
                // Do something here.
                @this.set('{{$model}}', editor.html.get());
                console.log(editor.html.get(), {{$model}});
            }
        }).on('froalaEditor.image.error', function (e, editor, error, response){
            console.log(error);
        });
        $('#{{ $id }}').froalaEditor('html.set', @this.get('{{$model}}'));
    });
    window.addEventListener('modal-opened', event => {
        $('#{{ $id }}').froalaEditor('html.set', event.detail.content);
    });
</script>