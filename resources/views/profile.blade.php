
<!DOCTYPE html>
<html lang="en">

@extends('layouts.main')

@section('container')
    <h1>Halaman Profile</h1><hr/>
    <p><?php echo "Nama : ", $name; ?> </p>  
    <p>Emailku : {{ $email }} </p>           
    <img src="<?= $images; ?> " alt="{{ $name; }}" width="100" class="img-thumbnail rounded-cirl">    
@endsection
