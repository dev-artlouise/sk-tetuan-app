<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Youth extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'fname' => $this->fname,
            'lname' => $this->lname,
            'mname' => $this->mname,
            'datebirth' => $this->datebirth,
            'birth_place' => $this->birth_place,
            'contact_no' => $this->contact_no,
            'address' => $this->address,
            'zone' => $this->zone,
            'gender' => $this->gender,
            'kk_member' => $this->kk_member,
            'civil_status' => $this->civil_status,
            'tribe' => $this->tribe,
            'religion' => $this->religion,
            'email' => $this->email,
            'educational_attainment' => $this->educational_attainment,
            'occupation' => $this->occupation,
            'youth_sector' => $this->youth_sector,
            'organization' => $this->organization,
            'fathers_name' => $this->fathers_name,
            'fathers_occupation' => $this->fathers_occupation,
            'mothers_name' => $this->mothers_name,
            'mothers_occupation' => $this->mothers_occupation,
            'living_w_parents' => $this->living_w_parents,
            'concerns_issue' => $this->concerns_issue,
            'control_no' => $this->control_no,
            'batch' => $this->batch,
            'civil_status_specify' => $this->civil_status_specify,
            'spouse_name' => $this->spouse_name,
            'youth_sec_specify' => $this->youth_sec_specify,
            'org_specify' => $this->org_specify,
            'encoded_by' => $this->encoded_by,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'), 
        ];
    }
}
