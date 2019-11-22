<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use \Dimsav\Translatable\Translatable;
class Course extends Model
{
	 //use Translatable;
	
	//public $translationModel = 'CourseTranslation';
    protected $guarded=[];
	public $translatedAttributes = ['name','description'];
	
	 protected $fillable = ['name','description','hours','duration','image','price','language_id','video_id','company_name','user_id'
    ];
    public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}
	
    public function video()
	{
		return $this->belongsTo('App\Video','video_id');
	}
	public function language()
	{
		return $this->belongsTo('App\Language','language_id');
	}
	
	public function level()
	{
		return $this->belongsTo('App\Level','level_id');
	}
	
}
