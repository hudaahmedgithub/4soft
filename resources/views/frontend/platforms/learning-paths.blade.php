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
                                <li><a  href="{{route('courses_objectives')}}">objectives</a></li>
                                <li><a href="{{route('after_learning')}}">after learning</a></li>
                                <li><a href="{{route('learning_paths')}}"class="active">Learning paths</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-1 d-none d-lg-block d-xl-block"></div>
                    <div class="col-md-8">
					@foreach($courses as $course)
                        <div class="courses-section">
                            <div class="course-card">
                                <img src="{{url('images',$course->image)}}" alt="course image">
                                <div class="description">
                                    <h4>{{$course->name}}</h4>
                                    <p>{{$course->description}}!</p><hr>
                                    <a href="{{route('course-details',$course->id)}}"><button class="btn">read more</button></a>
                                </div>
                            </div>
                        </div>
                   @endforeach
                    </div>
                </div>
                
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>