@extends('layouts.front.neron.app')
@section('title', __('Welcome'))
@section('tema_ruta','front/base/')
@section('css_thema')
<?php $ruta_thema = 'front/base/'; ?>
<link href="{{ asset('')}}{{$ruta_thema}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('')}}{{$ruta_thema}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('')}}{{$ruta_thema}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{ asset('')}}{{$ruta_thema}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="{{ asset('')}}{{$ruta_thema}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="{{ asset('')}}{{$ruta_thema}}assets/css/style.css" rel="stylesheet">
@endsection
@section('content') <!-- Include homeconten de theme components -->
<x-app.base.homecontent>
</x-app.base.homecontent>
@endsection

@section('thema_script')
  <!-- Vendor JS Files -->
  <script src="{{ asset('')}}{{$ruta_thema}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('')}}{{$ruta_thema}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('')}}{{$ruta_thema}}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('')}}{{$ruta_thema}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('')}}{{$ruta_thema}}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('')}}{{$ruta_thema}}assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('')}}{{$ruta_thema}}assets/js/main.js"></script>
@endsection