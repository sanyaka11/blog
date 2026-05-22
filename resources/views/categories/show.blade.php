@extends('layouts.app')

@section('title', $category->title ?? 'Category')

@php
$sidebarLeft = true;
@endphp

@section('page-title')
<div class="page-title db">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2>{{ $category->title ?? 'Category' }} <small class="hidden-xs-down hidden-sm-down"></small></h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">{{ $category->title ?? 'Category' }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="blog-custom-build">
        @forelse ($posts as $post)
        <div class="blog-box wow fadeIn">
            <div class="post-media">
                <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">
                    <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                    <div class="hovereffect">
                        <span></span>
                    </div>
                </a>
            </div>
            <div class="blog-meta big-meta text-center">
                <div class="post-sharing">
                    <ul class="list-inline">
                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">{{ $post->title }}</a></h4>
                {!! $post->description !!}
                <div class="mb-3"></div>
                <small><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>
                <small>{{ $post->getPostDate() }}</small>
                <small><a href="#" title="">by {{ $post->user->name ?? 'Author' }}</a></small>
                <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
            </div>
        </div>
        <hr class="invis">
        @empty
            <p>Посты с такой категорией не найдены.</p>
        @endforelse
    </div>
</div>

<hr class="invis">

<div class="row">
    <div class="col-md-12 pagination justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection