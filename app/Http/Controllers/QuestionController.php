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


    public function question_post(Request $request) {
        $id = $request->id;
        if($id == "1") {
            return view('math-question')->with([
                'id' => $id
            ]);
        }
        else if($id == "2") {
            return view('phy-question')->with([
                'id' => $id
            ]);
        }
        else if($id == "3") {
            return view('che-question')->with([
                'id' => $id
            ]);
        }
        else if($id == "4") {
            return view('bio-question')->with([
                'id' => $id
            ]);
        }
        else if($id == "5") {
            return view('his-question')->with([
                'id' => $id
            ]);
        }
        else if($id == "6") {
            return view('geo-question')->with([
                'id' => $id
            ]);
        }
        else if($id == "7") {
            return view('eng-question')->with([
                'id' => $id
            ]);
        }
        
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
        $question_id = $res->id;
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
          
          $q_id = $res->id;
        
          $res_1 = UploadFiles::create([
                'q_id'=>$q_id, 'file_path'=>$uploadFile, 'file_name'=>$file
          ]);
          
        }
        $success = "success";
        return response()->json(['data' => $success, 'questionId' => $question_id]);
    }

    
    public function allquestions() {
        $questions = Questions::all();
       
        return view('allquestions')->with([
            'questions' => $questions
        ]);
    }
}
