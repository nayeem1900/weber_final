<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\AboutDet;
use App\Model\AboutH;
use App\Model\Backend\ClientP;
use App\Model\Carrier;
use App\Model\Etender;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Wde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view ('frontend.layouts.home',$data);

    }
    public function iawnp(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.iawnp',$data);
    }
    public function efd(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.efd',$data);
    }
    public function pdb(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.pdb',$data);
    }
    public function ipsd(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.ipsd',$data);
    }

    public function ats(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.ats',$data);
    }
    public function hlts(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.hlts',$data);
    }

    public function pts(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.pts',$data);
    }
    public function threeds(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.3dd',$data);
    }

    public function irs(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.irs',$data);
    }
    public function atsd(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.atsd',$data);
    }

    public function mvts(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.mvts',$data);
    }
    public function lv(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.lv',$data);
    }

    public function t(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.t',$data);
    }

    public function three_d(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.three_d_design',$data);
    }
    public function pcc(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.pcc',$data);
    }
    public function py(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.py',$data);
    }

    public function im(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.im',$data);
    }

    public function aps(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.aps',$data);
    }

    public function osri(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.osri',$data);
    }
    public function pcf(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.pcf',$data);
    }
    public function vids(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        return view('frontend.pages.vids',$data);
    }
    public function etender(){

        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        $data['allData']=Etender::all();

        return view('frontend.pages.brchoure',$data);

    }
public function aboutus(){

    $data['logo']=Logo::first();
    $data['sliders']=Slider::all();
    $data['abouts']=AboutH::first();
    $data['aboutsd'] = AboutDet::all();
    $data['clientps'] = ClientP::all();
    $data['allData']=Etender::all();

    return view('frontend.pages.about-us',$data);

}

    public function contact(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['abouts']=AboutH::first();
        $data['aboutsd'] = AboutDet::all();
        $data['clientps'] = ClientP::all();
        $data['allData']=Etender::all();
        return view('frontend.pages.contact',$data);
    }








/////








    public function ibch(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibch',$data);
    }
    public function ibhmirpur(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibh_mirpur',$data);
    }
    public function ibhmugdha(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibh_mugdha',$data);
    }
    public function ibmoh(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibmoh',$data);
    }
    public function ibhluxmipur(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibh-luxmipur',$data);
    }
    public function ibch_manikgonj(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibch_manikgonj',$data);
    }
    public function wade(){
        $data['logo']=Logo::first();
        $data['wde']=Wde::first();
        $data['wde_img']= Wde::all();
        return view('frontend.pages.workflow_automation_and_data_engineering',$data);
    }
    public function jakat(){
        $data['logo']=Logo::first();
        return view('frontend.pages.jakat',$data);
    }
    public function hospitalinfo(){
    $data['logo']=Logo::first();
    return view('frontend.pages.hospital_info',$data);
    }
    public function educationinfo(){
        $data['logo']=Logo::first();
        return view('frontend.pages.educational_institute',$data);
    }

    public function jobapply(){
        $data['logo']=Logo::first();
        return view('frontend.pages.job_apply',$data);
    }
    public function foundationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.foundation_committee',$data);
    }
    public function executivecommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.executive_committee',$data);
    }
    public function auditcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.audit_committee',$data);
    }
    public function hospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.hospital_committee',$data);
    }
    public function communityhospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.community_hospital_committee',$data);
    }
    public function educationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.education_committee',$data);
    }
    public function healtheducationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.health_education_committee',$data);
    }

    public function career(){

        $data['logo']=Logo::first();
        $data['allData']=Carrier::all();

        return view('frontend.pages.career',$data);

    }

    public function nursingbarisal(){

        return view('frontend.pages.islami_bank_nursing_barisal');
    }

}
