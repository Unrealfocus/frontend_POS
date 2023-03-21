<x-app-layout>
   
    <div class="container mt-4">
        <div id="printable">
            <center>
            <a href="{{ url('/qrcode') }}" class="btnprn btn"> <button class="print">
                Print this
              </button></a></center>
              <script type="text/javascript">
                $(document).ready(function(){
                $('.btnprn').printPage();
                });
                </script>
                
            <div class="card">
                <div class="card-header">
                    <h2>Simple QR Code</h2>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
                </div>
            </div>
    
            <div class="card">
                <div class="card-header">
                    <h2>Color QR Code</h2>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
                </div>
            </div>
          </div>
       

    </div>
</x-app-layout>