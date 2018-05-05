<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplicationType;
use App\Theme;
use App\Subtheme;

use App\Application;
use App\PublicationType;
use Auth;
use App\User;
use App\Organization;
use App\Country;
use App\Title;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantType = Auth::user()->participantType;
        //habis daftar, isi information
        if(empty(Auth::user()->gender)){
                return redirect()->route('information');
        }else{
            //jika information sudah diisi, jika author, isi application
            if($participantType->type == 'Author'){
                //jika udah punya application
                if (Application::where('participant_id', '=', Auth::user()->id)->count() > 0) {
                   return redirect()->route('summary');
                }
                return redirect()->route('application');
            }else{
                return redirect()->route('summary');
            }    
        }

    }

    public function application(){
        $applicationType = ApplicationType::all();
        $themes = Theme::all();
        $pubType = PublicationType::all();

         if(!empty(Auth::user()->application)){
            $application = Auth::user()->application;
            $subtheme = Subtheme::where('id_theme', '=', $application->subtheme->theme->id)->get();
        }

        return view('application',compact("applicationType", "themes", "pubType", "application", "subtheme"));
    }

    public function storeApplication(Request $request){
     $validatedData = $request->validate([
        'cb_typeappli' => 'required',
        'subtheme' => 'required',
        'paper_title' => 'required|max:255',
        'paper_abstract' => 'required|max:1500',
        'paper_keywords' => 'required|max:255',
        'rd_ftime' => 'required',
        'rd_pub' => 'required',
    ]);

     $app = new Application;
     $app->participant_id = Auth::user()->id;
     $app->apptype_id = $request->cb_typeappli;
     $app->subtheme_id = $request->subtheme;
     $app->title = $request->paper_title;
     $app->abstract = $request->paper_abstract;
     $app->keyword = $request->paper_keywords;
     $app->firstsubmit = $request->rd_ftime;
     $app->publication_id = $request->rd_pub;

     $app->save();

     return redirect()->route('home');
 }


 public function information(){
    $organizationType = Organization::all();
    $countries = Country::orderBy('country_name', 'asc')->get();
    $titles = Title::all();
    if(!empty(Auth::user()->organization))
        $user = Auth::user();

    return view('information', compact("organizationType", "countries", "titles", "user"));
}

public function updateInfo(Request $request){

     $user = User::find(Auth::user()->id);
     $user->gender = $request->rd_gender;
     $user->student = $request->rd_student;

     //jika student minta upload kartu identitas (wajib)
     if($user->student == "Yes"){
        $file = $request->file('file_upload');
        if(!empty($file)){
            $name = str_slug($user->firstname." ".$user->lastname).".".$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'public/studentid', $name
            );
            $user->studentid = $name;
        }
     }

     
     $user->funding = $request->rd_fundsupport;

     if($user->funding == "Yes"){
        $user->fundingsource = $request->txt_fsupport;
        $user->contribution = NULL;
     }else{
        $user->contribution = $request->tx_contribution;
        $user->fundingsource = NULL;
     }

     $user->allergies = $request->txt_foodalergies;
    $user->organization = $request->organi;
    $user->type_organization_id = $request->typeorga;
    $user->type_title_id = $request->title;
    $user->countries_id = $request->country;
      $user->save();


     return redirect()->route('home');
}

public function storeInfo(Request $request){
    $validatedData = $request->validate([
        'file_upload' => 'sometimes|required|file|max:2000'
       
    ]);

     $user = User::find(Auth::user()->id);
     $user->gender = $request->rd_gender;
     $user->student = $request->rd_student;

     //jika student minta upload kartu identitas (wajib)
     if($user->student == "Yes"){
        $file = $request->file('file_upload');
        
            $name = str_slug($user->firstname." ".$user->lastname).".".$file->getClientOriginalExtension();
            $path = $file->storeAs(
                'public/studentid', $name
            );
            $user->studentid = $name;
        
     }

     
     $user->funding = $request->rd_fundsupport;

     if($user->funding == "Yes"){
        $user->fundingsource = $request->txt_fsupport;
        $user->contribution = NULL;
     }else{
        $user->contribution = $request->tx_contribution;
        $user->fundingsource = NULL;
     }

     $user->allergies = $request->txt_foodalergies;
    $user->organization = $request->organi;
    $user->type_organization_id = $request->typeorga;
    $user->type_title_id = $request->title;
    $user->countries_id = $request->country;
      $user->save();


     return redirect()->route('home');
    }

    public function summary(){
        return view('summary');
    }

    public function about(){
        return view('about');
    }

    public function speaker(){
        return view('speaker');
    }

    public function theme(){
        return view('theme');
    }

    public function schedule(){
        return view('schedule');
    }

    public function guideline(){
        return view('guideline');
    }

   public function guidelineauthor(){
        return view('guidelineauthor');
    }

    public function exhibition(){
        return view('exhibition');
    }

    public function venue(){
        return view('venue');
    }

    public function accomodation(){
        return view('accomodation');
    }
}
