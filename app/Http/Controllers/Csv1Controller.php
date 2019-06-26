<?php

namespace App\Http\Controllers;
use App\Csv;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function showForm(Request $request)
    {   
        
        $area = $request->area;
        $busval = $request->busval;
        $data = array(
            'area'=>$area,
            'bus'=>$busval
        );
        return view('upload')->with('data',$data);

    }

    public function store(Request $request)
    {   
        
        // echo "csvfile controller";
        //get file
        $upload=$request->file('upload-file');
        $filePath=$upload->getRealPath();
        //open and read
        $file=fopen($filePath, 'r');

        $header= fgetcsv($file);
        // print_r($header);
        echo "<br>";
        $header_ar = [];
        $header_ar = explode(';', $header[0]);
        // print_r($header_ar);/
        $escapedHeader=[];
        array_push($escapedHeader, $header_ar);
        // echo "escapeHeader";
        while($columns = fgetcsv($file))
        {
            // echo "<br>";
            $columns_ar=[];
            $columns_ar = explode(';', $columns[0]);
            // print_r($columns_ar);
            if($columns[0]=="")
            {
                continue;
            }
            
           $data= array_combine($escapedHeader[0], $columns_ar);
            // echo "<br>";
            // print_r($data);

           //FirstName;LastName;Phone;Address;City;State;County;Zip;Age;Email;Timezone;Gender
           // Table update
           $firstname=$data['FirstName'];
           $lastname=$data['LastName'];
           $phone=$data['Phone'];
           $address=$data['Address'];
           $city=$data['City'];
           $state=$data['State'];
           $county=$data['County'];
           $zip=$data['Zip'];
           $age=$data['Age'];
           $email=$data['Email'];
           $timezone=$data['Timezone'];
           $gender=$data['Gender'];

           $csvfile = Csv::firstOrNew(['Email'=>$email]);
           $csvfile->firstname = $firstname;
           $csvfile->lastname = $lastname;
           $csvfile->phone = $phone;
           $csvfile->address = $address;
           $csvfile->city = $city;
           $csvfile->state = $state;
           $csvfile->county = $county;
           $csvfile->zip = $zip;
           $csvfile->age = $age;
           $csvfile->email = $email;
           $csvfile->timezone = $timezone;
           $csvfile->gender = $gender;
           $csvfile->save();

        }
       
        return view('upload');
        
    }

    public function exportForm()
    {
        $data = Csv::all();
        return view('export')->with("data", $data);
        // return view('export', $data);
    }
    // public function list()
    // {
    //     return view('list');
    //     // return view('export', $data);
    // }
    
    public function getlist($id)
    {
        $buss = $id;
        return view('list')->with("buss", $buss);
        // return view('export', $data);
    }

    public function export(Request $request){
        $export = $request->exportId;
        $exportName = $request->exportName;
        $export_arr = explode(';', $export);
        $enter_data=[];
        foreach($export_arr as $value1){
            $export_data=Csv::where('id',$value1)->first();
            array_push($enter_data,$export_data);
        }
        
        $tot_record_found=0;
        if(count($export_data)>0){
            $tot_record_found=1;
             
            $CsvData=array('FirstName;LastName;Phone;Address;City;State;County;Zip;Age;Email;Timezone;Gender');          
            foreach($enter_data as $value){      
                $CsvData[]=$value->firstname.';'.$value->lastname.';'.$value->phone.';'.$value->address.';'.$value->city.';'.$value->state.';'.$value->county.';'.$value->zip.';'.$value->age.';'.$value->email.';'.$value->timezone.';'.$value->gender;
            }
             
            $filename=$exportName.'.'.date('Y-m-d').".csv";
            $file_path=base_path().'/'.$filename;   
            $file = fopen($file_path,"w+");
            foreach ($CsvData as $exp_data){
            //   fputcsv($file,explode(',',$exp_data));
              fputcsv($file,array($exp_data));
            }   
            fclose($file);          
     
            $headers = ['Content-Type' => 'application/csv'];
            return response()->download($file_path,$filename,$headers );
        }
        return view('download',['record_found' =>$tot_record_found]); 
   

    }
}
