<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Jobs\contactusjob;

class contactus extends Controller
{

    protected function subjectCheck(){

    }
    //
    public function index(Request $req){

        $contact=new Contact;
       $name= $contact->name=$req->name;
       $email= $contact->email=$req->email;
       $mobail= $contact->phone=$req->phone;
       $subject= $contact->subject=$req->subject;
       $msg= $contact->message=$req->message;
        $contact->save();

        switch ($subject) {
            case "Retail Partnership":
                $departmentUseremail="paras@roots-and-stalks.com";
                $departmentUsername="Paras";
              break;
            case "Career Options":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Bhautik";
              break;
            case "Brand Partnership":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="jaydeep";
              break;
            case "Retail Partnership":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Priyanka";
              break;
            case "Career Options":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Bhavesh";
              break;
            case "Brand Partnership":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Gargi";
              break;
            case "Others":
                $departmentUseremail="tifamtifins@gmail.com";
                $departmentUsername="Nehal";
             break;
          }
        $data=[
            "department_user_name"=>$departmentUsername,
            "name"=>$name,
            "email"=>$email,
            "mobail"=>$mobail,
            "subject"=>$subject,
            "msg"=>$msg
        ];

       $job= dispatch(new contactusjob($data,$departmentUseremail));
       if(isset($job)){
           return response(["msg"=>"Thank You for Conencting".$name." us. We Contact As Soon Possibel"]);
       }
    }

}

