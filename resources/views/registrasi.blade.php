@extends('layouts.main')

@section('content')

<script src=""></script>

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Registrasi</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{ route('dashboard') }}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Data tour</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-12 col-md-6" style="display: block; margin-left: auto; margin-right: auto;">
        <div id="reader" width="600px"></div>
    </div>
      </div>
      
      <div class="row">
        <input readonly type="text" name="nama_peserta" id="nama_peserta">
        </div>

    </div>
  </div>
  
</div>



@endsection

