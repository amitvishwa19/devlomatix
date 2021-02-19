<div class="col-md-2 p-2">
    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header">
          <div class="user-pic">
            <img alt="Profile Image" width="33" height="33" src="{{asset('public/assets/img/profiles/8x.jpg')}}">
          </div>
          <h5 class="mt-1">Jeff Curtis</h5>
        </div>
        <div class="card-description">
          <p>What you think, you become. What you feel, you attract. What you imagine, you create - Buddha. <a href="#">#quote</a></p>
          <div class="via">via Twitter</div>
        </div>
    </div>

    @role('digilearn')
    {{-- Digilearn Area --}}
    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header clearfix">
            <h5>Digilearn</h5>
        </div>
        <div class="card-description">
            <li><a href="{{route('classroom.index')}}">Classrooms</a></li>
            <li><a href="{{route('chapter.index')}}">Chapters</a></li>
            <li><a href="{{route('quiz.index')}}">Quizs</a></li>
            <li><a href="{{route('question.index')}}">Questions</a></li>
            <li><a href="{{route('video.index')}}">Videos</a></li>
            {{-- <li><a href="">Create Post</a></li> --}}
        </div>
    </div>
    @endrole

    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header">
          <div class="user-pic">
            <img alt="Profile Image" width="33" height="33" src="{{asset('public/assets/img/profiles/8x.jpg')}}">
          </div>
          <h5 class="mt-1">Jeff Curtis</h5>
        </div>
        <div class="card-description">
          <p>What you think, you become. What you feel, you attract. What you imagine, you create - Buddha. <a href="#">#quote</a></p>
          <div class="via">via Twitter</div>
        </div>
    </div>
</div>
