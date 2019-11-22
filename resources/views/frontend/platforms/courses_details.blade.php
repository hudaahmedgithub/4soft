<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>course-details</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <link rel="stylesheet" href="{{asset('blog/blog.css')}}">
    </head>
    <body>
        <div class="course-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-details">
                            <h3>{{$course->name}}</h3>
                            <p>Learn all you need technologies to be a {{$course->name}} Developer.</p>
                            <a href="#"><button class="btn">enroll</button></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-img">
                            <img src="{{url('images',$course->image)}}" alt="course-image" width="120%" height="230px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="course-contents">
                            <div class="about-course">
                                <h4>About this course</h4>
                                <p>{{$course->description}}.</p>
                                <h4 class="what">What you will learn?</h4>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            <!------Start of course content section-------->
                            <section class="course-content">
                                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> course content</h3><hr class="hr">
                                <div class="content-bar">
                                    <div class="head-bar">
                                        <h4><i class="fa fa-file" aria-hidden="true"></i>{{$course->name}}<span><i class="fa fa-angle-down" aria-hidden="true"></i></span></h4>
                                    </div>
                                    <div class="bar-content">
                                        <h6><i class="fa fa-clock-o" aria-hidden="true"></i>{{$course->hours}} per week, for {{$course->duration}}</h6>
                                        <p>{{$course->description}}.</p>
                                    </div>
                                </div>
                       
                            </section>
                            <!------End of course content section-------->
                            <div class="instructor">
                                <h4>Your Instructor</h4>
                                <img src="{{$course->user['image']}}" alt="instructor-image">
                                <h5>{{$course->user['name']}}</h5>
                                <p>senior {{$course->name}} developer</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="left-content">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i><span>Lenght:</span>{{$course->duration}}</p><hr>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i><span>Effort:</span>{{$course->hours}} per week</p><hr>
                            <p><i class="fa fa-tag" aria-hidden="true"></i><span>Price:</span>{{$course->price}}</p><hr>
                            <p><i class="fa fa-university" aria-hidden="true"></i><span>Institution:</span>{{$course->company_name}}</p><hr>
                            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Subject:</span>{{$course->name}}</p><hr>
                            <p><i class="fa fa-sun-o" aria-hidden="true"></i><span>Level:</span>{{$course->level()->first()->name}}</p><hr>
                            <p><i class="fa fa-university" aria-hidden="true"></i><span>Language:</span>{{$course->language()->first()->name}}</p><hr>
                            <p><i class="fa fa-video-camera" aria-hidden="true"></i><span>Video Transcript:</span>{{$course->video()->first()->name}}</p><hr>
                            <h4>Prerequisties</h4>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
