<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Plan;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $abouts = About::all();
        $services = Service::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::all();
        $course = Course::all();
        $seos = Seo::where('page', 'index')->get();
        return view('frontend.index', compact('banners', 'abouts', 'services', 'teams', 'testimonials', 'blogs', 'course', 'seos'));
    }

    public function about()
    {
        $abouts = About::all();
        $testimonials = Testimonial::all();
        $seos = Seo::where('page', 'about')->get();
        return view('frontend.about', compact('testimonials', 'abouts', 'seos'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        //        $categories = Category::withCount('posts')->get(); // Assuming 'Category' model and 'posts' relationship
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get(); // Fetch the 5 most recent posts
        $seos = Seo::where('page', 'blog')->get();
        return view('frontend.blog', compact('blogs', 'recentPosts', 'seos'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $blogs = Blog::where('title', 'like', "%$query%")
            ->orWhere('short_description', 'like', "%$query%")
            ->get();

        //        $categories = Category::withCount('posts')->get();
        $seos = Seo::where('page', 'blog')->get();
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.blog', compact('blogs', 'recentPosts', 'seos'));
    }


    public function contact()
    {
        $seos = Seo::where('page', 'contact')->get();
        return view('frontend.contact', compact('seos'));
    }

    public function course()
    {
        $services = Service::all();
        $course = Course::all();
        $seos = Seo::where('page', 'course')->get();
        return view('frontend.course', compact('services', 'seos', 'course'));
    }

    public function single(Blog $blog)
    {
        $blogs = Blog::all();
        $seos = Seo::where('page', 'blog')->get();
        return view('frontend.single', compact('blog', 'blogs', 'seos'));
    }

    public function teacher()
    {
        $teams = Team::all();
        $seos = Seo::where('page', 'teacher')->get();
        return view('frontend.teacher', compact('teams', 'seos'));
    }

    public function coursesdetails(Course $courses)
    {
        //        dd($courses);
        //        $seos = Seo::where('page', 'course')->get();
        $seos = Seo::where('course_id', $courses->id)->get();
        //        dd($seos);
        return view('frontend.courses-details', compact('seos', 'courses'));
    }

    public function thankyou()
    {
        $seos = Seo::where('page', 'index')->get();
        return view('frontend.thankyou', compact('seos'));
    }

    public function career()
    {
        $seos = Seo::where('page', 'career')->get();
        return view('frontend.career', compact('seos'));
    }

    public function jobdetail()
    {
        $seos = Seo::where('page', 'career')->get();
        return view('frontend.jobdetail', compact('seos'));
    }
}
