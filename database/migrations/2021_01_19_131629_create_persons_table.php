<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            // tên khai sinh, thường dùng, ... số điện thoại
            $table->string('private_information');

            // cha mẹ, vợ / chồng , con , ... ngày sinh, sống/ chết, nghề nghiệp, nơi ở gia đình, thành phần gia đình
            $table->string('family');

            // thứ, ngày tháng năm
            $table->string('date_of_application');

            // cha mẹ ace ruột , cha mẹ vợ chồng, của vợ chồng con
            $table->string('economic_situation');

            // ngày tháng năm nhập xuất ngủ, cấp bậc đơn vị, nghiệp vụ được đào tạo, nghề nghiệp, đã xếp và đơn vị dự bị động viên
            $table->string('technical expertise');

            $table->string('comment');


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
        Schema::dropIfExists('persons');
    }
}
