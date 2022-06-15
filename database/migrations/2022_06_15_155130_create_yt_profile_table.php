<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYtProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yt_profile', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('datebirth');
            $table->string('birth_place');
            $table->string('contact_no');
            $table->string('address');
            $table->string('zone');
            $table->string('gender');
            $table->string('kk_member');
            $table->string('civil_status');
            $table->string('tribe');
            $table->string('religion');
            $table->string('email');
            $table->string('educational_attainment');
            $table->string('occupation');
            $table->string('youth_sector');
            $table->string('organization');
            $table->string('fathers_name');
            $table->string('fathers_occupation');
            $table->string('mothers_name');
            $table->string('mothers_occupation');
            $table->string('living_w_parents');
            $table->string('concerns_issue');
            $table->string('control_no');
            $table->string('batch');
            $table->string('civil_status_specify');
            $table->string('spouse_name');
            $table->string('youth_sec_specify');
            $table->string('org_specify');
            $table->string('encoded_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yt_profile');
    }
}
