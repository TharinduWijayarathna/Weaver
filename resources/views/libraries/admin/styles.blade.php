 <!-- Load Favicon-->
 <link href="{{ asset('assets/admin/img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
 <!-- Load Material Icons from Google Fonts-->
 <link
     href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
     rel="stylesheet" />
 <!-- Load Simple DataTables Stylesheet-->
 <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
 <!-- Roboto and Roboto Mono fonts from Google Fonts-->
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
 <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
 <!-- Load main stylesheet-->
 <link href="{{ asset('assets/admin/css/styles.css') }}" rel="stylesheet />

@livewireStyles

 @stack('styles')
