<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use File;
use app\User;

use App\Models\Questions;
use App\Models\UploadFiles;


class QuestionController extends Controller
{
    public function index() {
        return view('question');
    }

    public function allquestions() {
        return view('allquestions');
    }

    public function math_question(Request $request) {
        $id = $request->id;
        return view('math-question')->with([
            'id' => $id
        ]);
    }

    public function upload_file(Request $request) {
        $target_dir = 'upload/question_file/';
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $rand = rand();
        $fileName = explode('.',$imageName);
        $firstName = $fileName[0].$rand;
        $secondName = $fileName[1];
        if($secondName == 'png' || $secondName == "pdf" || $secondName == "doc" || $secondName == "docx") {
            $newName = $firstName.'.'.$secondName;

            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $target_file = $target_dir . $newName;
           
            $msg = "";
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $msg = "Successfully uploaded";
            } else {
            $msg = "Error while uploading";
            }
            echo $msg;
        }
    }

    public function question_upload(Request $request) {
        $u_id = Auth::user()->id;
        $s_id = $request->s_id;
        $q_title = $request->q_title;
        $question = $request->question;
        
        $res = Questions::create([
            'u_id' =>$u_id, 's_id'=>$s_id, 'q_title'=>$q_title, 'question'=>$question
        ]);
        $q_id = $res->id;

        $source_dir = 'upload/question_file/';
        $target_dir = 'storage/questions_file/';
        if (!is_dir($target_dir)) {
          if (!mkdir($target_dir, 0777, true)) {
            echo 'fail';
            exit;
          }
        }
        foreach (scandir($source_dir) as $key => $file) {
          if ($file == '.' || $file == '..')
            continue;
          copy($source_dir . $file, $target_dir . $file);
          unlink($source_dir . $file);
          $uploadFile = $target_dir . $file;
         
          $res = UploadFiles::create([
                'q_id'=>$q_id, 'file_pass'=>$uploadFile
          ]);
        }
        $success = "success";
        return response()->json(['data' => $success]);
    }

    public function phy_question() {
        return view('phy-question');
    }

    public function che_question() {
        return view('che-question');
    }

    public function bio_question() {
        return view('bio-question');
    }

    public function his_question() {
        return view('his-question');
    }

    public function geo_question() {
        return view('geo-question');
    }

    public function eng_question() {
        return view('eng-question');
    }
}
