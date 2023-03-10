<link rel="shortcut icon" href="{{asset('image/logo.png')}}">
@foreach($unduhan as $und)
<title>{{ $und->dokumen }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<object data="{{ asset('file/nilaisiswa/'.$und->dokumen) }}" frameBorder="0" scrolling="auto" height="100%" width="100%" style="margin:0; padding: 0;">
	<p>It appears you don't have a PDF plugin for this browser.
   No biggie... you can <a href="{{ asset('file/'.$und->dokumen) }}" download="">click here to
  download the PDF file.</a></p> 
</object>
@endforeach

