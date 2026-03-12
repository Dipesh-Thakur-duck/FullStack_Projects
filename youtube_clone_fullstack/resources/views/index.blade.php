@extends('includes.master')

@section('content')


  @foreach($main as $video)

  <div class="video-container">

    <div class="thumbnail-videolength-container">
      <a href="{{ $video->link }}">
        <img src="{{ asset($video->thumbnail) }}" class="thumbnail-pic">
      </a>

      <span class="video-length">{{ $video->videoLength }}</span>
    </div>


    <div class="video-info-container">

      <div class="channelpic-channeltooltip-container">

        <img src="{{ asset($video->channelPic) }}" class="channel-pic">

        <div class="channel-tooltip">

          <img src="{{ asset($video->channelPic) }}" class="channel-tooltip-pic">

          <div class="channel-tooltip-data-container">

            <span class="channel-tooltip-name">
              {{ $video->channelName }}
            </span>

            <span class="channel-tooltip-subscribers">
              {{ $video->subscribers }}
            </span>

          </div>

        </div>

      </div>


      <div class="video-info">

        <a href="{{ $video->link }}">
          <p class="video-title">{{ $video->videoTitle }}</p>
        </a>

        <div class="video-stats">

          <p class="channel-name">{{ $video->channelName }}</p>

          <div class="stats">
            <span class="views">{{ $video->views }}</span>
            &middot;
            <span class="age">{{ $video->time }}</span>
          </div>

        </div>

      </div>

    </div>

  </div>

  @endforeach


@endsection