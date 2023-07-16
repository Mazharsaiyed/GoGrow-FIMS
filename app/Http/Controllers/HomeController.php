<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
use App\Mail\SendMail;
use App\Category;
use App\Seed;
use App\Feedback;
use App\UsefulLinks;
use App\Pesticides;
use App\Fertilizer;
use App\FaqQuestion;
use App\Crop;
use App\User;
use Session;
use Hash;
use Auth;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::withCount('articles')
            ->with(['articles' => function($query) {
                $query->orderBy('id', 'desc');
            }])
            ->paginate(10);
        $faq = FaqQuestion::join('faq_categories','faq_categories.id','faq_questions.category_id')->select('faq_questions.*','faq_categories.category')->take(4)->get();
        return view('index', compact('categories','faq'));
    }

    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }

    public function forgetPassword()
    {
        return view('forgot-password');
    }

    public function forgetPasswordStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
        $newUser = User::where('email',$request->email)->first();
        $newUser->password = Hash::make($request->password);
        $newUser->save();

        $to_email = $request->email;
        $subject = 'Forgot Password';
        $message = 'Your password is successfully changed, new Password is - '.$request->password;
        $headers = 'From: gogrow23@gmail.com';
        $suc= mail($to_email,$subject,$message,$headers);

        return redirect()->route('sign-in')->with('success', 'Password Changed Successfully.');
    }
    public function registerStore(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|min:9',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'dob' => 'required',
            // 'gender' => 'required',
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
        $newUser = User::create();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->phone = $request->phone;
        $newUser->country = $request->country;
        $newUser->state = $request->state;
        $newUser->city = $request->city;
        $newUser->dob = $request->dob;
        // $newUser->gender = $request->gender;
        $newUser->address = $request->address;
        $newUser->save();
        $newUser->roles()->sync(2);

        $to_email = $request->email;
        $subject = 'Register';
        $message = 'Thanks for register with GoGrow, Now you can login to your account and get all details.';
        $headers = 'From: gogrow23@gmail.com';
        $suc= mail($to_email,$subject,$message,$headers);

        return redirect()->route('sign-in')->with('success', 'Register Successfully.');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/')->with('success', 'Logout Successfully.');
    }

    public function handle()
    {
        $botman = app('botman');
        
        $botman->hears('{message}', function($botman, $message) {
            if ($message == 'What is farming?') {
                $botman->reply("Farming is the practice of cultivating plants and rearing animals for food, fiber, medicinal plants, and other products used to sustain and enhance human life.");
            }elseif($message == 'farming'){
                $botman->reply("Farming is the practice of cultivating plants and rearing animals for food, fiber, medicinal plants, and other products used to sustain and enhance human life.");
            }
            elseif($message == 'What is farming'){
                $botman->reply("Farming is the practice of cultivating plants and rearing animals for food, fiber, medicinal plants, and other products used to sustain and enhance human life.");
            }
            elseif ($message == 'What are crops?') {
                $botman->reply("Crops are plants that are grown and harvested for agricultural purposes, such as food, feed, fiber, or fuel.");
            }
            elseif ($message == 'crops') {
                $botman->reply("Crops are plants that are grown and harvested for agricultural purposes, such as food, feed, fiber, or fuel.");
            }
            elseif ($message == 'What are crops') {
                $botman->reply("Crops are plants that are grown and harvested for agricultural purposes, such as food, feed, fiber, or fuel.");
            }
            elseif ($message == 'What are the types of crops') {
                $botman->reply("There are various types of crops, including cereals (e.g., rice, wheat, corn), legumes (e.g., soybeans, lentils, peanuts), vegetables (e.g., tomatoes, carrots, lettuce), fruits (e.g., apples, oranges, bananas), and cash crops (e.g., cotton, tobacco, coffee).");
            }
            elseif ($message == 'What are the types of crops?') {
                $botman->reply("There are various types of crops, including cereals (e.g., rice, wheat, corn), legumes (e.g., soybeans, lentils, peanuts), vegetables (e.g., tomatoes, carrots, lettuce), fruits (e.g., apples, oranges, bananas), and cash crops (e.g., cotton, tobacco, coffee).");
            }
            elseif ($message == 'types') {
                $botman->reply("There are various types of crops, including cereals (e.g., rice, wheat, corn), legumes (e.g., soybeans, lentils, peanuts), vegetables (e.g., tomatoes, carrots, lettuce), fruits (e.g., apples, oranges, bananas), and cash crops (e.g., cotton, tobacco, coffee).");
            }
            elseif ($message == 'crops type') {
                $botman->reply("There are various types of crops, including cereals (e.g., rice, wheat, corn), legumes (e.g., soybeans, lentils, peanuts), vegetables (e.g., tomatoes, carrots, lettuce), fruits (e.g., apples, oranges, bananas), and cash crops (e.g., cotton, tobacco, coffee).");
            }
            elseif ($message == 'What are seeds?') {
                $botman->reply("Seeds are the reproductive units of plants that contain the embryo and necessary nutrients to support the growth and development of a new plant.");
            }
            elseif ($message == 'seeds?') {
                $botman->reply("Seeds are the reproductive units of plants that contain the embryo and necessary nutrients to support the growth and development of a new plant.");
            }
            elseif ($message == 'What are seeds') {
                $botman->reply("Seeds are the reproductive units of plants that contain the embryo and necessary nutrients to support the growth and development of a new plant.");
            }
            elseif ($message == 'What is the importance of seeds in farming') {
                $botman->reply("Seeds are crucial in farming as they are the starting point for growing crops. High-quality seeds with desirable traits ensure better yields, disease resistance, and overall crop productivity.");
            }
            elseif ($message == 'What is the importance of seeds in farming?') {
                $botman->reply("Seeds are crucial in farming as they are the starting point for growing crops. High-quality seeds with desirable traits ensure better yields, disease resistance, and overall crop productivity.");
            }
            elseif ($message == 'What factors should be considered when selecting seeds for planting?') {
                $botman->reply("Important factors to consider include the crop's adaptability to the local climate, disease resistance, yield potential, maturity period, and desired qualities (e.g., taste, size, color).");
            }
            elseif ($message == 'What are fertilizers?') {
                $botman->reply("Fertilizers are substances applied to soil or plants to provide essential nutrients that may be deficient in the soil, thereby enhancing plant growth and crop yield.");
            }
            elseif ($message == 'What are fertilizers') {
                $botman->reply("Fertilizers are substances applied to soil or plants to provide essential nutrients that may be deficient in the soil, thereby enhancing plant growth and crop yield.");
            }
            elseif ($message == 'fertilizers') {
                $botman->reply("Fertilizers are substances applied to soil or plants to provide essential nutrients that may be deficient in the soil, thereby enhancing plant growth and crop yield.");
            }
            elseif ($message == 'What are the types of fertilizers?'){
                $botman->reply("Fertilizers can be classified as organic (e.g., compost, manure) or inorganic (e.g., nitrogen, phosphorus, potassium fertilizers). Inorganic fertilizers are further categorized as nitrogenous, phosphatic, or potassic fertilizers.");
            }
            elseif ($message == 'How do fertilizers help in farming?') {
                $botman->reply("Fertilizers provide essential nutrients that plants need to grow, such as nitrogen, phosphorus, and potassium. They replenish nutrient deficiencies in the soil, promote healthy plant growth, and increase crop yields.");
            }
            elseif ($message == 'What is sustainable farming?') {
                $botman->reply("Sustainable farming refers to the practice of cultivating crops and rearing animals in an environmentally responsible manner that conserves natural resources, protects the ecosystem, and maintains long-term productivity.");
            }
            else{
                $botman->reply("This is testing Bot...");
            }
  
        });
        $botman->listen();
    }
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Nice to meet you '.$name);
        });
    }

    public function product_crop()
    {
        $crops = Crop::all();
        $post = Crop::find(1);
        $post->notify(new PostPublished());
        return view('products', compact('crops'));
    }
    public function product_seed()
    {
        $seeds = Seed::all();
        return view('seeds',compact('seeds'));
    }
    public function product_soil()
    {
        return view('products');
    }
    public function product_pesticide()
    {
        $pesticide = Pesticides::all();
        return view('pesticides', compact('pesticide'));
    }
    public function product_land()
    {
        return view('products');
    }
    public function product_fertilizer()
    {
        $fertilizer = Fertilizer::all();
        return view('fertilizer', compact('fertilizer'));
    }
    public function usefullink()
    {
        $UsefulLinks = UsefulLinks::all();
        return view('useful-links', compact('UsefulLinks'));
    }
    public function feedback_form( Request $request)
    {
        $feedbacks = Feedback::create();
        $feedbacks->name = $request->name;
        $feedbacks->email = $request->email;
        $feedbacks->subject = $request->subject;
        $feedbacks->message = $request->message;
        $feedbacks->save();

        $to_email = $request->email;
        $subject = 'Feedback';
        $message = 'Thank you for feedback, our team will get in touch with you.';
        $headers = 'From: gogrow23@gmail.com';
        $suc= mail($to_email,$subject,$message,$headers);

        return redirect('/')->with('success', 'Thank you for your feedback Successfully.');
    }

    public function detail_mail(Request $request)
    {
        // $to_email = Auth::user()->email;
        $to_email = "developer.navjot99@gmail.com";
        $subject = 'Details';
        $message = 'Click on this and download PDF for details '.$request->pdfname;
        $headers = 'From: gogrow23@gmail.com';
        mail($to_email,$subject,$message,$headers);

        return redirect()->back()->with('success', 'Mail sent successfully.');
    }

    public function openAi()
    {
        return view('openAi');  
    }
    //chatgpt
    public function open_ai(Request $request)
    {
        
        $search = $request->title;
  
        $data = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
                  ])
                  ->post("https://api.openai.com/v1/chat/completions", [
                    "model" => "gpt-3.5-turbo",
                    'messages' => [
                        [
                           "role" => "user",
                           "content" => $search
                       ]
                    ],
                    'temperature' => 0.5,
                    "max_tokens" => 200,
                    "top_p" => 1.0,
                    "frequency_penalty" => 0.52,
                    "presence_penalty" => 0.5,
                    "stop" => ["11."],
                  ])
                  ->json();
        $response = $data['choices'][0]['message'];
        return view('openAi', compact('search', 'response'));  
        return response()->json($data['choices'][0]['message'], 200, array(), JSON_PRETTY_PRINT);
    }
}
