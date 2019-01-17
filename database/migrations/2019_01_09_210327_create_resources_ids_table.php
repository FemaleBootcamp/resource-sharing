<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

/*    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('resources_id')->references('id')->on('resources')->onDelete('cascade');
            $table->timestamps();
        });
    }*/
    public function up()
    {
        public function index()
        {       
        //Use Schema builder here
        $columns = Schema::getColumnListing('id');
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources');
    }
}
