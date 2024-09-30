<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('pwd_no');
            $table->date('date_applied');
            $table->string('application');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix_of_applicant');
            $table->date('birthday');
            $table->integer('age');
            $table->string('gender');
            $table->string('status');
            $table->string('house_and_street');
            $table->integer('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('region');
            $table->string('landline');
            $table->string('mobile_no');
            $table->string('email_add');
            $table->string('educational_attain');
            $table->string('status_of_employment');
            $table->string('types_of_employment');
            $table->string('category_of_employment');
            $table->string('occupations'); 
            $table->string('types_of_disease');
            $table->string('kinds_of_disease');
            $table->string('organizational_affliated_name');
            $table->string('contact_person');
            $table->string('office_address');
            $table->integer('sss_no');
            $table->integer('gsis_no');
            $table->integer('pag-ibig_no');
            $table->integer('psn_no');
            $table->integer('tel_no');   
            $table->string('father_last_name');
            $table->string('father_first_name');
            $table->string('father_middle_name');
            $table->string('suffix_of_father');   
            $table->string('mother_last_name');
            $table->string('mother_first_name');
            $table->string('mother_middle_name');
            $table->string('guardian_last_name');
            $table->string('guardian_first_name');
            $table->string('guardian_middle_name');
            $table->string('suffix_of_guardian'); 
            $table->string('applicant_accomplished_by');
            $table->string('last_name_of_accomplished_officer');
            $table->string('first_name_of_accomplished_officer');
            $table->string('middle_name_of_accomplished_officer');
            $table->string('suffix_of_accomplished_officer');    
            $table->integer('licensed_no_of_physician');
            $table->string('last_name_of_physician');
            $table->string('first_name_of_physician');
            $table->string('middle_name_of_physician');
            $table->string('suffix_of_physician');
            $table->string('last_name_of_processing_officer');
            $table->string('first_name_of_processing_officer');
            $table->string('middle_name_of_processing_officer');
            $table->string('suffix_of_processing_officer'); 
            $table->string('last_name_of_approving_officer');
            $table->string('first_name_of_approving_officer');
            $table->string('middle_name_of_approving_officer');
            $table->string('suffix_of_approving_officer');
            $table->string('last_name_of_encoder');
            $table->string('first_name_of_encoder');
            $table->string('middle_name_of_encoder');
            $table->string('suffix_of_encoder');
            $table->string('last_name_of_reporting_unit');
            $table->string('first_name__of_reporting_unit');
            $table->string('middle_name_of_reporting_unit');
            $table->string('suffix_of_reporting_unit');
            $table->string('last_name_of_control_unit');
            $table->string('first_name__of_control_unit');
            $table->string('middle_name_of_control_unit');
            $table->string('suffix_of_control_unit');
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
        Schema::dropIfExists('registrations');
    }
};
