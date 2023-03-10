<link rel="shortcut icon" href="{{asset('image/logo.png')}}">
<title>{{ $unduhan->dokumen }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<object data="{{ asset('file/'.$unduhan->dokumen) }}" frameBorder="0" scrolling="auto" height="100%" width="100%" style="margin:0; padding: 0;">
	<p>It appears you don't have a PDF plugin for this browser.
   No biggie... you can <a href="{{ asset('file/'.$unduhan->dokumen) }}" download="">click here to
  download the PDF file.</a></p> 
</object>

