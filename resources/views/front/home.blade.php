@extends('front.layouts.master')
@section('title', __('app.home'))
@section('content')
<div class="container">
    <div class="story-groups">
        @if ($archived_stories->count())
        <div class="group" id="archives">
            <div class="group-header">
                <h4 class="group-title"><a href="#">@lang('app.continue_reading')</a></h4>
                <div class="group-subtitle">@lang('app.continue_reading_description')</div>
            </div>
            <div class="owl-carousel">
                @foreach ($archived_stories as $story)
                    @include('front.story_item', ['story' => $story])
                @endforeach
            </div>
        </div>
        @endif
        @if ($recommended_stories->count())
        <div class="group" id="recommendations">
            <div class="group-header">
                <h4 class="group-title"><a href="#">@lang('app.recommendations')</a></h4>
                <div class="group-subtitle">@lang('app.recommendations_description')</div>
            </div>
            <div class="owl-carousel">
                @foreach ($recommended_stories as $story)
                    @include('front.story_item', ['story' => $story])
                @endforeach
            </div>
        </div>
        @endif
        @if ($recent_stories->count())
        <div class="group" id="recents">
            <div class="group-header">
                <h4 class="group-title"><a href="#">@lang('app.recent_stories')</a></h4>
                <div class="group-subtitle">@lang('app.recent_stories_description')</div>
            </div>
            <div class="owl-carousel">
                @foreach ($recent_stories as $story)
                    @include('front.story_item', ['story' => $story])
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@stop
