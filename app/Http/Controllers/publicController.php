<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class publicController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function student()
    {
        $students = [
            [
                'name' => 'John',
                'age' => 20,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Domenico',
                'age' => 21,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Jack',
                'age' => 34,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Marco',
                'age' => 31,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Nicola',
                'age' => 25,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Pietro',
                'age' => 36,
                'surname' => 'Doe'
            ],
            
            
            
        ];
        
        return view('student', compact('students'));
    }
    public function show($name){
        $students = [
            [
                'name' => 'John',
                'age' => 20,
                'surname' => 'Doe'
                
            ],
            [
                'name' => 'Domenico',
                'age' => 21,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Jack',
                'age' => 34,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Marco',
                'age' => 31,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Nicola',
                'age' => 25,
                'surname' => 'Doe'
            ],
            [
                'name' => 'Pietro',
                'age' => 36,
                'surname' => 'Doe'
            ],
            
            
            
        ];
        foreach($students as $student){
            if($student['name'] == $name){
                return view('show', compact('student'));
            }
        }
        
        
    }
    public function submit(Request $request){
        
        $email= $request->mail;
        $name= $request->name;
        $message= $request->word;
        
        $contUser= compact('email', 'name', 'message');
        try {
            Mail::to('student@hack138.it')->send(new ContactMail($contUser));
            Mail::to($email)->send(new UserMail($contUser));
        } catch (\Exception $e) {
            return redirect()->route('homepage') -> with('errorMessage', 'C\'è stato un errore con il server, riprova più tardi');
        }
        
        
        
        return redirect()->route('homepage') -> with('message', 'Grazie per averci contattato');
        
    }
}
