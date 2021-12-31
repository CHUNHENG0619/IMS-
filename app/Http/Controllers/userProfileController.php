<?php

namespace App\Http\Controllers;
use App\Models\intern;
use App\Models\Payslip;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class userProfileController extends Controller
{

    // PaySilp 
    public function viewPaySlip($payslip_id)
    {
        $payslip = DB::select('select * from payslips where payslip_id = ?', [$payslip_id]) ;
        if ($payslip) { 
            return  response()->json( 
                [ 'status'=>202,
                'Payslip'=>$payslip,
        ]);
        }
        else{
            
                return response()->json([
                    'status'=>404,
                    'message'=>'payslip no found',
                ]);
            }
        }

        // View Education 
        public function viewEducation ($edu_id)
        {
            $edu = DB::select('select * from educations where edu_id = ?', [$edu_id]) ;
            if ($edu) { 
                return  response()->json( 
                    [ 'status'=>202,
                    'edu'=>$edu,
            ]);
            }
            else{
                
                    return response()->json([
                        'status'=>404,
                        'message'=>'Education no found',
                    ]);
                }
            }

            // Edit Education 
            public function educationUpdate(Request $request, $edu_id)
            {
                $edu=Education::find($edu_id);
                $edu->current_edu_level = $request->current_edu_level;
                $edu->current_edu_institution = $request->current_edu_institution; 
                $edu->current_institution_location = $request->current_institution_location; 
                $edu->study_field = $request->study_field;
                $edu->grad_period = $request->grad_period;
                $result = $edu->save();
                if($result){
        
                    return["result"=>"Post update"];
        
                }
                else{
                    return["result"=>"Post No update"];
        
                }
                 
            }

            // User Profile 
            public function ViewProfile($intern_id){
                $intern= intern::find($intern_id);
                if($intern){
                    return response()->json([
                        'status'=>200,
                        'intern'=>$intern,
                    ]);
                }else{
                    return response()->json([
                        'status'=>404,
                        'message'=>'Intern no found',
                    ]);
                }
            }
            
            //update Profile 
            public function updateProfile(Request $request, $intern_id)
            {
                $validator = Validator::make($request->all(),[
                    'intern_name'=>'required|max:255',
                    'intern_department'=>'required|max:255',
                    'intern_email'=>'required|max:60',
                    'intern_phone'=>'required|max:20',
        
                ]);
        
                    if($validator->fails()){
                        return response()->json([
                            'status'=>400,
                            'errors'=>$validator->errors(),         
                              ]);
                    }
                    else{
                        $intern = intern::find($intern_id);
                        if ($intern) {
                            $intern->intern_name =$request->input('intern_name');
                            $intern->intern_department =$request->input('intern_department');
                            $intern->intern_email =$request->input('intern_email');
                            $intern->intern_phone =$request->input('intern_phone');
                            $intern->update();
                            return response()->json([
                                'status'=>200,
                                'message'=>'Successfully Update ',
                            ]); 
                
                        }
                        else{
                            return response()->json([
                                'status'=>404,
                                'message'=>'Upload fail',
                            ]);
                        }
                    }
            }

   
}
