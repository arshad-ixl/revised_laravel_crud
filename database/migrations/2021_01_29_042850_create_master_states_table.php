<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_states', function (Blueprint $table) {
            $table->increments('id');
            $table->String('state');
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
        Schema::dropIfExists('master_states');
    }
}

// INSERT INTO `master_states` (`id`, `state`) VALUES
// (1, 'ANDAMAN AND NICOBAR ISLANDS'),
// (2, 'ANDHRA PRADESH'),
// (3, 'ARUNACHAL PRADESH'),
// (4, 'ASSAM'),
// (5, 'BIHAR'),
// (6, 'CHATTISGARH'),
// (7, 'CHANDIGARH'),
// (8, 'DAMAN AND DIU'),
// (9, 'DELHI'),
// (10, 'DADRA AND NAGAR HAVELI'),
// (11, 'GOA'),
// (12, 'GUJARAT'),
// (13, 'HIMACHAL PRADESH'),
// (14, 'HARYANA'),
// (15, 'JAMMU AND KASHMIR'),
// (16, 'JHARKHAND'),
// (17, 'KERALA'),
// (18, 'KARNATAKA'),
// (19, 'LAKSHADWEEP'),
// (20, 'MEGHALAYA'),
// (21, 'MAHARASHTRA'),
// (22, 'MANIPUR'),
// (23, 'MADHYA PRADESH'),
// (24, 'MIZORAM'),
// (25, 'NAGALAND'),
// (26, 'ORISSA'),
// (27, 'PUNJAB'),
// (28, 'PONDICHERRY'),
// (29, 'RAJASTHAN'),
// (30, 'SIKKIM'),
// (31, 'TAMIL NADU'),
// (32, 'TRIPURA'),
// (33, 'UTTARAKHAND'),
// (34, 'UTTAR PRADESH'),
// (35, 'WEST BENGAL'),
// (36, 'TELANGANA');
