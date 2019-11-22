<!DOCTYPE html>
<html>
    <head>
	
        <meta charset="utf-8">
        <title>courses</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('blog/blog.css')}}">
    </head>
    <body>
        <section class="courses">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside>
                             <ul class="list-unstyled">
                                <li><a href="{{route('courses_objectives')}}">objectives</a></li>
                                <li><a href="{{route('after_learning')}}"class="active">after learning</a></li>
                                <li><a href="{{route('learning_paths')}}" >Learning paths</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-1 d-none d-lg-block d-xl-block"></div>
                    <div class="col-md-8">
                        <section class="after-learning">
                            <img class="main-img" src="{{asset('images/main-bg.jpg')}}" alt="main" width="100%" height="300px">
                            <div class="main-desc">
                                <h3> after learning features</h3><hr>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, quae? Vitae, vel odit quia asperiores nihil recusandae. Fuga ipsa debitis nihil, inventore temporibus quia commodi dolore recusandae quo impedit libero?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, quae? Vitae, vel odit quia asperiores nihil recusandae. Fuga ipsa debitis nihil, inventore temporibus quia commodi dolore recusandae quo impedit libero?</p>
                            </div><hr>
				@foreach($courses as $course)
                            <div class="content-bar">
                                <div class="head-bar">
                                    <h4><i class="fa fa-file" aria-hidden="true"></i>
										
										
										{{$course->name}}<span><i class="fa fa-angle-down" aria-hidden="true"></i></span></h4>
                                </div>
                                <div class="bar-content">
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i>{{$course->hours}}, for {{$course->duration}}</h6>
                                    <p>{{$course->description}}.</p> 
                                </div>
                            </div>
                  @endforeach  
                        </section>
                        <!------End of course content section-------->
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>