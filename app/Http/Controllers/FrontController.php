<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\Memeber;
use App\Models\Section;
use App\Models\Portfolio;
use App\Objective;
use App\Course;
use App\Models\Preview\Service;
use Illuminate\Support\Facades\View;
use App\Http\Requests\Backend\Contact\ContactPost;

class FrontController extends Controller
{
	/**
	 * Class Constructor
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$skills 	= Skill::all();
		$settings 	= Setting::all();
		$services 	= Service::all();
		$memebers 	= Memeber::all();
		$portfolios = Portfolio::all();

		View::share ( 'skills', $skills );
		View::share ( 'settings', $settings );
		View::share ( 'services', $services );
		View::share ( 'memebers', $memebers );
		View::share ( 'portfolios', $portfolios );

	}

	/**
	 * Display the website landing page
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function landing()
	{
		$skills 	= Skill::all();
		$settings 	= Setting::all();
		$services 	= Service::all();
		$members 	= Memeber::all();
		$portfolios = Portfolio::all()->groupBy('type');

		/* foreach ($portfolios as $key => $value) {
			foreach ($value as $val) {
				echo $val->name . "<br>";
			}
			print_r($key);
		} */

		return view('frontend.new.home', compact('skills', 'services', 'settings', 'members', 'portfolios'));
	}

	/**
	 * Display the conact page
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function contactForm()
    {
		return view('frontend.sections.contact');
    }

	/**
	 * Make a Contact Request
	 *
	 * @param  \App\Http\Requests\Backend\Contact\ContactPost $request
	 * @return \Illuminate\Http\Response
	 */
    public function contact(ContactPost $request)
    {
		$contactData =  $request->all();
		$contactData['type'] = "receiver";
		
		Contact::create($contactData);
		
		return response()->json([
			'message' => 'Message Sent Successfully',
			'type' => 'success',
		], 200);

	}
	
	/**
	 * Display the about page
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function about()
    {
		return view('frontend.sections.about');
    }
	
	public function index()
	{
		$objectives=Objective::all();
		return view('frontend.platforms.index',compact('objectives'));
	}
	
	public function learning()
	{
		$courses=Course::all();
		return view('frontend.platforms.learning-paths',compact('courses'));
	}
	
	public function afterLearning()
	{
		$courses=Course::all();
		return view('frontend.platforms.after_learning',compact('courses'));
	}
	
	public function courseDetails($id)
	{
		$course=Course::findOrfail($id);
	
		return view('frontend.platforms.courses_details',compact('course'));
	}
}
