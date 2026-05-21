@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blank Page</h1>
                @auth
                    <h1>Привет, {{ Auth::user()->name }}!</h1>
                    <a href="{{ route('logout') }}">Выйти</a>
                @endauth
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Главная</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
            Start creating your amazing application!
            </div>
            <div class="statistics">
            @auth
            <h3>Статистика сайта</h3>
                <ul>
                    <li>Всего пользователей: {{ $usersCount }}</li>
                    <li>Всего постов: {{ $postsCount }}</li>
                    <li>Всего категорий: {{ $categoriesCount }}</li>
                    <li>Всего тегов: {{ $tagsCount }}</li>
                </ul>
            </div>
            @endauth
            <!-- /.card-body -->
            <div class="card-footer">
            Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection