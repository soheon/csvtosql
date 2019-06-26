<?php

namespace App\Http\Controllers;
use App\Csv;

use App\business_database;
use App\new_business;
use App\business_opportunity_leads;
use App\buyers_database;
use App\consumers;
use App\donors_database;
use App\gamblers_database;
use App\hige_tech_leaders_database;
use App\hispanic_database;
use App\home_owners;
use App\insurance_database;
use App\internet_users;
use App\investors_database;
use App\medicare_opportunity_leads;
use App\payday_loan_leads;
use App\pet_lovers_database;
use App\professional_database;
use App\real_estate_database;
use App\sms_leads;
use App\swimming_pool_leads_database;
use App\time_share_owner_database;
use App\travelers_database;
use App\veteran_houehold_database;


use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function showForm(Request $request)
    {   
        $area = $request->area;
        $bus = $request->bus;
        $data = array(
            'area'=>$area,
            'bus'=>$bus
        );
        return view('upload')->with('data',$data);

    }

    public function store(Request $request)
    {   
        $bus = $request->busval;
        $area = $request->areaval;
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

        switch ($bus) {
            case "1":
                $csvfile = business_database::firstOrNew(['Email'=>$email]);
            break;
            case "2":
                $csvfile = new_business::firstOrNew(['Email'=>$email]);
            break;
            case "3":
            $csvfile = consumers::firstOrNew(['Email'=>$email]);

            break;
            case "4":
            $csvfile = home_owners::firstOrNew(['Email'=>$email]);

            break;
            case "5":
            $csvfile = investors_database::firstOrNew(['Email'=>$email]);

            break;
            case "6":
            $csvfile = buyers_database::firstOrNew(['Email'=>$email]);

            break;
            case "7":
            $csvfile = insurance_database::firstOrNew(['Email'=>$email]);

            break;
            case "8":
                $csvfile = time_share_owner_database::firstOrNew(['Email'=>$email]);

            break;
            case "9":
                $csvfile = internet_users::firstOrNew(['Email'=>$email]);

            break;
            case "10":
            $csvfile = business_opportunity_leads::firstOrNew(['Email'=>$email]);

            break;
            case "11":
            $csvfile = medicare_opportunity_leads::firstOrNew(['Email'=>$email]);

            break;
            case "12":
                $csvfile = payday_loan_leads::firstOrNew(['Email'=>$email]);

            break;
            case "13":
                $csvfile = hispanic_database::firstOrNew(['Email'=>$email]);

            break;
            case "14":
            $csvfile = travelers_database::firstOrNew(['Email'=>$email]);

            break;
            case "15":
                $csvfile = pet_lovers_database::firstOrNew(['Email'=>$email]);

            break;
            case "16":
                $csvfile = hige_tech_leaders_database::firstOrNew(['Email'=>$email]);

            break;
            case "17":
                $csvfile = professional_database::firstOrNew(['Email'=>$email]);
            break;
            case "18":
            $csvfile = donors_database::firstOrNew(['Email'=>$email]);

            break;
            case "19":
                $csvfile = sms_leads::firstOrNew(['Email'=>$email]);
            break;
            case "20":
                $csvfile = swimming_pool_leads_database::firstOrNew(['Email'=>$email]);
            break;
            case "21":
            $csvfile = gamblers_database::firstOrNew(['Email'=>$email]);

            break;
            case "22":
            $csvfile = real_estate_database::firstOrNew(['Email'=>$email]);

            break;
            case "23":
                $csvfile = veteran_houehold_database::firstOrNew(['Email'=>$email]);
            break;
        }
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
    $data = array(
        'area'=>$area,
        'bus'=>$bus
    );
    return view('upload')->with('data',$data);
        
    }

    public function exportForm(Request $request)
    {   
        $bus = $request->bus;
        $area = $request->area;
        switch ($bus) {
            case "1":
            // $users = User::where([
            //     'column1' => value1,
            //     'column2' => value2,
            //     'column3' => value3
            // ])->get();
                $csvfile = business_database::where(['state'=>$area])->get();
            break;
            case "2":
                $csvfile = new_business::where(['state'=>$area])->get();
            break;
            case "3":
                $csvfile = consumers::where(['state'=>$area])->get();

            break;
            case "4":
                $csvfile = home_owners::where(['state'=>$area])->get();

            break;
            case "5":
                $csvfile = investors_database::where(['state'=>$area])->get();

            break;
            case "6":
                $csvfile = buyers_database::where(['state'=>$area])->get();

            break;
            case "7":
                $csvfile = insurance_database::where(['state'=>$area])->get();

            break;
            case "8":
                $csvfile = time_share_owner_database::where(['state'=>$area])->get();

            break;
            case "9":
                $csvfile = internet_users::where(['state'=>$area])->get();

            break;
            case "10":
                $csvfile = business_opportunity_leads::where(['state'=>$area])->get();

            break;
            case "11":
                $csvfile = medicare_opportunity_leads::where(['state'=>$area])->get();

            break;
            case "12":
                $csvfile = payday_loan_leads::where(['state'=>$area])->get();

            break;
            case "13":
                $csvfile = hispanic_database::where(['state'=>$area])->get();

            break;
            case "14":
                $csvfile = travelers_database::where(['state'=>$area])->get();

            break;
            case "15":
                $csvfile = pet_lovers_database::where(['state'=>$area])->get();

            break;
            case "16":
                $csvfile = hige_tech_leaders_database::where(['state'=>$area])->get();

            break;
            case "17":
                $csvfile = professional_database::where(['state'=>$area])->get();
            break;
            case "18":
            $csvfile = donors_database::where(['state'=>$area])->get();

            break;
            case "19":
                $csvfile = sms_leads::where(['state'=>$area])->get();
            break;
            case "20":
                $csvfile = swimming_pool_leads_database::where(['state'=>$area])->get();
            break;
            case "21":
                $csvfile = gamblers_database::where(['state'=>$area])->get();

            break;
            case "22":
                $csvfile = real_estate_database::where(['state'=>$area])->get();

            break;
            case "23":
                $csvfile = veteran_houehold_database::where(['state'=>$area])->get();
            break;
        }
        $data = array(
            'area'=>$area,
            'bus'=>$bus,
            'csvdata'=>$csvfile
        );
        return view('export')->with("data", $data);
        // return view('export', $data);
    }

    
    public function getlist($id)
    {
        $buss = $id;
        return view('list')->with("buss", $buss);
    }

    public function export(Request $request){
        $export = $request->exportId;
        $exportName = $request->exportName;
        $bus= $request->bus;
        $export_arr = explode(';', $export);
        $enter_data=[];
               
        switch ($bus) {
            case "1":
                foreach($export_arr as $value1){
                    $export_data=business_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "2":
                foreach($export_arr as $value1){
                    $export_data=new_business::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "3":
                foreach($export_arr as $value1){
                    $export_data=consumers::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }

            break;
            case "4":
                foreach($export_arr as $value1){
                    $export_data=home_owners::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "5":
                foreach($export_arr as $value1){
                    $export_data=investors_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "6":
                foreach($export_arr as $value1){
                    $export_data=buyers_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "7":
                foreach($export_arr as $value1){
                    $export_data=insurance_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "8":
                foreach($export_arr as $value1){
                    $export_data=time_share_owner_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "9":
                foreach($export_arr as $value1){
                    $export_data=internet_users::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "10":
                foreach($export_arr as $value1){
                    $export_data=business_opportunity_leads::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "11":
                foreach($export_arr as $value1){
                    $export_data=medicare_opportunity_leads::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "12":
                foreach($export_arr as $value1){
                    $export_data=payday_loan_leads::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "13":
                foreach($export_arr as $value1){
                    $export_data=hispanic_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "14":
                foreach($export_arr as $value1){
                    $export_data=travelers_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "15":
                foreach($export_arr as $value1){
                    $export_data=pet_lovers_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "16":
                foreach($export_arr as $value1){
                    $export_data=hige_tech_leaders_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "17":
                foreach($export_arr as $value1){
                    $export_data=professional_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "18":
                foreach($export_arr as $value1){
                    $export_data=donors_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "19":
                foreach($export_arr as $value1){
                    $export_data=sms_leads::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "20":
                foreach($export_arr as $value1){
                    $export_data=swimming_pool_leads_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "21":
                foreach($export_arr as $value1){
                    $export_data=gamblers_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "22":
                foreach($export_arr as $value1){
                    $export_data=real_estate_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
            case "23":
                foreach($export_arr as $value1){
                    $export_data=veteran_houehold_database::where('id',$value1)->first();
                    array_push($enter_data,$export_data);
                }
            break;
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
