<?php
namespace App\Http\Controllers\API; //1
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youth;
use App\Http\Controllers\API\BaseController as BaseController; //2
use App\Http\Resources\Youth as YouthResource; //3

class YouthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $youthlist = Youth::all();

        return $this->sendResponse(YouthResource::collection($youthlist), 'List');

        // return view ('components.youth.index');    
    }

    public function create(){
        return view('components.youth.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'datebirth' => 'required',
            'birth_place' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'zone' => 'required',
            'gender' => 'required',
            'kk_member' => 'required',
            'civil_status' => 'required',
            'tribe' => 'required',
            'religion' => 'required',
            'email' => 'required',
            'educational_attainment' => 'required',
            'occupation' => 'required',
            'youth_sector' => 'required',
            'organization' => 'required',
            'fathers_name' => 'required',
            'fathers_occupation' => 'required',
            'mothers_name' => 'required',
            'mothers_occupation' => 'required',
            'living_w_parents' => 'required',
            'concerns_issue' => 'required',
            'control_no' => 'required',
            'batch' => 'required',
            'civil_status_specify' => 'required',
            'spouse_name' => 'required',
            'youth_sec_specify' => 'required',
            'org_specify' => 'required',
            'encoded_by'=> 'required',
        ]);

       // return Youth::create($request->all());
       $input = $request->all();
       $newprofile = Product::create($input);
   
       return $this->sendResponse(new YouthResource($newprofile), 'Profile has beed Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Youth::find($id);
  
        if (is_null($profile)) {
            return $this->sendError('Profile not found.');
        }
   
        return $this->sendResponse(new YouthResource($profile), 'Profile Retrieved Successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $saveprofile = Youth::find($id);   
        $saveprofile->fname = $input['fname'];
        $saveprofile->fname = $input['lname'];
        $saveprofile->fname = $input['mname'];
        $saveprofile->fname = $input['datebirth'];
        $saveprofile->fname = $input['birth_place'];
        $saveprofile->fname = $input['contact_no'];
        $saveprofile->fname = $input['address'];
        $saveprofile->fname = $input['zone'];
        $saveprofile->fname = $input['gender'];
        $saveprofile->fname = $input['kk_member'];
        $saveprofile->fname = $input['civil_status'];
        $saveprofile->fname = $input['tribe'];
        $saveprofile->fname = $input['religion'];
        $saveprofile->fname = $input['email'];
        $saveprofile->fname = $input['educational_attainment'];
        $saveprofile->fname = $input['occupation'];
        $saveprofile->fname = $input['youth_sector'];
        $saveprofile->fname = $input['organization'];
        $saveprofile->fname = $input['fathers_name'];
        $saveprofile->fname = $input['fathers_occupation'];
        $saveprofile->fname = $input['mothers_name'];
        $saveprofile->fname = $input['mothers_occupation'];
        $saveprofile->fname = $input['living_w_parents'];
        $saveprofile->fname = $input['concerns_issue'];
        $saveprofile->fname = $input['control_no'];
        $saveprofile->fname = $input['batch'];
        $saveprofile->fname = $input['civil_status_specify'];
        $saveprofile->fname = $input['spouse_name'];
        $saveprofile->fname = $input['youth_sec_specify'];
        $saveprofile->fname = $input['org_specify'];
        $saveprofile->fname = $input['encoded_by'];
        $saveprofile->save();
   
        return $this->sendResponse(new ProductResource($product), 'Product Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Youth::find($id);
        $profile->delete();
   
        return $this->sendResponse([], 'Profile Deleted Successfully.');
    }
}
